<?php

class Model_barang extends CI_Model{

	public function tampil_data(){
		return $this->db->get('tb_barang');
	}

	public function tambah_barang($data,$table){
		 $this->db->insert($table,$data);
    }

    public function edit_barang($where,$table){
		return $this->db->get_where($table,$where);

	} 

	 public function update_data($where,$data,$table){
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
   }

   public function hapus_data($where,$table){
   	    $this->db->where($where);
	 	$this->db->delete($table);

   }

   public function find($id){

    $result =$this->db->where('id_brg', $id)
                      ->limit(1)
                      ->get('tb_barang');
    if ($result->num_rows () > 0) {
    	return $result->row();
    }else{
    	return array();
    }

   }

   public function detail_brg($id_brg){

      $result =$this->db->where('id_brg', $id_brg)->get('tb_barang');
      if ($result->num_rows() > 0){
        return $result->result();
      }else{
        return false;
      }
   }

   function search($keyword)
    {
        $this->db->like('nama_brg',$keyword);
        $query  =   $this->db->get('tb_barang');
        return $query->result();
    }

    function input_data($data,$table){
    $this->db->insert($table,$data);
  }

  public function tampil_komen($id_brg){

    $result = $this->db->where('id_brg', $id_brg)->get('tb_komentar');
       $result->num_rows() > 0;
        return $result->result();
     
    }

    public function print_barang($data1, $data2){

      $this->db->from('tb_barang');
      $this->db->where('tgl_post >=', $data1);
      $this->db->where('tgl_post <=', $data2);
      $query=$this->db->get();
      return $query->result();
    }

  // public function tampil_komen($id_brg){

  //     $result = $this->db->where('id_brg', $id_brg)->get('tb_komentar');
  //     if ($result->num_rows() > 0){
  //       return $result->result();
  //     }else{
  //       return false;
  //     }
  //   }
}