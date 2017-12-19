<?php

	/**
	* 
	*/
	class PostController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('AdminModel/PostModel');
			$this->load->library('pagination');
			$this->load->helper('url');
			$this->load->helper('date');
		}
	
		function index()
		{
			$categet['allcate'] = $this->PostModel->getcate();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/AddNewPost',$categet);
			$this->load->view('admin/Template/footer');
		}

/***************ADD PRODUCT FUNCTION****************/
		function postfunction($image_name)
		{
			
			$postdetail = array(
				'post_name' => $this->input->post('postname'),
				'post_content' => $this->input->post('postcontent'),
				'postslug' => str_replace(" ", "-", strtolower($this->input->post('postname'))),
				'post_image'=> $image_name,
				'post_date' => $this->input->post('postdate'),
				'post_custom' => $this->input->post('custom_field'),
				);

			if(isset($_POST['cate']))
			{
				$postdetail['post_categories'] = json_encode($_POST['cate']);
			}
			
			$this->PostModel->AddPost($postdetail);
			redirect('Admin/PostController');
		}
/****************END ADD PRODUCT**********************/
/*******************ADD PRODUCT IMAGE*************************/
		function proimage()
		{
			$config = [
				'upload_path' => './post-images/',
				'allowed_types' => 'gif|jpg|jpeg|png',
				'overwrite' => TRUE,
				'max-size' => 2048,
			];
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('postimage')) {
				 $data = $this->upload->data();
				 $error = array('error' => $this->upload->display_errors()); 
           		 $image_name = base_url("post-images/images.png");
       			 $this->postfunction($image_name);
			}
			else{
				$data = $this->upload->data(); 
           		// echo "<pre>";
           		// print_r($data);
           		$image_name = base_url("post-images/" . $data['file_name']);
           		$this->postfunction($image_name);
           		 
			}
		}

/****************END ADD PRODUCT IMAGE***************/
		function getpostdata()
		{
			$postdata['allpost'] = $this->PostModel->GetPostDetail();
			
			//echo '<pre>';	
			//print_r($productdata);
			//echo "</pre>";
		}
/*******************Product fetch on Product view**************************/
		function allPost()
		{
			// $config = array();
			// $config['base_url'] = base_url() . "Admin/PostController/allPost";
			// $config['total_rows'] = $this->PostModel->post_count();
			// $config['per_page'] = 6;
			// $config['use_page_numbers'] = TRUE;
			// $config['num_links'] = $this->PostModel->post_count();
			// $config['cur_tag_open'] = '&nbsp;<a class="active">';
			// $config['cur_tag_close'] = '</a>';
			// $config['next_link'] = 'Next';
			// $config['prev_link'] = 'Previous';
			// $this->pagination->initialize($config);
			// if($this->uri->segment(3)){
			// 	$page = $this->uri->segment(3);
			// 	// echo $page;
			// }
			// else{
			// 	$page = 0;
			// 	// echo "Hiii";
			// }
			$postdata['allpost'] = $this->PostModel->GetPostDetail();
			// $str_links = $this->pagination->create_links();
			// $postdata["links"] = explode('&nbsp;',$str_links );
			$postdata['allcate'] = $this->PostModel->getcate_rr();
			
		

			$this->load->view('admin/Template/header');
			$this->load->view('Admin/Post',$postdata);
			$this->load->view('admin/Template/footer');
		}
/*****************End Product Fetch **************************/
/******************Category section ************************/
		function addcategories()
		{
			$categet['allcate'] = $this->PostModel->getcate();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/Categories',$categet);
			$this->load->view('admin/Template/footer');
		}

		function addnewcat()
		{
			$cate_name = array(
				'cat_name' =>$this->input->post('category'),
				);
			$this->PostModel->addcatmodelfunction($cate_name);
			$this->addcategories();
		}

		function addnewcate()
		{
			$cate_name = array(
				'cat_name' =>$this->input->post('category'),
				);
			$this->PostModel->addcatmodelfunction($cate_name);
			$this->index();
		}
/******************End Category section***************************/
		

/*****************Post Update Section**********************/
		function get_updateppost($id)
		{
			$updatedata["updata"] = $this->PostModel->get_update_data($id);
			$updatedata['allcate'] = $this->PostModel->getcate();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/UpdatePost',$updatedata);
			$this->load->view('admin/Template/footer');
		}

		function uppostdata($upimage_name)
		{

			$upid = $this->input->post('uppostid');
			$updatepost = array(
				'post_name' => $this->input->post('uppostname'),
				'post_content' => $this->input->post('uppostcontent'),
				'post_date' => $this->input->post('uppostdate'), 
				'postslug' => str_replace(" ", "-", strtolower($this->input->post('uppostname'))),
				'post_custom' => $this->input->post('upcustom_field'),
				'post_image' => $upimage_name,
			);

			$this->PostModel->updatepostdata($updatepost, $upid);
			$this->get_updateppost($upid);
		}

		function image_update()
		{
			$config = [
				'upload_path' => './post-images/',
				'allowed_types' => 'gif|jpg|jpeg|png',
				'overwrite' => TRUE,
				'max-size' => 2048,
			];
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('uppostimage')) {
				 $data = $this->upload->data();
				 $error = array('error' => $this->upload->display_errors()); 
           		 $upimage_name = $this->input->post('upposturl');
       			 $this->uppostdata($upimage_name);
			}
			else{
				//echo "hello";
				$data = $this->upload->data(); 
           		// echo "<pre>";
           		// print_r($data);
           		$upimage_name = base_url("post-images/" . $data['file_name']);
           		$this->uppostdata($upimage_name);
           		 
			}
		}

/*****************End Post Update Section**********************/


/**********************Delete Post Section***************************/
			function deletepost($id)
			{
				$this->PostModel->postdelete($id);
			}








/**********************End Delete Post Section***************************/






	}


?>