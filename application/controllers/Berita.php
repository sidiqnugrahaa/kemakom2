<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_berita');
		$this->load->helper('text');

	}

	public function index(){
		$data['berita'] = $this->M_berita->listingfr();
		$this->load->view('berita',$data);
	}

	public function read($slug){
		$data['berita'] = $this->M_berita->read($slug);
		$this->load->view('post',$data);
	}
}
