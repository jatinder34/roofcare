<?php
	/**
	* 
	*/
	class LogoController extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('date');
			$this->load->helper(array('url','form'));
			$this->load->model('AdminModel/LogoModel');
		}

		public function index()
		{
			$logo_admin['logoadminpage'] = $this->LogoModel->getlogo();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/LogoView',$logo_admin);
			$this->load->view('admin/Template/footer');
		}

		public function logoupload()
		{
			$config = [
				'upload_path' => './uploads/logo/',
				'allowed_types' => 'gif|jpg|jpeg|png',
				'overwrite' => TRUE,
				'max-size' => 2048,
			];
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('logo')) {
				$error = array('error' => $this->upload->display_errors()); 
				$this->load->view('admin/Template/header');
				$this->load->view('admin/LogoView',$error);
				$this->load->view('admin/Template/footer');
				echo "hello";
			}else
			{
				$data = $this->upload->data();
				// echo "<pre>";
    	      	//print_r($data);
           		$image_name = base_url("uploads/logo/" . $data['file_name']);
           		$this->LogoModel->Logoup($image_name);
           		$this->index();
			}
		}

	}
?>