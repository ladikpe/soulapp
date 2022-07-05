<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class newModel extends CI_Model {
    
    public function search($search){
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->or_like('message', $search);
        $this->db->or_like('messageHeader', $search);
        $q = $this->db->get();
        return $q->result();
    }


    public function fetchChatById($messageID){
        
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('messageID', $messageID);
        $q = $this->db->get();
        return $q->result();
        
    }
    
    public function updateMessage($dataArray, $messageID){
        
        $this->db->where('messageID', $messageID);
        $this->db->update('chat', $dataArray);
    }

    public function deleteChat($chatID){
        $arrayData = array(
            'messageID'=>$chatID,
        );
        $this->db->delete('chat', $arrayData );
        
    }

        public function addDB($data){
        $this->db->insert('user',$data);
    }
    
    public function insertLike($dataArray){
        $this->db->insert('likeTable', $dataArray);
    }
    
    public function confirmUserId($userID, $messageID){
        $this->db->select('*');
        $this->db->from('likeTable');
        $this->db->where('userID', $userID);
        $this->db->where('messageID',$messageID );
        $q = $this->db->get();
        return $q->result();
    }

        public function get_count($messageID){
        $this->db->select('count');
        $this->db->from('likeTable');
        $this->db->where('messageID', $messageID);
        $query = $this->db->get();
        return $query->result();
    }

    public function fetchcomment($messageID){
        
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('messageID', $messageID);
        $this->db->order_by('date DESC');
        $query = $this->db->get();
        return $query->result();
    }


    public function insertComment($dataArray){
        
        $this->db->insert('comment', $dataArray);
    }

        public function signin($username, $password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('uname', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }  else {
            return FALSE ;
        }
        
    }
    
    public function fetchAllChat(){
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->order_by('titleID DESC') ;
        $query = $this->db->get();
        return $query->result();
    }


    public function fetch_profile_picture($user_id){
        $this->db->select('profile_picture');
        $this->db->from('user');
        $this->db->where('id', $user_id);
        $query = $this->db->get()->row();
        return $query ;
    }


    public function get_profilePicture($userID){
        $this->db->select('profile_picture');
        $this->db->from('user');
        $this->db->where('id', $userID);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function updateProfile_picture_name($userID, $profile_picture){
        $data_array = array(
            'profile_picture'=>$profile_picture
        );
        $this->db->where('user_id', $userID);
        $this->db->update('chat',$data_array);
    }

        public function updatePictureName($id, $file_name){
        $data_array = array(
            'profile_picture'=>$file_name,
        );
        $this->db->where('id', $id);
        $this->db->update('user',$data_array);
    }

        Public function fetchCategory(){
        $this->db->select('*');
        $this->db->from('title');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function record_count() {
        return $this->db->count_all("chat");
        }
    
    public function fetchTitleName($titleID){
        $this->db->select('titleName');
        $this->db->from('title');
        $this->db->where('titleID', $titleID) ;
        $query = $this->db->get();
        return $query->result();
    }


    public function fetchAllData(){
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result();
        
    }
    
    public function checkUsername($username){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('uname',$username);
        $query = $this->db->get();
        if( $query->num_rows>1){
            return $this->query->result();
        }  else {
            return FALSE;
        }
        
    }
    
    public function insertChat($messageArray){
        
        $this->db->insert('chat',$messageArray);
    }

        public function fetchMessage($titleID){
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->where('titleID', $titleID);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function fetchUserName($data_array){
        $this->db->select('uname');
        $this->db->from('user');
        $this->db->where($data_array);
        $query = $this->db->get()->row();
        return $query;
                
    }

       public function fetchUName($userID){
        $this->db->select('uname, profile_picture');
        $this->db->from('user');
        $this->db->where('id', $userID);
        $query = $this->db->get();
        return $query->result();
           
       }
        public function fetchPagination($limit,$page, $titleID){
        $this->db->select('*');
        $this->db->from('chat');
        $this->db->limit($limit, $page);
        $this->db->order_by('date DESC');
        $this->db->where('titleID', $titleID);
        $query = $this->db->get();
        return $query->result();
    }

    Public function deleteUser($userID){
        $this->db->where('id',$userID);
        $this->db->delete('user');
    }


    Public function userWithId($userID){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $userID);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function updateUser($updateData, $id){
        $this->db->where('id', $id);
        $this->db->update('user', $updateData);
      
    }
    
}