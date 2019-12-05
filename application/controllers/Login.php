<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }

	public function index()
	{
        if($this->session->userdata('masuk')==TRUE){
            redirect(base_url('admin/dashboard'));
        }
		$this->load->view('login');
	}

	public function auth(){
		$username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $where = array(
            'username' => $username,
            'password' => $password
            );

        $cek = $this->m_login->login($where)->num_rows();
        $data = $this->m_login->login($where)->row_array();

        if($cek > 0){
            $level=$data['level'];
            $nama=$data['nama'];
            $id=$data['id_user'];
            $this->session->set_userdata('id',$id);
            $this->session->set_userdata('level',$level);
            $this->session->set_userdata('nama',$nama);
            $this->session->set_userdata('masuk',true);
            redirect('login/berhasil');
 
        }else{
            redirect('login/gagal');
        }
    }

    public function berhasil(){
    	redirect(base_url('admin/dashboard'));
    }

    public function gagal(){
		echo $this->session->set_flashdata('msg','Username Atau Password Salah !');
		redirect('login');
    }

    public function logout(){
         $this->session->sess_destroy();
         redirect('login');
    }
}
