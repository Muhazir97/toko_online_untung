<?php  

class Etalase extends CI_Controller{

	public function  __construct() {
		parent::__construct();

		if ($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Anda belum login cuy, login dulu gih !!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
		}
	}

	

	public function tambah_ke_keranjang($id){

		$barang =$this->model_barang->find($id);

		$data = array(

        'id'      => $barang->id_brg,
        'gambar'  => $barang->gambar,
        'qty'     => $this->input->post('quantity'),
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg,
        'stock'    => $barang->stock
        
         );

       $this->cart->insert($data);
       redirect('etalase/detail_keranjang');

	}

	public function detail_keranjang(){
        
        $data['judul']  ='Toko Untung ';
	    $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');	
	}

	public function hapus_keranjang($rowid)
	{

       if($rowid){
		$this->cart->remove($rowid);
		$this->session->set_flashdata('sukses', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Data Berhasil Di Hapus!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('etalase/detail_keranjang');
       }else{
		$this->cart->destroy();
		$this->session->set_flashdata('sukses', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Keranjang Berhasil Di Dibersihkan!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
		redirect('etalase/detail_keranjang');
	}
}

   public function update_keranjang($rowid){

		 if($rowid){
		 	$data = array(
		       		       'rowid' => $rowid,
		       	           'qty'   => $this->input->post('qty'),
		       	          );

				$this->cart->update($data);
				$this->session->set_flashdata('sukses', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
             Keranjang Berhasil Di Update!!!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
				redirect('etalase/detail_keranjang');
		       }else{
				$this->cart->destroy();
				redirect('etalase/detail_keranjang');
			}	
}


	public function pembayaran(){

        $data['judul']  ='Toko Untung';
		$this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');

	}

	// public function proses_pesanan(){
        
 //        $is_processed = $this->model_invoice->index();
 //        if($is_processed){
 //        	$this->cart->destroy();
	// 		$this->load->view('templates/header');
	//         $this->load->view('templates/navbar');
	// 		$this->load->view('proses_pesanan');
	// 		$this->load->view('templates/footer');
	// 		$this->load->helper('string');
			
 //        }else{
 //        	echo "Maaf, Pesanan Anda Gagal Di Proses";
 //        }
        
	// }

	

	public function tambah_komen(){
		$id_brg = $this->input->post('id_brg');
		$nama = $this->input->post('nama');
		$komentar = $this->input->post('komentar');
        date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'id_brg'   => $id_brg,
			'nama'     => $nama,
			'komentar' => $komentar,
			'waktu'    => date('Y-m-d H:i:s'),
			
			);
		$this->model_barang->input_data($data,'tb_komentar');
		redirect('welcome/detail/'. $id_brg);
	}

	
}