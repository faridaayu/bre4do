<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'body' => '404.php' );
		$this->load->view('index', $data);
	}
	public function driver(){
		$data = array(
			'body' => 'driver/list' );
		$this->load->view('index', $data);
	}
	public function input_driver(){
		$data = array(
		'body'=> 'driver/input');
		$this->load->view('index', $data);
	}
	public function user(){
		$data = array(
			'body' => 'user/list' );
		$this->load->view('index', $data);
	}
	public function produk(){
		$data = array(
			'body' => 'produk/list' );
		$this->load->view('index', $data);
	}
	public function pemesanan(){
		$data = array(
			'body' => 'pemesanan/list' );
		$this->load->view('index', $data);
	}
	public function transaksi(){
		$data = array(
			'body' => 'transaksi/list' );
		$this->load->view('index', $data);
	}
	public function laporan(){
		$data = array(
			'body' => 'laporan/list' );
		$this->load->view('index', $data);
	}
}
