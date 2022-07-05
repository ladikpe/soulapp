<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pointer extends CI_Controller{
    
    public function loginPointer(){
        
        $this->load->view('include/header1');
        $this->load->view('loginPage');
        $this->load->view('include/footer1');
    }
    
    public function regPointer(){
        $this->load->view('include/header');
        $this->load->view('newView');
        $this->load->view('include/footer');
        
    }
    
    public function pointChatHome(){
        $this->load->view('include/header');
        $this->load->view('chat/category');
        $this->load->view('include/footer');
    }
    
    Public function redirectHomepage(){
        $this->load->view('include/header');
        $this->load->view('homePage');
        $this->load->view('include/footer');
        
    }
    
     Public function uploadPicture(){
        $this->load->view('include/header');
        $this->load->view('uploadPicture');
        $this->load->view('include/footer');
        
    }
    
    Public function viewUser(){
        $this->load->view('include/header');
        $this->load->view('viewUser');
        $this->load->view('include/footer');
        
    }
    
     Public function php_api(){
        $this->load->view('include/header');
        $this->load->view('include/API');
        $this->load->view('include/footer');
        
    }
}
