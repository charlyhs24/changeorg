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
		$data['link'] = "public/asset/css/module/landing-page.css";
		$data['petitions'] = $this->petition_model->getAllPetition();
		$this->load->view('template/header',$data);
		$this->load->view('module/petition/index');
        $this->load->view('template/footer');
	}
	
    public function create()
	{
        $data['link'] = "public/asset/css/module/petition-create.css";
        $this->load->view('template/header',$data);
        $this->load->view('module/petition/create');
        $this->load->view('template/footer');
	}
	
	public function show($id_petisi){
        $data['link'] = "public/asset/css/module/petition.css";
        $data['petitions'] = $this->petition_model->getPetitionById($id_petisi);
		$this->load->view('template/header',$data);
		$this->load->view('module/petition/show');
        $this->load->view('template/footer');
	}

	public function uploadImage(){
		$config['upload_path']          = './public/asset/media/petition/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['encrypt_name'] 		= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('userfile')){
				$error = array('error' => $this->upload->display_errors());
				echo json_encode($error);
		}else{
				$image = array('upload_data' => $this->upload->data());
				$file_name= $image['upload_data']['file_name']; 
				$data = array(
					'judul' => $this->input->post('judul'),
					'kepada' => $this->input->post('kepada'),
					'isi' => $this->input->post('isi'),
					'url_media' => $file_name,
					'id_users' => 1,
					'jumlah_ttd' => 0
				);
				$result = $this->petition_model->insertPetition($data);
				if($result){
					$this->session->set_flashdata('petition-create', 'petisi berhasil di publish');
					echo json_encode($result);
				}
		}
	}

	public function petitionTelusuri(){
		$data['link'] = "public/asset/css/module/telusuri.css";
		$data['petition'] = $this->petition_model->getByTerbanyak();
		$data['populer'] = $this->petition_model->getByPopuler();
		$data['terbaru'] = $this->petition_model->getByTerbaru();
        $this->load->view('template/header',$data);
        $this->load->view('module/petition/telusuri',$data);
        $this->load->view('template/footer');
	}

	public function TelusuriByTerbanyak(){
		$data = $this->petition_model->getByTerbaru();
		echo '<pre>'; var_dump($data); echo '</pre>';
	}

	public function petitionUser(){
		$data['link'] = "public/asset/css/module/my-petition.css";
		$userdata = $this->session->userdata('user_auth');
		$data['petitionUser'] = $this->petition_model->getPetitionByUser($userdata);
        $this->load->view('template/header',$data);
        $this->load->view('module/petition/petition-user',$data);
        $this->load->view('template/footer');
	}

	public function testdata(){
		if($this->session->flashdata('petition-create')){
			echo $this->session->flashdata('petition-create');
		}else {
			echo json_encode("nothing");
		}
	}

	public function doSignature(){
		$userdata = $this->session->userdata('user_auth');
		if(! $userdata){
			redirect('AuthController');
		}else {
			$this->form_validation->set_rules('komentar','Komentar','required');
			if($this->form_validation->run()){
				$formdata = array(
					'petitionId' => $this->input->post('petitionId'),
					'komentar' => $this->input->post('komentar')
				);
				$updatePetition = $this->petition_model->updatePendukung($userdata, $formdata);
				
				if($updatePetition === TRUE){
					$this->session->set_flashdata('signature-success','Selamat, Anda adalah bagian dari orang yang mendukung petisi ini'); 
					redirect('petitionController');
				}elseif($updatePetition === "done"){
					$this->session->set_flashdata('signature','Maaf, anda sudah mendatangani petisi ini sebelumnya.'); 
					redirect('petitionController/show/'.$formdata['petitionId']);
				}
			}else{
				$this->show($this->input->post('petitionId'));
			}
		}
	}

}
