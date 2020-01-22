<?php

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', 'Anda harus menjadi Admin untk melihat halaman ini !');
			redirect('welcome/index');
		}
		
	}
	public function index()
	{
		$this->load->view('login.php');
	}
}
?>