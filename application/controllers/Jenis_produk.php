<?php

class Jenis_produk extends CI_Controller{
	public function __construct(){
		parent::__construct();
			$this->load->model('ModelJenis_produk');
		
	}
	public function index()
	{
		redirect('Jenis_produk/List_jenis_produk');
	}
	public function List_jenis_produk(){
		$data = array(
			'body' => 'jenis_produk/list',
			'listjenis_produk' => $this->ModelJenis_produk->List_jenis_produk()->result()
		);
		$this->load->view('index', $data);
	}
	public function android(){
		$sql = $this->ModelJenis_produk->List_jenis_produk()->result();
		echo json_encode($sql);
	}
	public function Input_jenis_produk(){
		$data = array(
		'body'=> 'jenis_produk/input');
		$this->load->view('index', $data);
	}
	public function Insert(){
		$data  = array(
		'jenis_produk' => $this->input->post('jenis_produk')
	);
		$this->db->insert('jenis_produk',$data);
		redirect('Jenis_produk/List_Jenis_produk');		
	}
	public function Edit(){
       $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'jenis_produk/update',
            'listjenis_produk'  => $this->ModelJenis_produk->Update($id)->row_array() 
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        $id = $this->input->post('id');
        $data = array(
            'jenis_produk' => $this->input->post('jenis_produk')
        );
        $this->db->where('id_jenis_produk',$id);
        $this->db->update('jenis_produk',$data);
        redirect('Jenis_produk/List_jenis_produk');
    }

    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_Jenis_produk',$id);
    	$this->db->delete('Jenis_produk');
    	redirect('Jenis_produk');
    }
}
?>