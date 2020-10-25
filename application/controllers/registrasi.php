<?php  

class Registrasi extends CI_Controller{

	public function index(){

        $data['judul']  ='Toko Untung ';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Password2', 'matches[password]');


		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header', $data);
			$this->load->view('registrasi');
			$this->load->view('templates_admin/footer');
		}else{
			$data = array(

                'id'          => '',
                'nama'        => $this->input->post('nama'),
                'username'    => $this->input->post('username'),
                'password'    => $this->input->post('password'),
                'role_id'     => 2,

			   );
			$this->db->insert('tb_login', $data);
			redirect('auth/login');
		}
	}

	
}