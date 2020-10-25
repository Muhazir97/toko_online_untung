<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses_pesanan extends CI_Controller {

	public function index(){

		$data['judul']  ='Toko Untung';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('proses_pesanan');
		$this->load->view('templates/footer');
	}

}

/* End of file proses_pesanan.php */
/* Location: ./application/controllers/proses_pesanan.php */