<?php 
class M_image extends CI_Model {
 public function __construct()  {
    parent::__construct();
    $this->load->library('image_lib');
}

public function do_resize($filename)
{

    $source_path =  'uploads/' . $filename;
    $target_path =  'uploads/thumb/thumb_'.$filename;

    $config_manip = array(

        'image_library' => 'gd2',
        'source_image' => $source_path,
        'new_image' => $target_path,
        'maintain_ratio' => TRUE,
        'width' => 150,
        'height' => 150
    );
    $this->image_lib->initialize($config_manip);
    $this->load->library('image_lib', $config_manip);


    if (!$this->image_lib->resize()) {
        echo $this->image_lib->display_errors();
        die();
    }
}

public function img_upload()
{
    $config = array(
        'upload_path' => "uploads",
        'allowed_types' => "*",
        'overwrite' => TRUE,
        'max_size' => "5048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        'max_height' => "200",
        'max_width' => "260"
    );
    $this->upload->initialize($config);
    $this->load->library('upload', $config);

    if($this->upload->do_upload()) {
        $response   =    array('upload_data' => $this->upload->data());
        $this->do_resize($response['upload_data']['file_name']);

    }
    /*else{
        $error              =   array('error'=>$this->upload->display_errors());
        //print_r($error);die(); 

    }*/
  }
}