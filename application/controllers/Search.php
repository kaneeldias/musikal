<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
		$jsonReply = [];

		$this->load->library('RequestsLib');

		$r = json_decode($this->input->raw_input_stream);

		$song = $r->title;
		$artist = $r->artist;

		if($artist == ""){
			$response = Requests::get('http://musicbrainz.org/ws/2/recording/?query=%22'.$song.'%22&fmt=json');
		}
		else if($song == ""){
			$response = Requests::get('http://musicbrainz.org/ws/2/recording/?query=artist:%22'.$artist.'%22&fmt=json');
		}
		else{
			$response = Requests::get('http://musicbrainz.org/ws/2/recording/?query=%22'.$song.'%22%20AND%20artist:'.$artist.'&fmt=json');
		}

		$json = json_decode($response->body);
		foreach($json->recordings as $recording){
			$arr = [];
			$arr['title'] = $recording->title;
			$arr['artists'] = [];
			foreach($recording->{'artist-credit'} as $artist){
				array_push($arr['artists'], $artist->artist->name);
			}
			$arr['id'] = $recording->id;
			if(!isset($recording->releases[0]->title)) continue;
			else $arr['album'] = $recording->releases[0]->title;
			if(!isset($recording->releases[0]->date)) continue;
			else $arr['date'] = substr($recording->releases[0]->date, 0, 4);
			array_push($jsonReply, $arr);
		}

		echo json_encode($jsonReply);
	}

	public function recording()
	{
		$jsonReply = [];

		$this->load->library('RequestsLib');

		$r = json_decode($this->input->raw_input_stream);
		$id = $r->id;

		$response = Requests::get('http://musicbrainz.org/ws/2/recording/?query=rid:'.$id.'&fmt=json');
		$json = json_decode($response->body);
		$jsonReply['title'] = $json->recordings[0]->title;
		$jsonReply['artists'] = [];
		foreach($json->recordings[0]->{'artist-credit'} as $artist){
			array_push($jsonReply['artists'], $artist->artist->name);
		}
		$jsonReply['album'] = $json->recordings[0]->releases[0]->title;
		$jsonReply['album_id'] = $json->recordings[0]->releases[0]->id;
		$jsonReply['date'] = substr($json->recordings[0]->releases[0]->date, 0, 4);
		echo json_encode($jsonReply);
	}

	public function album()
	{
		$jsonReply = [];

		$this->load->library('RequestsLib');

		$r = json_decode($this->input->raw_input_stream);
		$id = $r->id;

		$response = Requests::get('http://musicbrainz.org/ws/2/release/'.$id.'?inc=artist-credits&fmt=json');
		$json = json_decode($response->body);
		$jsonReply['artists'] = [];
		foreach($json->{'artist-credit'} as $artist){
			array_push($jsonReply['artists'], $artist->name);
		}
		$jsonReply['album'] = $json->title;
		$jsonReply['date'] = substr($json->date, 0, 4);
		echo json_encode($jsonReply);
	}
}
