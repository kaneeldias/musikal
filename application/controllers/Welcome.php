<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view("templates/header.php");
		//$this->load->view("index.php");
		$this->load->view("templates/footer.php");
		return;
	}

	public function main(){
		return $this->load->view("search.php");
	}
}
