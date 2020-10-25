<?php 

 class Model_verifikasi extends CI_Model{

 	  public function index(){

      $this->db->like('status_konfirmasi', 'Sudah Dikirim');
        $query  =   $this->db->get('tb_invoice');
        return $query->result();
    }

 }