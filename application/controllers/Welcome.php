<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
		{
			parent::__construct();
			$this->load->model('UserModel/UserMenusModel');
			$this->load->model('UserModel/FrontendModel');
			$this->load->model('AdminModel/SliderModel');
			$this->load->model('UserModel/FrontPostModel');
		}
	// public function index()
	// {
	// 	$data['menus'] = $this->UserMenusModel->usermenu();
	// 	$data['logoimg'] = $this->UserMenusModel->getlogo();
	// 	$this->load->view('UserView/Header_Footer/welcome_message', $data);
	// }
	// public function menudata($id)
	// 	{
	// 		$data['menus'] = $this->UserMenusModel->usermenu();
	// 		$data['logoimg'] = $this->UserMenusModel->getlogo();
	// 		$this->load->view('UserView/Header_Footer/welcome_message', $data);
	// 		$menupage['pagedata'] = $this->FrontendModel->getpage_datamenu($id);
	// 		$this->load->view('UserView/FrontPages', $menupage);
				
	// 	}
	// 	public function submenudata($sid)
	// 	{
	// 		$data['menus'] = $this->UserMenusModel->usermenu();
	// 		$data['logoimg'] = $this->UserMenusModel->getlogo();
	// 		$this->load->view('UserView/Header_Footer/welcome_message', $data);
	// 		$submenupage['pagedata'] = $this->FrontendModel->getpage_datasub($sid);
	// 		$this->load->view('UserView/FrontPages', $submenupage);
	// 	}
	public function index()
	{
		$data['menus'] = $this->UserMenusModel->usermenu();
		$data['logoimg'] = $this->UserMenusModel->getlogo();
		$front_sliders['slids']  = $this->SliderModel->get_slides();
		$front_sliders['service_sec'] = $this->FrontPostModel->get_service_post();
		$front_sliders['saveroof'] = $this->FrontPostModel->get_saveroof_post();
		$front_sliders['shielding'] = $this->FrontPostModel->get_shielding_post();
		$front_sliders['shieldingall'] = $this->FrontPostModel->get_shieldingall_post();
		$front_sliders['testimonials'] = $this->FrontPostModel->get_testimonials_post();
		$front_sliders['ourblog'] = $this->FrontPostModel->get_ourblog_post();
		$front_sliders['allpost'] = $this->FrontPostModel->get_blogposts_post();
		$data['allpost'] = $this->FrontPostModel->get_blogposts_post();
		$data['footeradd'] = $this->FrontendModel->footer_get();
		$front_sliders['projectpost'] = $this->FrontPostModel->get_ourproject_sec_post();
		$front_sliders['projectposts'] = $this->FrontPostModel->get_ourprojectmain_post();
		$this->load->view('UserView/Header_Footer/Header',$data);
		$this->load->view('UserView/Homepage',$front_sliders);
		$this->load->view('UserView/Header_Footer/Footer',$data);
	}


}
