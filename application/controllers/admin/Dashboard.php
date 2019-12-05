<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk')!=TRUE){
            redirect(base_url('login'));
        }
    }

	public function index(){
		$this->load->view('admin/dashboard');
	}

	public function posting(){
		$this->load->view('admin/data_posting');
	}
}
