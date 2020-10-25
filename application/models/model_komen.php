<?php 

 class Model_invoice extends CI_Model{ 

public function tampil_data(){
		return $this->db->get('tb_barang');
	}
} 	  