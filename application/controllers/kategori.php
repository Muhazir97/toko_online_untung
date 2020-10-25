<?php 

 class kategori extends CI_Controller{

 	public function komputer(){

        $data['judul']  ='Toko Untung';
        $data['komputer'] = $this->model_kategori->data_komputer()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('komputer',$data);
		$this->load->view('templates/footer');
 	}

 	public function fashion(){

        $data['judul']  ='Toko Untung';
        $data['fashion'] = $this->model_kategori->data_fashion()->result();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/navbar');
		$this->load->view('fashion',$data);
		$this->load->view('templates/footer');
 	}

 	public function olahraga(){

        $data['judul']  ='Toko Untung';
        $data['olahraga'] = $this->model_kategori->data_olahraga()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('olahraga',$data);
		$this->load->view('templates/footer');
 	}

 	public function otomotif(){

        $data['judul']  ='Toko Untung';
        $data['otomotif'] = $this->model_kategori->data_otomotif()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
		$this->load->view('otomotif',$data);
		$this->load->view('templates/footer');
 	}

        function search(){

        $data['judul']  ='Toko Untung';
        $keyword              =   $this->input->post('cari');
        $data['pencarian']    =   $this->model_kategori->search($keyword);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('search',$data);
        $this->load->view('templates/footer');
    }

 }