<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class rocketChaTAPI extends CI_Controller{
    
    function apicall(){
        
        $dataArray = array(
      'name'=> $this->input->post('name'),
        'email'=>  $this->input->post('email'),
        'username'=>  $this->input->post('username'),
         'Password'=> $this->input->post('password')
    );
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => '40.114.69.47:3000/api/v1/users.create'.$dataArray,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_HTTPHEADER => array(
        'X-Auth-Token: '.$_SESSION['rocket_token'],
        'X-User-Id: '.$_SESSION['rocket_user_id']
      ),
    ));
    
    $response = json_decode(curl_exec($curl));
    
    curl_close($curl);
    
    return $response;

}
    
}
