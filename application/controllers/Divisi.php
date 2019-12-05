<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function divkomtekinfo(){
		$this->load->view('divisi/divkom');
	}
	public function divroh(){
		$this->load->view('divisi/divroh');
	}
	public function divadsospol(){
		$this->load->view('divisi/sospol');
	}
	public function dpo(){
		$this->load->view('divisi/dpo');
	}
	public function divdiklat(){
		$this->load->view('divisi/diklat');
	}
	public function dpmb(){
		$this->load->view('divisi/dpmb');
	}
	public function dpm(){
		$this->load->view('divisi/dpm');
	}
}
