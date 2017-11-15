<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_home_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('User_view/user_home_view');

	}


	public function manage_user_login($parameter1=""){
		if($parameter1=="check"){

		$user_email=$this->input->post('txt_user_name');
		$user_password=$this->input->post('txt_user_password');

		$login_resultset=$this->db->query("select * from tbl_user_side where user_email='".$user_email."' and user_password='".$user_password."'  ");
		//print_r($row);
		if($login_resultset->num_rows()>0){
			//$_SESSION["useremail"]=$user_email;
			redirect('user_controller/User_home_controller');
		}
		else{
			$login_data['msg']="Invalid username or Password";

		}

	}
}


	public function manage_user_side($parameter1="",$parameter2=""){
 		 if($parameter1=="add"){
 		 $data['user_name']=$this->input->post('txt_user_name');
 		 $data['user_aadhar_number']=$this->input->post('txt_user_aadhar_number');
 		 $data['user_driving_license_number']=$this->input->post('txt_user_driving_license_number');
 		 $data['user_phone_number']=$this->input->post('txt_user_phone_number');
 		 $data['user_password']=$this->input->post('txt_user_password');
 		 $this->db->insert('tbl_user_side',$data);
 		 redirect('User_controller/User_home_controller');

 	 }

 	 if($parameter1=="delete"){
 		 $this->db->where('user_id',$parameter2);
 	  $this->db->delete('tbl_user_side');
 		 //redirect('user_controller/user/manage_user_side');
 	 }



 	   $page_data['user_view']=$this->db->get('tbl_user_side');
 	   //$this->load->view('Admi/user_side_view',$page_data);
 	 }
  }






?>
