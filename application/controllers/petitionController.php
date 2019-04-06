<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class petitionController extends CI_Controller {

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
    function __construct() {
        parent::__construct();
        $this->load->model('petition_model');
    }
	public function index()
	{
        $this->load->view('template/header');
        $this->load->view('template/footer');
    }
    public function create()
	{
        $data['link'] = "public/asset/css/module/petition-create.css";
        $this->load->view('template/header',$data);
        $this->load->view('module/petition/create');
        $this->load->view('template/footer');
    }
	public function show(){
        $data['link'] = "public/asset/css/module/petition.css";
        $data['petitions'] = $this->petition_model->getPetitionById(1);
		$this->load->view('template/header',$data);
		$this->load->view('module/petition/show');
        $this->load->view('template/footer');
	}
}
