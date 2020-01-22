<?php

class Driver extends CI_Controller{
	public function __construct(){
		parent::__construct();
	
		$this->load->model('ModelDriver');
		
	}
	public function index()
	{
		redirect('Driver/List_driver');
	}
	public function List_driver(){
		$data = array(
			'body' => 'driver/list',
			'listdriver' => $this->ModelDriver->List_driver()->result()//manggil model
		);
		$this->load->view('index', $data);
	}
	public function Input_driver(){
		$data = array(
		'body'=> 'driver/input');
		$this->load->view('index', $data);//masukan body ke index
	}
	public function Insert(){
		$data  = array(
			'nama' => $this->input->post('nama'), 
			'plat_nomor' => $this->input->post('plat_nomor'),
			'telepon' => $this->input->post('telepon'),
			'alamat' => $this->input->post('alamat'),
		);
		$this->db->insert('driver',$data);//menentukan data yang dimasukan ditaruh ke database mana
		redirect('Driver/List_driver');		
	}
	public function Edit(){
       $id = $this->uri->segment(3);//ngambil id
        $data = array(
            'body'      => 'driver/update',
            'listdriver'  => $this->ModelDriver->Update($id)->row_array() 
        );
        $this->load->view('index', $data);
    }

    public function Update(){
        $id = $this->input->post('id');//
        $data = array(
            'nama' => $this->input->post('nama'),
            'plat_nomor' => $this->input->post('plat_nomor'),
            'telepon' => $this->input->post('telepon'),
            'alamat' => $this->input->post('alamat')
        );
        $this->db->where('id_Driver',$id);
        $this->db->update('driver',$data);
        redirect('Driver/List_driver');
    }

    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_Driver',$id);
    	$this->db->delete('driver');
    	redirect('Driver');
    }
}
?>