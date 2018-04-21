<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {

	public function song(){
		return $this->load->view("view/song.php");
	}

	public function album(){
		return $this->load->view("view/album.php");
	}
}
