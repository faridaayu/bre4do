<?php

class Paket extends CI_Controller{
	public function __construct(){
		parent::__construct();
		
		$this->load->model('ModelPaket');
		
	}
	public function index()
	{
		redirect('Paket/List_paket');
	}
	public function List_paket(){
		$data = array(
			'body' => 'paket/list',
			'listpaket' => $this->ModelPaket->List_paket()->result()
		);
		$this->load->view('index', $data);
	}
	public function Input_paket(){
		$data = array(
		'body'=> 'paket/input');
		$this->load->view('index', $data);
	}
	public function Insert(){
		$data  = array(
			'nama_paket' => $this->input->post('nama_paket'), 
			'harga_paket' => $this->input->post('harga_paket'),
			
		);
		$this->db->insert('paket',$data);
		redirect('Paket/List_paket');		
	}
	public function Edit(){
       $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'paket/update',
            'listpaket'  => $this->ModelPaket->Update($id)->row_array() 
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        $id = $this->input->post('id');
        $data = array(
           'nama_paket' => $this->input->post('nama_paket'), 
			'harga_paket' => $this->input->post('harga_paket'),
        );
        $this->db->where('id_paket',$id);
        $this->db->update('paket',$data);
        redirect('Paket/List_paket');
    }

    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_paket',$id);
    	$this->db->delete('paket');
    	redirect('Paket');
    }
}
?>