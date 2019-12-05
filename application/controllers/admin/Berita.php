<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk')!=TRUE){
            redirect(base_url('login'));
        }
		$this->load->model('M_berita');

	}

	public function index(){
		$data['berita'] = $this->M_berita->listing();
		$this->load->view('admin/data_posting',$data);
	}

	public function posting(){
		$this->load->view('admin/data_posting');
	}

	public function tambah() {
		
		$kategori	= $this->M_berita->listing_cat();
		$v = $this->form_validation;
		$v->set_rules('judul_berita','Judul Berita','required',
			array(	'required'		=> 'Judul Postingan harus diisi'));								   			
		$v->set_rules('isi','Postingan','required',
			array(	'required'		=> 'Postingan harus diisi'));
		if($v->run()) {
			$config['upload_path'] 		= './assets/upload/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				$data = array('kategori'	=> $kategori,
							  'error'		=> $this->upload->display_errors());
				$this->load->view('admin/tambah_postingan', $data);
			}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 900; // Pixel
				$config['height'] 			= 600; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$i = $this->input;
				$data = array(	'id_user'				=> 1,//$this->session->userdata('id'),
								'kd_kategori_berita'	=> $i->post('kategori'),
								'slug_berita'			=> url_title($i->post('judul_berita'),'dash',TRUE),
								'judul_berita'			=> $i->post('judul_berita'),
								'isi_berita'			=> $i->post('isi'),
								'status_berita'			=> $i->post('status'),
								'gambar'				=> $upload_data['uploads']['file_name'],
								'tanggal_berita'		=> date('Y-m-d H:i:s')
								);
				$this->M_berita->tambah($data);
				$this->session->set_flashdata('sukses','Postingan telah ditambahkan');
				redirect(base_url('admin/berita'));
			}
		}
		$data['kategori'] = $kategori;
		$this->load->view('admin/tambah_postingan', $data);
	}

	public function delete($id_berita) {
		$data = array('id_berita'	=> $id_berita);
		$this->M_berita->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/berita'));		
	}
}
