<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_missing_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('User_view/user_missing_vehicle_view');

	}


	public function manage_missing_vehicle($parameter1="",$parameter2=""){
	 if(!isset($_SESSION["useremail"]))
	 {
		 echo "not Login";
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
		 

	 }

	 if($parameter1=="delete"){
		 $this->db->where('missing_vehicle_id',$parameter2);
		 $this->db->delete('tbl_missing_vehicle');
		 //redirect('Admin_controller/Admin/manage_user_side');
	 }



		 $page_data['missing_vehicle_view']=$this->db->get('tbl_missing_vehicle');
		 //$this->load->view('Admin_view/missing_vehicle_view',$page_data);
	 }
	}





	  }






?>
