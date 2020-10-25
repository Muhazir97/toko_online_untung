<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfirmasi_pembayaran extends CI_Controller {

	public function index()
	{
        $data['judul']  ='Toko Untung';
	    $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('konfirmasi_pembayaran');
		$this->load->view('templates/footer');	
	}

	function search(){
        
        $data['judul']     ='Toko Untung';
        $keyword           =   $this->input->post('cari');
        $data['pencarian'] =   $this->model_konfirmasi->search($keyword);
                $this->load->view('templates/header', $data);
                $this->load->view('templates/navbar');
                $this->load->view('konfirmasi',$data);
                $this->load->view('templates/footer');
    }

    public function update(){
        $id                       =$this->input->post('id');
        $status_konfirmasi        =$this->input->post('status_konfirmasi');
        $jumlah_tranfer           =$this->input->post('jumlah_tranfer');
        $ke_bank                  =$this->input->post('ke_bank');
        $nama_pengirim            =$this->input->post('nama_pengirim');
        
        $bukti    =$_FILES['bukti']['name'];
        if ($gambar =''){}else{
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('bukti')){
                echo "Gambar Gagal Di Upload!";
        }else{
            $bukti=$this->upload->data('file_name');
        }
      } 

        $data = array (
            
            'status_konfirmasi'  =>$status_konfirmasi,
            'jumlah_tranfer'     =>$jumlah_tranfer,
            'ke_bank'            =>$ke_bank,
            'nama_pengirim'      =>$nama_pengirim,
            'bukti'              =>$bukti,

        );
        $where = array(
        'id' => $id
         );
 
        $this->model_konfirmasi->update_data($where,$data,'tb_invoice');
        redirect('konfirmasi_pembayaran/konfirmasi_sukses');

    }
    public function konfirmasi_sukses(){

        $data['judul']  ='Toko Untung';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('konfirmasi_sukses');
        $this->load->view('templates/footer');  
    }

}

/* End of file konfirmasi_pembayaran.php */
/* Location: ./application/controllers/konfirmasi_pembayaran.php */