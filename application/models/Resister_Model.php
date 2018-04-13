<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    class Resister_Model extends CI_Model{
        
        private $user_info;
        
        public function resister($name,$email,$user,$password,$password_conf){
            $this->user_info=array(
                'name'=>$name,
                'user_name'=> $user,
                'email'=> $email,
                'password'=>$password,
                'password_conf'=>$password_conf
            );
             $query=$this->db->insert('user_info', $this->user_info);
             
                if($query->num_rows()==1)
                {
                    return true;
                }else{
                    return false;
                }
                   
        }
    }