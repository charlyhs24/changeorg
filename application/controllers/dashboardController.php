<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboardController extends CI_Controller {

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
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/footer');
	}
	public function card(){
		$data['link'] = "public/asset/css/module/landing-page.css";
		$this->load->view('template/header',$data);
		$this->load->view('template/card');
        $this->load->view('template/footer');
	}
	public function home(){
		$data['link'] = "public/asset/css/module/landing-page.css";
		$this->load->view('template/header',$data);
		$this->load->view('landing-page/landing-page.php');
        $this->load->view('template/footer');
	}
	public function petitionUser(){
		$data['link'] = "public/asset/css/module/landing-page.css";
		$this->load->view('template/header');
		$this->load->view('template/petition-user');
        $this->load->view('template/footer');
	}
	public function petitionCreate(){
		$data['link'] = "public/asset/css/module/petition-create.css";
		$this->load->view('template/header',$data);
		$this->load->view('template/petition-create');
        $this->load->view('template/footer');
	}
	public function pertitionsTabs(){
		$data['link'] = "public/asset/css/module/telusuri.css";
		$this->load->view('template/header',$data);
		$this->load->view('template/telusuri');
        	$this->load->view('template/footer');
	}
}
