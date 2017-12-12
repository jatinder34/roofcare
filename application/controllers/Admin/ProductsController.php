<?php

	/**
	* 
	*/
	class ProductsController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('AdminModel/ProductModel');
			$this->load->library('pagination');
			$this->load->helper('url');
			$this->load->helper('date');
		}
	
		function index()
		{
			$categet['allcate'] = $this->ProductModel->getcate();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/AddNewProduct',$categet);
			$this->load->view('admin/Template/footer');
		}

		/***************ADD PRODUCT FUNCTION****************/
		function productfunction($image_name)
		{
			
			$productdetail = array(
				'product_name' => $this->input->post('productname'), 
				'product_price' => $this->input->post('productprice'),
				'regular_price' => $this->input->post('regularprice'),
				'product_stock' => $this->input->post('productstock'),
				'product_image'=> $image_name,
				);

			if(isset($_POST['cate']))
			{
				$productdetail['product_categories'] = json_encode($_POST['cate']);
			}
			
			$this->ProductModel->AddProduct($productdetail);
			redirect('Admin/ProductsController');
		}
/****************END ADD PRODUCT**********************/
/*******************ADD PRODUCT IMAGE*************************/
		function proimage()
		{
			$config = [
				'upload_path' => './product-images/',
				'allowed_types' => 'gif|jpg|jpeg|png',
				'overwrite' => TRUE,
				'max-size' => 2048,
			];
			$this->load->library('upload',$config);
			if ($this->upload->do_upload('productimage')) {
				 $error = array('error' => $this->upload->display_errors()); 
           		 $this->load->view('Admin/RegistrationForm', $error); 
			}
			else{
				$data = $this->upload->data(); 
           		// echo "<pre>";
           		// print_r($data);
           		$image_name = base_url("product-images/" . $data['file_name']);
           		//$this->productfunction($image_name);
           		 
			}
		}

/****************END ADD PRODUCT IMAGE***************/
		function getproductdata()
		{
			$productdata['allproducts'] = $this->ProductModel->GetProductDetail();
			
			//echo '<pre>';	
			//print_r($productdata);
			//echo "</pre>";
		}
		/*******************Product fetch on Product view**************************/
		function allProducts()
		{
			$config = array();
			$config['base_url'] = base_url() . "Admin/ProductsController/allProducts";
			$config['total_rows'] = $this->ProductModel->product_count();
			$config['per_page'] = 6;
			$config['use_page_numbers'] = TRUE;
			$config['num_links'] = $this->ProductModel->product_count();
			$config['cur_tag_open'] = '&nbsp;<a class="active">';
			$config['cur_tag_close'] = '</a>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';
			$this->pagination->initialize($config);
			if($this->uri->segment(3)){
				$page = $this->uri->segment(3);
				// echo $page;
			}
			else{
				$page = 0;
				// echo "Hiii";
			}
			$productdata['allproducts'] = $this->ProductModel->GetProductDetail($config['per_page'], $page);
			$str_links = $this->pagination->create_links();
			$productdata["links"] = explode('&nbsp;',$str_links );
			$productdata['allcate'] = $this->ProductModel->getcate_rr($config['per_page'], $page);
			
		

			$this->load->view('admin/Template/header');
			$this->load->view('Admin/Products',$productdata);
			$this->load->view('admin/Template/footer');
		}
		/*****************End Product Fetch **************************/
		/******************Category section ************************/
		function addcategories()
		{
			$categet['allcate'] = $this->ProductModel->getcate();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/Categories',$categet);
			$this->load->view('admin/Template/footer');
		}

		function addnewcat()
		{
			$cate_name = array(
				'cat_name' =>$this->input->post('category'),
				);
			$this->ProductModel->addcatmodelfunction($cate_name);
			$this->addcategories();
		}

		function addnewcate()
		{
			$cate_name = array(
				'cat_name' =>$this->input->post('category'),
				);
			$this->ProductModel->addcatmodelfunction($cate_name);
			$this->index();
		}
		/******************End Category section***************************/
	}
?>