<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['main_content']= 'index';
                $this->load->view('include/index_template',$data);
	}
        public function about()
        {
            $data['main_content']= 'about';
            $this->load->view('include/template',$data);
        }
        public function services()
        {
            $data['main_content']= 'services';
            $this->load->view('include/template',$data);
        }
        public function contact()
        {
            $data['main_content']= 'contact';
            $this->load->view('include/template',$data);
        }
        public function portfolio()
        {
            //$data['main_content']= 'portfolio';
            $this->load->view('portfolio');
        }
       
        public function building_drawing(){
            $data['main_content']= 'building_design';
            $this->load->view('include/template',$data);
        }
        public function interior_design(){
            $data['main_content']= 'interior_design';
            $this->load->view('include/template',$data);
        }
        function three_d(){
            $data['main_content']= '3d_design';
            $this->load->view('include/template',$data);
        }
        public function construction(){
            $data['main_content']= 'construction';
            $this->load->view('include/template',$data);
        }
        public function image_view(){
//            $data['main_content']= 'fancy';
            $this->load->view('include/fancy');
        }
}
