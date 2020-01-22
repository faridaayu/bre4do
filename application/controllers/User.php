<?php

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('ModelUser');
		
	}
	public function index()
	{
		redirect('User/List_user');
	}
	public function List_user(){
		$data = array(
			'body' => 'user/list',
			'listuser'=>$this->ModelUser->List_user()->result()
		);
		$this->load->view('index', $data);
	}
	public function Input_user(){
		$data = array(
		'body'=> 'user/input');
		$this->load->view('index', $data);
	}
	public function Insert(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'telepon' => $this->input->post('telepon'),
			'email' => $this->input->post('email'),
			'level' => $this->input->post('level'),
		);
		$this->db->insert('user',$data);
		redirect('User/List_user');
	}
}
?>