<?php 

 class Verifikasi extends CI_Controller{

 	public function  __construct() {
		parent::__construct();

		if ($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Anda belum login cuy, login dulu gih !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
		}
	}

 	public function index(){

        $data['judul']     ='Toko Untung - Admin ';
 		$data1['invoice'] = $this->model_verifikasi->index();
 		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/verifikasi', $data1);
		$this->load->view('templates_admin/footer');
 	}

 }
