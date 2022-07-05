<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class rocketChatRoles extends CI_Controller {
    
    Public function Get_role_list(){
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => '20.85.245.49:3000/api/v1/roles.list',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'X-Auth-Token: '.$_SESSION['rocket_token'],
        'X-User-Id: '.$_SESSION['rocket_user_id']
      ),
    ));
    
    $response = json_decode(curl_exec($curl));
    curl_close($curl);
    
    return $response ;
        
    }
}
