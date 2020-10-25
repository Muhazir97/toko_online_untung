<?php  

class Dashboard_admin extends CI_Controller{

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
        
        $data['judul']  ='Toko Untung - Admin ';
 		$data['invoice'] = $this->model_invoice->tampil_data_bayar();
        $data['barang'] = $this->model_invoice->jumlah_barang();
        $data['pesanan'] = $this->model_invoice->jumlah_pesanan();
        $data['sudah_bayar'] = $this->model_invoice->jumlah_dibayar();
        $data['sudah_kirim'] = $this->model_invoice->jumlah_dikirim();
 		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('templates_admin/footer');
 	}

 	function search(){

        $data['judul']       ='Toko Untung - Admin ';
        $keyword             = $this->input->post('cari');
        $data['pencarian']   = $this->model_invoice->search_bayar($keyword);
        $data['barang']      = $this->model_invoice->jumlah_barang();
        $data['pesanan']     = $this->model_invoice->jumlah_pesanan();
        $data['sudah_bayar'] = $this->model_invoice->jumlah_dibayar();
        $data['sudah_kirim'] = $this->model_invoice->jumlah_dikirim();
                $this->load->view('templates_admin/header', $data);
		        $this->load->view('templates_admin/sidebar');
                $this->load->view('admin/search_dashboard',$data);
                $this->load->view('templates_admin/footer');
    }

    public function detail($id_invoice){
        
        $data['judul']       ='Toko Untung - Admin ';
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_invoice_dashboard', $data);
        $this->load->view('templates_admin/footer');
    }

    public function resi($id){
        
        $data['judul']       ='Toko Untung - Admin ';
        $where = array('id' =>$id);
        $data['resi'] =$this->model_invoice->edit_invoice($where, 'tb_invoice')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/resi', $data);
        $this->load->view('templates_admin/footer');
    }

    // public function update_resi(){
    //     $id                       =$this->input->post('id');
    //     $status_konfirmasi        =$this->input->post('status_konfirmasi');
    //     $informasi                =$this->input->post('informasi');

    //     $data = array (
            
    //         'status_konfirmasi'  =>$status_konfirmasi,
    //         'jumlah_tranfer'     =>$jumlah_tranfer,
    //         'informasi'          =>$informasi,
    //     );
    //     $where = array(
    //     'id' => $id
    //      );
 
    //     $this->model_konfirmasi->update_data($where,$data,'tb_invoice');
    //     redirect('admin/dashboard_admin/index');

    // }


}	