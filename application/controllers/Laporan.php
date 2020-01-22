<?php

class Laporan extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		
	}
	public function index()
	{
		$data = array(
			'body' => '404.php' );
		$this->load->view('index', $data);
	}
	public function List_laporan(){
		$data = array(
			'body' => 'laporan/list' );
		$this->load->view('index', $data);
	}
	public function Input_laporan(){
		$data = array(
		'body'=> 'laporan/input');
		$this->load->view('index', $data);
	}
}
?>