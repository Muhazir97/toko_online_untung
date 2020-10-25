<?php 

 class Model_invoice extends CI_Model{

 	public function index(){

 		date_default_timezone_set('Asia/Jakarta');

    $kode_invoice   = $this->input->post('kode_invoice');
 		$nama           = $this->input->post('nama');
 		$alamat         = $this->input->post('alamat');
    $no_telephone   = $this->input->post('no_telephone');
    $email          = $this->input->post('email');
    $jasa           = $this->input->post('jasa');
    $bank           = $this->input->post('bank'); 

 		$invoice = array(
               'kode_invoice'   => $kode_invoice,
                'nama'          => $nama,
                'alamat'        => $alamat,
                'no_telephone'  => $no_telephone,
                'email'         => $email,
                'jasa'          => $jasa,
                'bank'          => $bank,
                'tgl_pesan'     => date('Y-m-d H:i:s'),
                'batas_bayar'   => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') +1, date('Y'))),
 		);

 		$this->db->insert('tb_invoice', $invoice);
 		$id_invoice =$this->db->insert_id();

 		foreach ($this->cart->contents() as $item){
 			$data = array(
                  'id_invoice'      => $id_invoice,
                  'id_brg'          => $item['id'],
                  'nama_brg'        => $item['name'],
                  'jumlah'          => $item['qty'],
                  'harga'           => $item['price']
 			);
 			$this->db->insert('tb_pesanan', $data);
 		}
 		   return TRUE;
 	}

 	  public function tampil_data(){

 	  	$result = $this->db->get('tb_invoice');
 	  	if ($result->num_rows() > 0){
 	  		return $result->result();
 	  	}else{
 	  		return false;
 	  	}
 	  }

 	  public function ambil_id_invoice($id_invoice){

 	  	$result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
 	  	if ($result->num_rows() > 0){
 	  		return $result->row();
 	  	}else{
 	  		return false;
 	  	}
 	  }

 	  public function ambil_id_pesanan($id_invoice){

 	  	$result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
 	  	if ($result->num_rows() > 0){
 	  		return $result->result();
 	  	}else{
 	  		return false;
 	  	}
 	  }

 	  function search($keyword)
    {
        $this->db->like('id',$keyword);
        $query  =   $this->db->get('tb_invoice');
        return $query->result();
    }

    public function tampil_data_bayar(){

      $this->db->like('status_konfirmasi', 'Sudah Transfer');
        $query  =   $this->db->get('tb_invoice');
        return $query->result();
    }

    function search_bayar($keyword)
    {
        $this->db->like('id',$keyword);
        $query  =   $this->db->get('tb_invoice');
        return $query->result();
    }

    public function jumlah_barang(){

    $query = $this->db->get('tb_barang');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_pesanan(){

    $query = $this->db->get('tb_invoice');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_dibayar(){
    
    $this->db->like('status_konfirmasi', 'Sudah Transfer');
    $query = $this->db->get('tb_invoice');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlah_dikirim(){
    
    $this->db->like('status_konfirmasi', 'Sudah Dikirim');
    $query = $this->db->get('tb_invoice');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function print_invoice($data1, $data2){

      $this->db->from('tb_invoice');
      $this->db->where('tgl_pesan >=', $data1);
      $this->db->where('tgl_pesan <=', $data2);
      $query=$this->db->get();
      return $query->result();
    }

    public function edit_invoice($where,$table){
    return $this->db->get_where($table,$where);

  }
  public function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
   }

 }