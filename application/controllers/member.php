<?php
class member extends CI_Controller{

	public function index(){

        //插入member_model並load進meber_manage視圖
		$this->load->model('member_model');
        $member_list = $this->member_model->getall();
        $this->load->view('/member/index',array(
            'member_list'=>$member_list) );

	}

    public function edit(){

        $data = array(
            'sno'=>$sno,
            'name'=>$name,
            'address'=>$address,
            'birthday'=>$birthdat,
            'username'=>$username,
            'password'=>$password
            );
        $this->db->update('members',$data);
    }

}
