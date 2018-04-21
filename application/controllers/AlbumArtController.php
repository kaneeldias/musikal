<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlbumArtController extends CI_Controller {

	public function index(){
		$jsonReply = [];

		$this->load->library('RequestsLib');

		$r = json_decode($this->input->raw_input_stream);
		$id = $r->id;

		$response = Requests::get('https://coverartarchive.org/release/'.$id);

		$json = json_decode($response->body);
		$jsonReply['url'] = $json->images[0]->thumbnails->small;
		echo json_encode($jsonReply);
	}

}
