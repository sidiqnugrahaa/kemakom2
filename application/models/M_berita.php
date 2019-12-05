<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model
{
    public function listing() {
        $this->db->select('berita.*, kategori_berita.nama_kategori');
        $this->db->from('berita');
        $this->db->join('kategori_berita','kategori_berita.kd_kategori = berita.kd_kategori_berita', 'LEFT');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function listingfr() {
        $this->db->select('berita.*, kategori_berita.nama_kategori');
        $this->db->from('berita');
        $this->db->join('kategori_berita','kategori_berita.kd_kategori = berita.kd_kategori_berita', 'LEFT');
        $this->db->where('status_berita',1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listinghome() {
        $this->db->select('berita.*, kategori_berita.nama_kategori');
        $this->db->from('berita');
        $this->db->join('kategori_berita','kategori_berita.kd_kategori = berita.kd_kategori_berita', 'LEFT');
        $this->db->where('status_berita',1);
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
    }

     public function read($slug_berita) {
        $this->db->select('berita.*, kategori_berita.nama_kategori, users.nama');
        $this->db->from('berita');
        $this->db->join('kategori_berita','kategori_berita.kd_kategori= berita.kd_kategori_berita', 'LEFT');
        $this->db->join('users','users.id_user = berita.id_user','LEFT');
        $this->db->where('slug_berita',$slug_berita);
        $this->db->order_by('id_berita','DESC');
        $query = $this->db->get();
        return $query->row();
    }
    public function tambah ($data) {
        $this->db->insert('berita',$data);
    }
    
    public function edit ($data) {
        $this->db->where('id_berita',$data['id_berita']);
        $this->db->update('berita',$data);
    }
    
    public function delete ($data){
        $this->db->where('id_berita',$data['id_berita']);
        $this->db->delete('berita',$data);
    }

    public function listing_cat() {
        $this->db->select('*');
        $this->db->from('kategori_berita');
        $query = $this->db->get();
        return $query->result_array();
    }
}