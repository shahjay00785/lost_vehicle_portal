<?php
//session_start();
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

 		redirect('Admin_controller/Admin/manage_found_vehicle');

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

	public function fir_data($parameter1=""){

			if($parameter1=="data"){
				$data=$this->input->post('issue_number');
//$login_resultset=$this->db->query("select * from tbl_user where user_email='".$user_email."' and user_password='".$user_password."'  ");
        $query=$this->db->query("select * from tbl_rto_database where vehicle_issue_number='".$data."'");

				foreach ($query->result() as $data) {

				$count=$data->vehicle_issue_number;
				if($query->num_rows()>0){
					echo "ok";
			}

			if($query->num_rows()<0){
				echo "not ok";
		}


				}
      }
    }


		public function fir_generate($id){



					$rto_data=$this->db->get_where('tbl_rto_database',array('rto_id'=>$id));

				foreach ($rto_data->result() as $count_q) {
							$data['rto_id']=$count_q->rto_id;
							$data['fir_number']="abc123";
							$data['fir_date']=date('Y-m-d H:i:s');
							redirect('Admin_controller/Admin/fir_view');


			}


			 $this->db->insert('tbl_fir',$data);
		 }

		 public function fir_view(){
			  $this->load->view('Admin_view/fir_view');
		 }








	public function manage_logout($parameter1=""){
		if($parameter1=="logout"){
			session_destroy();
			redirect(base_url().'index.php/Admin_controller/Admin');
		}
	}
}
