<?php

	/**
	* 
	*/
	class SliderController extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('AdminModel/SliderModel');
		}
		public function sliderpage()
		{
			$this->load->view('admin/SliderSetting');
		}

		public function insertslide()
		{
			$config = [
				'upload_path' => "./uploads/SliderImg/",
				'allowed_types' => 'gif|jpg|jpeg|png',
				'overwrite' => True,
				'max-size' => 2048,
			];
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('slideimg')) {
				$error = array('error' => $this->upload->display_errors()); 
				// print_r($error);
				// echo "error";
			}else
			{
				$data = $this->upload->data();
				// echo "<pre>";
    //        		print_r($data);
           		$slideimage = base_url('uploads/SliderImg/'.$data['file_name']);
           		
			}
			$slider = array(
				'slide' => $slideimage,
				'hading1' => $this->input->post('slidertitle'),
				'hading2' => $this->input->post('slidersubtitle'),
				'peragraph' => $this->input->post('slidercontent'),
				'button' => $this->input->post('buttontext'),
				'button_url' => $this->input->post('buttonurl'), 
			);
			$this->SliderModel->Insertsliderdata($slider);
			$this->sliderpage();
		}

		public function slidesfetch()
		{
			$slids["Allslides"] = $this->SliderModel->get_slides();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/Allslides',$slids);
			$this->load->view('admin/Template/footer');
		}
	}
?>