<?php
	/**
	* 
	*/
	class RegistrationModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
/**********************Insert User Info********************************/
		function model_user_regis($image_name)
		{
			$user_admin = array(
				'username' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				 );
			$this->db->insert('admin',$user_admin);
			$user_id_last =  $this->db->insert_id();

			$user_admin_info_y = array(
				'name' => $this->input->post('fname'),
				'address' => $this->input->post('address'),
				'mobile' => $this->input->post('mobile'),
				'profession' => $this->input->post('role'),
				'state' => $this->input->post('state'),
				'course' => $this->input->post('course'),
				'college' => $this->input->post('college'),
				'skills' => $this->input->post('skill'),
				'user_id' => $user_id_last,
				'profile_pic' => $image_name,
				);

			$this->db->insert('admindetail',$user_admin_info_y);
	}
	
/*********************************************************************/
/********************Update user information*************************/
		function get_current_user_data()
		{
			$this->db->select('*');
			$this->db->from('admindetail');
			$this->db->join('admin','admin.id = admindetail.user_id');
			$query = $this->db->get();
			return $query->result_array();
			//echo "<pre>";
			//print_r($query->result());
		}

		function upuserinfomodel()
		{
			$upid = $this->input->post('upusid');
			$user_up = array(
				'username' => $this->input->post('up_email'),
				'password' => $this->input->post('up_password'),
				 );
			$this->db->update('admin',$user_up);
			$this->db->where('id',$upid);

			$user_up_info = array(
				'name' => $this->input->post('up_fname'),
				'address' => $this->input->post('up_address'),
				'mobile' => $this->input->post('up_mobile'),
				);
			$this->db->update('admindetail',$user_up_info);
			$this->db->where('user_id',$upid);
			redirect('Admin/AdminController/user_get_function');
		}


/******************End Update User Information*******************************/

/*****************Delete User Information Section*********************/	

		function delete_us_info($id)
		{
			$this->db->where('admin.id',$id);
			$this->db->delete('admin');
			$this->db->where('admindetail.user_id',$id);
			$this->db->delete('admindetail');
			redirect('Admin/AdminController/user_get_function');
		}
/*****************End Delete User Information Section*********************/		
	}

?>