<?php

class Metode_bayar extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->model('ModelMetode_bayar');
		
	}
	public function index()
	{
		redirect('Metode_bayar/List_metode_bayar');
	}
	public function List_metode_bayar(){
		$data = array(
			'body' => 'metode_bayar/list',
			'listmetode_bayar' => $this->ModelMetode_bayar->List_metode()->result()
		);
		$this->load->view('index', $data);
	}
	public function Input_metode_bayar(){
		$data = array(
		'body'=> 'metode_bayar/input');
		$this->load->view('index', $data);
	}
	public function Insert(){
		$data  = array(
		'metode_bayar' => $this->input->post('metode_bayar')
	);
		$this->db->insert('metode_bayar',$data);
		redirect('Metode_bayar/List_metode_bayar');		
	}
	public function Edit(){
       $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'metode_bayar/update',
            'listmetode_bayar'  => $this->ModelMetode_bayar->Update($id)->row_array() 
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        $id = $this->input->post('id');
        $data = array(
            'metode_bayar' => $this->input->post('metode_bayar')
        );
        $this->db->where('id_metode_bayar',$id);
        $this->db->update('metode_bayar',$data);
        redirect('Metode_bayar/List_metode_bayar');
    }

    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_metode_bayar',$id);
    	$this->db->delete('metode_bayar');
    	redirect('Metode_bayar');
    }
}
?>