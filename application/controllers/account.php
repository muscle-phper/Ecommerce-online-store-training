<?php
class account extends CI_Controller{

    public function login(){

   	    $this->load->view('/account/login');

    }

    public function verify(){

        $user_name = "";
        $user_password = "";
        if( isset($_POST["user_name"]) )
        	$user_name = $_POST["user_name"];

        if( isset($_POST["user_password"]) )
        $user_password = $_POST["user_password"];

        $query = $this->db
        		 ->FROM('members')
        		 ->WHERE('password',$user_password)
        		 ->WHERE('username',$user_name)
                 ->get()
                 ->row();

        if( $query ){

        	$this->load->view('/member/dashboard');

        }else
        	echo "輸入錯誤";
    }

}
