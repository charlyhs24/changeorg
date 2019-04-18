<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userController extends CI_Controller {

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
		$this->load->model('user_model');
		if(!$this->session->userdata('user_auth')){
			redirect('AuthController');
		}
	}
	public function profile()
	{
        $data['link'] = "public/asset/css/module/profile.css";
		$this->load->view('template/header',$data);
		$this->load->view('module/user/update_profile');
        $this->load->view('template/footer');
	}
	public function updateProfile(){
		$userdata = $this->session->userdata('user_auth');
		if ($this->input->post()) {
			$config['upload_path']          = './public/asset/media/profile/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['encrypt_name'] 		= TRUE;
			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('file_profile')) {
				$error = array('error' => $this->upload->display_errors());
				$this->session->set_flashdata('error',$error);
				redirect('userController/updateProfile');
			}else {
				$image = array('upload_data' => $this->upload->data());
				$file_name= $image['upload_data']['file_name']; 
				$data = array (
					'id_users' 			=> $userdata->id_users,
					'email' 			=> $userdata->email,
					'password' 			=> $userdata->password,
					'nama_depan'		=> $this->input->post('nama_depan'),
					'nama_belakang'		=> $this->input->post('nama_belakang'),
					'tentang_saya'		=> $this->input->post('tentang_saya'),
					'kota'				=> $this->input->post('kota'),
					'negara'			=> $this->input->post('negara'),
					'twitter'			=> $this->input->post('twitter'),
					'tautan_singkat'	=> $this->input->post('tautan_singkat'),
					'alamat'			=> $this->input->post('alamat'),
					'kode_pos'			=> $this->input->post('kode_pos'),
					'bahasa'			=> $this->input->post('bahasa'),
					'nomor_telepon' 	=> $this->input->post('nomor_telepon'),
					'picture_url'		=> $file_name
				);
				$result = $this->user_model->updateUser($data);
				if($result){
					$this->session->set_flashdata('update-success', 'data profil berhasil di update');
					redirect('petitionController/petitionUser');
				}else {
					var_dump($result);
				}
			}
		}
	}
}
