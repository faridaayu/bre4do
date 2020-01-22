<?php

class Pemesanan extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ModelPemesanan');
		$this->load->model('ModelDriver');
		$this->load->model('ModelMetode_bayar');
	}
	public function index()
	{
		$data = array(
			'body' => '404.php' );
		$this->load->view('index', $data);
	}
	public function List_pemesanan(){
		$data = array(
			'body' => 'pemesanan/list',
			'listpesanan' => $this->ModelPemesanan->List_detail_pesanan()->result());
		$this->load->view('index', $data);
	}
	public function Input_pemesanan(){
		$data = array(
		'body'=> 'pemesanan/input',
		'listpesanan' => $this->ModelPemesanan->List_detail_pesanan()->result(),
		'listdriver' => $this->ModelDriver->List_driver()->result(),
		'listmetode' =>$this->ModelMetode_bayar->List_metode()->result(),

	);
		$this->load->view('index', $data);
	}
	public function Insert(){
		$data  = array(
		'tgl_pesan' => $this->input->post('tgl_pesan'), 
		'wkt_pesan' => $this->input->post('wkt_pesan'),
		'Metode_bayar_id_metode_bayar' => $this->input->post('metode_bayar'),
		'Driver_id_driver' => $this->input->post('nama'),
		'alamat_pesanan' => $this->input->post('alamat_pesanan'),
		'users_id' => $this->input->post('first_name'),
		'tgl_kirim' =>$this->input->post('tgl_kirim'),
		'status' => $this->input->post('status')
			
		);
		$this->db->insert('pesanan',$data);
		redirect('pemesanan/List_pemesanan');
	}
}
?>
