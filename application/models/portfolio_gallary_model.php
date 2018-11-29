<?php

class Portfolio_gallary_model extends CI_Model{
    var $gallary_path;
    var $gallary_path_url; 
    
    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->gallary_path =  realpath(APPPATH.'../template/img/portfolio/');
                $this->gallary_path_url = base_url().'template/img/portfolio/';
        }

    function do_upload(){
        $config = array(
            'allowed_types'=>'jpg|jpeg|png|gif',
            'upload_path'=>$this->gallary_path,
            'max_size'=>2048
        );
        $this->load->library('upload',$config);
        $this->upload->do_upload();
        $image_data =$this->upload->data();
        
        $config = array(
            'source_image'=>$image_data['full_path'],
            'new_image'=>$this->gallary_path.'/thumbs',
            'maintain_ratio'=>true,
            'width'=>650,
            'height'=>350
        );
        $this->load->library('image_lib',$config);
        $this->image_lib->resize();
    }
    function get_images(){
        $files = scandir($this->gallary_path);
        $files =  array_diff($files,array('.','..','thumbs'));
        $images = array();
        foreach ($files as $file){
            $images []= array(
                'url'=>$this->gallary_path_url.$file,
                'thumb_url'=>$this->gallary_path_url.'thumbs/'.$file
            );
        }
         return $images;
    }
}