<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class newController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        $this->load->view("newView");
    }
    
    public function Hello(){
        $this->load->view("newView");
    }
    
    public function directPage(){
        
        $this->load->view('include/header.php');
	$this->load->view('welcome_message.php');
        $this->load->view('include/footer.php');
    }
    
    public function submitForm(){
        $this->form_validation->set_rules('userName', 'User name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('firstName', 'Lirst name', 'required');
        $this->form_validation->set_rules('lastName', 'Last name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[confirmPassword]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required');
        $this->form_validation->set_rules('human', 'Confirm you are not a robot', 'required');
        
        if( $this->form_validation->run() == FALSE ){
            $this->load->view('include/header');
            $this->load->view('newView');
            $this->load->view('include/footer');
        } else {
            $data = array(
                'uname'=> $this->input->post('userName'),
                'email'=>   $this->input->post('email'),
                'firstName'=> $this->input->post('firstName'),
                'lastName'=> $this->input->post('lastName'),
                'password'=> sha1($this->input->post('password'))
            );
            $this->newModel->addDB($data);
        }
        
        $this->load->view('include/header');
        $this->load->view('loginPage');
        $this->load->view('include/footer');
    }
    
    public function loginForm(){
        $this->form_validation->set_rules('userName', 'userName', 'trim|required' );
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        
        if ($this->form_validation->run()== FALSE ) {
            $this->load->view('include/header');
            $this->load->view('loginPage');
            $this->load->view('include/footer');
        } else {
            $username = $this->input->post('userName');
            $password = sha1($this->input->post('password'));
            
           $data = $this->newModel->signin($username,$password);
           if ($data){
               foreach ( $data as $dat ){
                   $sessionArray = array(
                   'uname' =>$dat->uname,
                  'email'=> $dat->email,
                   'firstName' =>$dat->firstName,
                  'lastName' =>$dat->lastName,
                   'id' => $dat->id, 
                   'profile_picture'=>$dat->profile_picture,    
                           );
               }
           $this->session->set_userdata($sessionArray);
           $this->session->set_userdata('loginSession',$sessionArray);
           #$this->fetchAlldata();
           
           $this->load->view('include/header');
           $this->load->view('homePage');
           $this->load->view('include/footer');
           
           }  else {
               $loginData['loginError'] = 'Username or Password is incorrect, kindly provide the correct details';
                $this->load->view('include/header');
                $this->load->view('loginPage', $loginData);
                $this->load->view('include/footer');
           }
        }
    }
    
     
    public function pictureUpload(){
        
        
            $config['upload_path']          = 'assets/uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 300;
            $config['max_width']            = 2000;
            $config['max_height']           = 2000;

            $this->load->library('upload', $config);
           $id = $this->session->userdata('id') ;
            if($this->upload->do_upload('uploadFile')){
                $upload_data = $this->upload->data() ;
                
               $file_name = $upload_data['file_name'] ;
               $this->newModel->updatePictureName($id, $file_name);
               $this->load->view('include/header');
                $this->load->view('homePage');
                $this->load->view('include/footer');
               
            }else {
                echo $this->upload->display_errors();
        }
        
        
    }

    Public function fetchAlldata(){
      
      $record['fetchRecord'] = $this->newModel->fetchAllData() ;
      $this->load->view('include/header');
      $this->load->view('welcomePage', $record);
      #$this->load->view('include/footer');
  }
   
    Public function logout(){
        $this->session->unset_userdata('loginSession') ;
        $this->load->view('include/header');
        $this->load->view('loginPage');
        $this->load->view('include/footer');
    }
    
    public function editUser(){
        $userID = $this->uri->segment(3);
        $userData['userInfo'] = $this->newModel->userWithId($userID);
        $this->load->view('include/header');
        $this->load->view('editUser', $userData);
        $this->load->view('include/footer');
    }
    
    public function deleteUser(){
         $userID = $this->uri->segment(3);
         $this->newModel->deleteUser($userID);
         $this->fetchAlldata();
    }
    
    Public function viewUser(){
        $userID = $this->uri->segment(3);
        $userData['userInfo'] = $this->newModel->userWithId($userID);
        $this->load->view('include/header');
        $this->load->view('viewUser', $userData);
        $this->load->view('include/footer');
    }
    
     public function updateForm(){
        
        $this->form_validation->set_rules('userName','userName', 'trim|required');
        $this->form_validation->set_rules('firstName','firstName', 'trim|required');
        $this->form_validation->set_rules('lastName','lastName', 'trim|required');
        $this->form_validation->set_rules('email','email', 'trim|required');
        
       if ($this->form_validation->run()== FALSE ) {
            $this->load->view('include/header');
            $this->load->view('editUser');
            $this->load->view('include/footer');
       } else {
           
           $id = $this->input->post('id');
           $updateData = array(
               'uname' => $this->input->post('userName'),
               'email' => $this->input->post('email'),
               'firstName' => $this->input->post('firstName'),
               'lastName' => $this->input->post('lastName'),
           );
          $this->newModel->updateUser($updateData, $id) ;
          $this->fetchAlldata();
       }
    }
    
}