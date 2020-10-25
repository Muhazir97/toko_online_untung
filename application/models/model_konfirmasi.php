<?php  

 class Model_konfirmasi extends CI_Model{

 	 function search($keyword)
    {
        $this->db->like('kode_invoice',$keyword);
        $query  =   $this->db->get('tb_invoice');
        return $query->result();
    } 
    public function update_data($where,$data,$table){
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
   }
 }