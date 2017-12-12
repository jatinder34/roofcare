<?php
	/**
	* 
	*/
	class AddPagesController extends CI_Controller
	{
		
		function __construct()
		{	
			parent::__construct();
			$this->load->model('AdminModel/AddMenusModel');
			$this->load->helper('date');
		}
		public function index()
		{
			$this->load->view('admin/Template/header');
			$this->load->view('admin/AddNewPageView');
			$this->load->view('admin/Template/footer');
		}
		public function addpages()
		{
			$page_id['page_id_parent'] = $this->AddMenusModel->allpagesfunction();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/AddNewPageView', $page_id);
			$this->load->view('admin/Template/footer');
		}
		/*********************Add New Page Section ********************************/
		public function addnew()
		{
			//print_r($alldata);
			$this->AddMenusModel->addmenus();
			$this->index();
		}

		/*****************Add New Pages Section End*************************/

		public function allpages()
		{
			$all_pages['alldata'] = $this->AddMenusModel->allpagesfunction();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/PagesView',$all_pages);
			$this->load->view('admin/Template/header');
		}

		public function pageid()
		{
			
			$this->load->view('admin/Template/header');
			$this->load->view('admin/AddNewPageView');
			$this->load->view('admin/Template/header');
		} 
	/*-----------------Delete Section--------------------*/

		public function pagedelete($id)
		{
			$this->AddMenusModel->deletepage($id);
		}
	/*-----------------End Delete Section--------------------*/
	/*-----------------Update Section--------------------*/

		public function pageupdate($upid)
		{
			$pageupdate['uppage'] = $this->AddMenusModel->updatepage($upid);
			$this->load->view('admin/Template/header');
			$this->load->view('admin/UpdatePageView', $pageupdate);
			$this->load->view('admin/Template/footer');
		}

		public function updatepagedata()
		{
			$pageupdate['uppage'] = $this->AddMenusModel->updatepagedata();
			$this->load->view('admin/Template/header');
			$this->load->view('admin/UpdatePageView', $pageupdate);
			$this->load->view('admin/Template/footer');
		}
	/*-----------------End Update Section--------------------*/
	



	}
?>