<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin_view/admin_login_view');
	}


 public function manage_user_side($parameter1="",$parameter2=""){
	 if(!isset($_SESSION["useremail"]))
	 {
		 redirect(base_url().'Admin_controller/Admin');
	 }
	 else{
		 if($parameter1=="add"){
		 $data['user_name']=$this->input->post('txt_user_name');
		 $data['user_aadhar_number']=$this->input->post('txt_user_aadhar_number');
		 $data['user_driving_license_number']=$this->input->post('txt_user_driving_license_number');
		 $data['user_phone_number']=$this->input->post('txt_user_phone_number');
		 $data['user_password']=$this->input->post('txt_user_password');
		 $this->db->insert('tbl_user_side',$data);
		 redirect('Admin_controller/Admin/manage_user_side');

	 }

	 if($parameter1=="delete"){
		 $this->db->where('user_id',$parameter2);
	 $this->db->delete('tbl_user_side');
		 //redirect('Admin_controller/Admin/manage_user_side');
	 }



	   $page_data['user_view']=$this->db->get('tbl_user_side');
	   $this->load->view('Admin_view/user_side_view',$page_data);
	 }
 }

 public function manage_missing_vehicle($parameter1="",$parameter2=""){
 	if(!isset($_SESSION["useremail"]))
 	{
 		redirect(base_url().'Admin_controller/Admin');
 	}
 	else{
 		if($parameter1=="add"){
 		$data['vehicle_issue_number']=$this->input->post('txt_vehicle_issue_number');
 		$data['vehicle_engine_number']=$this->input->post('txt_vehicle_engine_number');
 		$data['vehicle_chasis_number']=$this->input->post('txt_vehicle_chasis_number');
		$data['user_driving_license_number']=$this->input->post('txt_user_driving_license_number');
 		$data['user_aadhar_number']=$this->input->post('txt_user_aadhar_number');
 		$data['vehicle_lost_date']=$this->input->post('txt_vehicle_lost_date');
		$data['vehicle_lost_state']=$this->input->post('txt_lost_state_name');
		$data['vehicle_lost_city']=$this->input->post('txt_lost_city_name');
		$data['vehicle_lost_time']=$this->input->post('txt_vehicle_lost_time');
 		$this->db->insert('tbl_missing_vehicle',$data);
 		redirect('Admin_controller/Admin/manage_missing_vehicle');

 	}

 	if($parameter1=="delete"){
 		$this->db->where('missing_vehicle_id',$parameter2);
 	  $this->db->delete('tbl_missing_vehicle');
 		//redirect('Admin_controller/Admin/manage_user_side');
 	}



 		$page_data['missing_vehicle_view']=$this->db->get('tbl_missing_vehicle');
 		$this->load->view('Admin_view/missing_vehicle_view',$page_data);
 	}
 }

public function manage_rto_database(){
	 $this->load->view('Admin_view/rto_database_view');
}




	public function manage_dashboard(){
		if(!isset($_SESSION["useremail"]))
		{
			redirect(base_url().'Admin_controller/Admin');
		}
		else{
			$this->load->view('Admin_view/admin_dashboard');
		}
	}


		public function manage_admin_login($parameter1=""){
			if($parameter1=="check"){

			$user_email=$this->input->post('txt_user_name');
			$user_password=$this->input->post('txt_user_password');

			$login_resultset=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");
			//print_r($row);
			if($login_resultset->num_rows()>0){
				$_SESSION["useremail"]=$user_email;
				redirect('Admin_controller/Admin/manage_dashboard');
			}
			else{
				$login_data['msg']="Invalid username or Password";
				$this->load->view('Admin_view/admin_login_view',$login_data);
			}

		}


	}

	public function fir_data(){

		//redirect('Admin_controller/Admin/manage_rto_database');
	}

	public function manage_logout($parameter1=""){
		if($parameter1=="logout"){
			session_destroy();
			redirect(base_url().'index.php/Admin_controller/Admin');
		}
	}
}
