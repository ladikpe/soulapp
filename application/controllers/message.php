<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class message extends CI_Controller{
    
    public function index(){
        
    }
    
    public function search(){
        $this->form_validation->set_rules('search', 'search', 'required|trim');
        
        if($this->form_validation->run()==TRUE){
           $search = $this->input->post('search');
           
         $searchResult['searchResult'] =  $this->newModel->search($search);
         
         $this->load->view('include/header');
         $this->load->view('chat/search', $searchResult);
         $this->load->view('include/footer');
        }
    }
    
    public function addComment(){
        
        $comment = $this->input->post('comment');
        $userID = $this->input->post('userID');
        $messageID = $this->input->post('messageID');
        $titleID = $this->input->post('titleID');
        $submit = $this->input->post('Submit');
        $format = 'y-m-d H:i:s';
        $date = date($format);
        if($submit=='comment'){
            $dataArray = array(
            'comment'=>$comment,
            'userID'=>$userID,
            'messageID'=>$messageID,
            'date'=>$date,
        );
           $this->newModel->insertComment($dataArray);
           $this->routeCategory($titleID);
       } elseif ($submit=='like') {
           $count = 1;
            $dataArray = array(
            'count'=>$count,
            'messageID'=>$messageID,
            'userID'=>$userID,
        );
        
        $fetchLike = $this->newModel->confirmUserId($userID, $messageID);
        if ($fetchLike){
            $this->routeCategory($titleID);
        }else{
            $this->newModel->insertLike($dataArray);
            $this->routeCategory($titleID);
        }
        
        
       }
        
    }

    public function Addchat(){
        
        $this->form_validation->set_rules('messageName', 'messageName', 'required');
        $this->form_validation->set_rules('messageHeader', 'messageHeader', 'required');
        
        if ($this->form_validation->run()== FALSE ){
            $this->load->view('include/header');
            $this->load->view('chat/chatHome');
            $this->load->view('include/footer');
        } else{
            $this->session->userdata('loginSession');
            $userID = $this->session->userdata('id');
            $format = 'y-m-d H:i:s';
            $date = date($format);
            $user_id = $this->input->post('userID');
            
            $profile_picture = $this->newModel->fetch_profile_picture($userID);
            
            $messageArray = array(
                'message'=>  $this->input->post('messageName'),
                'titleID' => $this->input->post('titleID'),
                'messageHeader'=>  $this->input->post('messageHeader'),
                'date'=> $date,
                'user_id'=>  $userID,
             );
            
            $profile_picture = $profile_picture->profile_picture;
             $this->newModel->insertChat($messageArray);
             $titleID = $this->input->post('titleID') ;
             $this->routeCategory($titleID);
             
        }
    }
    
    public function routeCategory($titleID){
        if($titleID == 1){
            $this->getOneDrive();
        }elseif($titleID ==3){
            $this->getMSTEams();
        }elseif($titleID == 2){
            $this->getSfb();
        }elseif($titleID==4){
            $this->getSharePoint();
        }elseif($titleID==5){
            $this->getExchangeOnline();
        }
    }
    
    public function selectCategory(){
        $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/selectCategory") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
            echo $titleID = $this->input->get('category');
            
            $this->session->set_userdata('titleSession', $titleID);
            if(isset($titleID)){
               $this->session->userdata('titleSession');
               $titleIDinSession  = $this->session->userdata('titleSession');
               $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
               echo ' ID before else is '. $titleIDinSession ;
            }else{
              $this->session->userdata('titleSession');
              $titleIDinSession  = $this->session->userdata('titleSession');
               echo $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            }
            $displayChat['displayChat'] = $this->newModel->fetchPagination($config['per_page'], $page, $titleIDinSession );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
    }

        public function fetchCategory(){
         
        $categoryData['categoryData'] = $this->newModel->fetchCategory();
        if(isset($categoryData)){
            $this->load->view('include/header');
            $this->load->view('chat/category', $categoryData );
            $this->load->view('include/footer');
            
        }
            
    }
    
    public function getOneDrive(){ 
        
         $titleID = 1 ;
         $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/getOneDrive") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
           
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $displayChat['displayChat']= $this->newModel->fetchPagination($config['per_page'], $page, $titleID );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
           
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
        
    }
    
    public function getExchangeOnline(){
         $titleID = 5 ;
         $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/getExchangeOnline") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
           
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $displayChat['displayChat'] = $this->newModel->fetchPagination($config['per_page'], $page, $titleID );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
        
    }
    
    public function updateMessage(){
        
        $messageID = $this->input->post('messageID');
        $message = $this->input->post('message');
        $messageHeader = $this->input->post('messageHeader');
        $format = 'y-m-d H:i:s' ;
        $messageDate = date($format) ;
        
       $dataArray = array(
           'message'=>$message,
           'messageHeader'=>$messageHeader,
           'date'=>$messageDate
       );
       $this->newModel->updateMessage($dataArray, $messageID);
       
       $this->fetchAllChat(); 
    }

        public function fetchAllChat(){
        
        $record['fetchChat'] = $this->newModel->fetchAllChat() ;
        $this->load->view('include/header');
        $this->load->view('chat/viewChat', $record);
        #$this->load->view('include/footer');
    }
    
    public function editChat(){
        $messageID = $this->uri->segment(3);
        $fetch_message['fetch_message'] = $this->newModel->fetchChatById($messageID) ;
        
        $this->load->view('include/header');
        $this->load->view('chat/editedChat', $fetch_message);
        $this->load->view('include/footer');
        
    }


    public function  deleteChat(){
       $chatID = $this->uri->segment(3) ;
       
       $this->newModel->deleteChat($chatID);
       $this->fetchAllChat();
    }

    public function getMSTEams(){
         $titleID = 3 ;
         $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/getMSTEams") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
           
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $displayChat['displayChat'] = $this->newModel->fetchPagination($config['per_page'], $page, $titleID );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
        
    }
    
    public function getSharePoint(){
         $titleID = 4 ;
         $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/getSharePoint") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
           
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $displayChat['displayChat'] = $this->newModel->fetchPagination($config['per_page'], $page, $titleID );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
        
    }
    
    public function getSfb(){
         $titleID = 2 ;
         $this->form_validation->set_rules('category', 'category', 'required');
            $total_row = $this->newModel->record_count();
            $config["base_url"] = base_url("message/getSfb") ;
            $config['total_rows'] = $total_row;
            $config['per_page'] = 5;
            $config["uri_segment"] = 3;
            $config['use_page_numbers'] = TRUE;
            $config['num_links'] = $total_row ;
            $config['cur_tag_open'] = '&nbsp;<a class="current">' ;
            $config['cur_tag_close'] = '</a>';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Previous';
            $this->pagination->initialize($config);
           
            $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $displayChat['displayChat'] = $this->newModel->fetchPagination($config['per_page'], $page, $titleID );
            $displayChat['titleID'] = $titleID ;
            $displayChat['titleName'] = $this->newModel->fetchTitleName($titleID);
            
            $str_links = $this->pagination->create_links();
            $displayChat['links'] = explode('&nbsp;',$str_links );
            
            $this->load->view('include/header');
            $this->load->view('chat/chatHome', $displayChat );
            $this->load->view('include/footer');
        
    }
}
