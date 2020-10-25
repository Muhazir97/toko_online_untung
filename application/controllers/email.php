<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index(){

    $data['judul']  ='Toko Untung';
    $is_processed = $this->model_invoice->index();
        if($is_processed){
          $this->cart->destroy();
          $this->load->view('templates/header', $data);
          $this->load->view('templates/navbar');
          $this->load->view('proses_pesanan');
          $this->load->view('templates/footer');
          $this->load->helper('string');
      
        }else{
          echo "Maaf, Pesanan Anda Gagal Di Proses";
        }
   

       $config = array(
             
            
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.googlemail.com',
            'smtp_user'   => 'untungteruskuy@gmail.com',  // Email gmail
            'smtp_pass'   => 'untungterusgeh',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'        => "\r\n",
            'newline'     => "\r\n"
       );

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");  
		$this->email->from('untungterusgeh@email.com', 'Toko Online Untung');
		$this->email->to($this->input->post('email'));
		$this->email->subject('Informasi Nomor/Kode Invoice');
		$this->email->message('Ini No Invoice Anda ='. $this->input->post('kode_invoice'));
		
		  if (!$this->email->send()) {  
            show_error($this->email->print_debugger());   
          }else{  
            redirect('proses_pesanan');   
   }  
  } 

 public function update_resi(){
        $id                       =$this->input->post('id');
        $status_konfirmasi        =$this->input->post('status_konfirmasi');
        $informasi                =$this->input->post('informasi');
        $email                    =$this->input->post('email');

        $data = array (
            
            'status_konfirmasi'  =>$status_konfirmasi,
            'informasi'          =>$informasi,
            'email'              =>$email,
        );
        $where = array(
        'id' => $id
         );
 
        $this->model_konfirmasi->update_data($where,$data,'tb_invoice');
      

    
   

       $config = array(
             
            
            'protocol'    => 'smtp',
            'smtp_host'   => 'smtp.googlemail.com',
            'smtp_user'   => 'untungteruskuy@gmail.com',  // Email gmail
            'smtp_pass'   => 'untungterusgeh',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'        => "\r\n",
            'newline'     => "\r\n"
       );

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");  
    $this->email->from('untungterusgeh@email.com', 'Toko Online Untung');
    $this->email->to($this->input->post('email'));
    $this->email->subject('Informasi Pesanan');
    $this->email->message($this->input->post('informasi'));
    
      if (!$this->email->send()) {  
            show_error($this->email->print_debugger());   
          }else{  
              redirect('admin/dashboard_admin/index');   
   }  
  }   

}

/* End of file email.php */
/* Location: ./application/controllers/email.php */