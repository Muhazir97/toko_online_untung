<?php 

 class Invoice extends CI_Controller{

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
 		$data['invoice']   = $this->model_invoice->tampil_data();
 		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
 	}

 	public function detail($id_invoice){
        
        $data['judul']     ='Toko Untung - Admin ';
 		$data['invoice']   = $this->model_invoice->ambil_id_invoice($id_invoice);
 		$data['pesanan']   = $this->model_invoice->ambil_id_pesanan($id_invoice);
 		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
 	}
 	function search(){

        $data['judul']        ='Toko Untung - Admin ';
        $keyword              =   $this->input->post('cari');
        $data['pencarian']    =   $this->model_invoice->search($keyword);
        $this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/search_id_invoice',$data);
        $this->load->view('templates_admin/footer');
    }

    public function print_invoice(){

        $data1          =$this->input->post('tgl_awal');
        $data2          =$this->input->post('tgl_akhir');
        $data['data']   = $this->model_invoice->print_invoice($data1,$data2);
        $this->load->view('admin/print_data_invoice', $data);
    }
 }

