<?php
	/**
	* 
	*/
	class LoginController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('AdminModel/LoginModel');
			$this->load->library('session');
			$this->load->helper('date');
			$this->load->helper(array('html','form','url'));
		}
		
		function index()
		{
			if ($this->session->userdata('login')) {
				redirect ('Admin/AdminController');
			}
			else{

			$this->load->view('LoginForm');
		}
		}
		function loginfunction()
		{
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			$login_verify = $this->LoginModel->checklogin($username,$password);
			if ($login_verify) {
				    //print_r($login_verify);

				$Logindata = array(
					'user' => $login_verify[0]->username,
					'password' => $login_verify[0]->password, 
					'user_name' => $login_verify[0]->name,
					'mobile_no' => $login_verify[0]->mobile,
					'profile_picture' => $login_verify[0]->profile_pic,
					'user_address' => $login_verify[0]->address,
					'role'	=>	$login_verify[0]->profession,
					'state' => $login_verify[0]->state,
					'course' => $login_verify[0]->course,
					'college' => $login_verify[0]->college,
					'skills' => $login_verify[0]->skills,
					);

				$this->session->set_userdata('login',$Logindata);
				redirect ('Admin/AdminController');
			}
			else
			{
				$msg['error'] = "Incorrect Username & Password";
				$this->load->view('LoginForm',$msg);
			}
		}

		function logout()
		{
			$this->session->unset_userdata('login');
			redirect('Admin/AdminController');
		}
	}
?>