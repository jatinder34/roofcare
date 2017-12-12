<?php
	class RegisterController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('AdminModel/RegistrationModel');
			$this->load->helper(array('url','form'));
			$this->load->helper('date');
		}
		public function registerform()
		{
			$this->load->view('RegistrationForm');
		}

		function user_register()
		{
			$config = [
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|jpeg|png',
			'overwrite' => TRUE,
			'max-size' => 2048,
			];
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('profile_image')) {
				 $error = array('error' => $this->upload->display_errors()); 
           		 $this->load->view('Admin/RegistrationForm', $error); 
			}else{
				$data = $this->upload->data(); 
           		// echo "<pre>";
           		// print_r($data);
           		$image_name = base_url("uploads/" . $data['file_name']);
           		$this->RegistrationModel->model_user_regis($image_name);
           		$this->load->view('RegistrationForm', $data); 
			}
			
		}
	}
?>