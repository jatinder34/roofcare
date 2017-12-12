<?php
	class AdminController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->model('AdminModel/ProductModel');
			$this->load->model('AdminModel/RegistrationModel');
			$this->load->model('AdminModel/LoginModel');
			$this->load->helper('date');
		}
		function index()
		{

			$this->load->view('admin/Template/header');
			$this->load->view('index');
			$this->load->view('admin/Template/footer');
		}	

/************************Get Users List****************************/
		function user_get_function()
		{
			$users_data['users_data_array'] = $this->RegistrationModel->get_current_user_data();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/UsersView',$users_data);
			$this->load->view('admin/Template/footer');
		}	
/************************Emd Get User list****************************/

/*****************Users Information Update Section************************/
		function update_userdata($user_up_id)
		{
			$usr_data_up['userup_data_get'] = $this->LoginModel->get_update_user_model($user_up_id);
			$this->load->view('admin/UserUpdateView',$usr_data_up);
		}

		function updateuserdata()
		{
			$this->RegistrationModel->upuserinfomodel();
		}
/*****************End Users Information Update Section************************/

/***************************Delete User List Section**************************/
		function delete_userdata($id)
		{
			$this->RegistrationModel->delete_us_info($id);
		}
/***************************End Delete User List Section**************************/
		function UserProfile()
		{
			$this->load->view('admin/Template/header');
			$this->load->view('admin/ProfileView');
			$this->load->view('admin/Template/footer');
		}









	}
?>