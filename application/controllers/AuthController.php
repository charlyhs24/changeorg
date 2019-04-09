<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

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
        $this->load->model('User_model');
    }
	public function index()
	{
		$this->load->view('module/auth/login');
    }
    public function do_login(){
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $user = array(
                'email'     => $this->input->post('email'),
                'password'  => md5(sha1($this->input->post('password')))
            );
            $user_auth = $this->User_model->getUser($user);
            if($user_auth){
                $this->session->set_userdata('user_auth', $user_auth);
                redirect('petitionController');
            }
        }else {
            $this->index();
        }
    }
    public function checkUserData()
	{
        $userdata = $this->session->userdata('user_auth');
		var_dump($userdata->id_users);
    }
}
