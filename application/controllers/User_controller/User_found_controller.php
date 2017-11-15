<?php
session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class User_found_controller extends CI_Controller {

	public function index()
	{
		$this->load->view('User_view/user_found_vehicle_view');

	}


	public function manage_found_vehicle($parameter1="",$parameter2=""){
  	if(!isset($_SESSION["useremail"]))
  	{
  		redirect(base_url().'Admin_controller/Admin');
  	}
  	else{
  		if($parameter1=="add"){
  		$data['vehicle_issue_number']=$this->input->post('txt_vehicle_issue_number');
  		$data['vehicle_found_date']=$this->input->post('txt_vehicle_found_date');
 		  $data['vehicle_found_place']=$this->input->post('txt_vehicle_found_place');

 		if($_FILES["txt_vehicle_img"]["error"]==0)
 				{
 					$newname = $_FILES["txt_vehicle_img"]["name"];

 					$config['file_name']=$newname;
 					$config['upload_path']='./img/found_vehicle_img/';
 					$config['allowed_types']='gif|jpg|png|bmp|jpeg|ico';
 					$config['max_width']='102400';
 					$config['max_height']='76800';
 					$config['max_size']=1024*1024*2;
 					$this->load->library('upload');
 					$this->upload->initialize($config);
 					$this->upload->do_upload('txt_vehicle_img');
 					$data['vehicle_photo']=$newname;
 				}

  		$this->db->insert('tbl_found_vehicle',$data);

  	//	redirect('Admin_controller/Admin/manage_found_vehicle');

  	}

  	if($parameter1=="delete"){
  		$this->db->where('found_id',$parameter2);
  	  $this->db->delete('tbl_found_vehicle');
  		redirect('Admin_controller/Admin/manage_found_vehicle');
  	}



  		$page_data['found_vehicle_view']=$this->db->get('tbl_found_vehicle');
  		$this->load->view('Admin_view/found_vehicle_view',$page_data);
  	}
  }







	  }






?>
