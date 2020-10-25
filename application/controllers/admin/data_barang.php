<?php  

class Data_barang extends CI_Controller{

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
		$data ['barang']   = $this->model_barang->tampil_data()->result(); 
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}
 
    public function tambah_aksi()
    {
    	date_default_timezone_set('Asia/Jakarta');
    	$nama_brg  =$this->input->post('nama_brg');
		$harga     =$this->input->post('harga');
		$kategori  =$this->input->post('kategori');
		$deskripsi =$this->input->post('deskripsi');
		$stock     =$this->input->post('stock');
		$gambar    =$_FILES['gambar']['name'];
		if ($gambar =''){}else{
			$config ['upload_path'] = './upload';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal Di Upload!";
		}else{
			$gambar=$this->upload->data('file_name');
		}
	  }	

	  $data = array( 

      	   'nama_brg'  => $nama_brg,
      	   'harga'     => $harga,
      	   'kategori'  => $kategori,
      	   'deskripsi' => $deskripsi,
      	   'stock'     => $stock,
      	   'gambar'    => $gambar,
      	   'tgl_post'    => date('Y-m-d H:i:s'),
      	 );

      	 $this->model_barang->tambah_barang($data, 'tb_barang');
      redirect ('admin/data_barang/index');	
    }

    public function edit($id){
    	
    	$data['judul']       ='Toko Untung - Admin ';
    	$where = array('id_brg' =>$id);
    	$data['barang'] =$this->model_barang->edit_barang($where, 'tb_barang')->result();
    	$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
    }

    public function update(){
		$id_brg         =$this->input->post('id_brg');
		$nama_brg       =$this->input->post('nama_brg');
		$harga          =$this->input->post('harga');
		$kategori       =$this->input->post('kategori');
		$deskripsi      =$this->input->post('deskripsi');
		$stock          =$this->input->post('stock');

		$data = array (

			'nama_brg'   =>$nama_brg,
			'harga'      =>$harga,
			'kategori'   =>$kategori,
			'deskripsi'  =>$deskripsi,
			'stock'      =>$stock,

		);

		$where = array(
		'id_brg' => $id_brg
	     );

		$this->model_barang->update_data($where,$data,'tb_barang');
		redirect('admin/data_barang/index');
 
	}

	public function hapus($id){
		$where = array ('id_brg' => $id);
		$this->model_barang->hapus_data($where, 'tb_barang');
		redirect ('admin/data_barang/index');
	}

	function search(){

        $data['judul']        ='Toko Untung - Admin ';
        $keyword              =   $this->input->post('cari');
        $data['pencarian']    =   $this->model_barang->search($keyword);
        $this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
        $this->load->view('admin/search_barang',$data);
        $this->load->view('templates_admin/footer');
    }

    public function print_barang(){
        $data1         =$this->input->post('tgl_awal');
        $data2          =$this->input->post('tgl_akhir');
    	$data['data']  = $this->model_barang->print_barang($data1,$data2);
    	$this->load->view('admin/print_data_barang', $data);
    }

}

	
