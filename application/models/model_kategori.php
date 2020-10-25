<?php 

 class Model_kategori extends CI_Model{

 	public function data_komputer(){

 		return $this->db->get_where("tb_barang", array('kategori' => 'KOMPUTER DAN AKSESORIS'));
 	}

 	public function data_fashion(){

 		return $this->db->get_where("tb_barang", array('kategori' => 'FASHION'));
 	}

 	public function data_olahraga(){

 		return $this->db->get_where("tb_barang", array('kategori' => 'OLAHRAGA'));
 	}

 	public function data_otomotif(){

 		return $this->db->get_where("tb_barang", array('kategori' => 'OTOMOTIF'));
 	}
 	 function search($keyword)
    {
        $this->db->like('nama_brg',$keyword);
        $query  =   $this->db->get('tb_barang');
        return $query->result();
    }
 }