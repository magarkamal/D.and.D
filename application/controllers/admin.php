<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          //load the login model
          $this->load->model('login_model');
     }

     public function index()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_panel');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         $this->load->view('admin_panel');
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('admin/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
     }
     function portfolio_gallary(){
         $this->load->model('portfolio_gallary_model');
         
         if($this->input->post('upload')){
             $this->portfolio_gallary_model->do_upload();
         }
         $data['images']=  $this->portfolio_gallary_model->get_images();
         $this->load->view('admin_panel',$data);
     }
}?>