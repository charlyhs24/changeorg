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
        $data['link'] = "public/asset/css/auth.css";
        $this->load->view('template/header',$data);
        $this->load->view('module/auth/signin');
        $this->load->view('template/footer');
    }
    public function register(){
        $data['link'] = "public/asset/css/auth.css";
        $this->load->view('template/header',$data);
        $this->load->view('module/auth/register');
        $this->load->view('template/footer');
    }
    public function signup(){
        $this->form_validation->set_rules('nama_depan','Nama depan','required');
        $this->form_validation->set_rules('nama_belakang','Nama belakang','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
            $user = array(
                'email'     => $this->input->post('email'),
                'password'  => md5(sha1($this->input->post('password'))),
                'nama_depan'=> $this->input->post('nama_depan'),
                'nama_belakang'=> $this->input->post('nama_belakang'),
                'tentang_saya'=> '',
                'kota'=> '',
                'negara'=> '',
                'twitter'=> '',
                'tautan_singkat'=>'',
                'alamat'=> '',
                'kode_pos'=> '',
                'bahasa'=> '',
                'nomor_telepon'=> '',
                'picture_url'=> 'user.jpg',
            );
            $user_auth = $this->User_model->setNewUser($user);
            if($user_auth){
                $this->session->set_userdata('user_auth', $user_auth);
                redirect('AuthController');
            }
        }else {
            $this->register();
        }
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
            }else{
                $this->session->set_flashdata('auth', 'Kombinasi Email dan Password anda salah, silahkan coba lagi!');
                redirect('AuthController');
            }
        }else {
            $this->index();
        }
    }
    public function logout(){
        $this->session->unset_userdata('user_auth');
        redirect('AuthController');
    }
    public function checkUserData()
	{
        $userdata = $this->session->userdata('user_auth');
		var_dump($userdata->id_users);
    }
}
