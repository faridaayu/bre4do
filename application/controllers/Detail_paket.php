<?php
class Detail_paket extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('ModelPaket');
		$this->load->model('ModelProduk');
	}
	public function index(){
		redirect('Detail_paket/Detail');
	}
	public function Detail(){
    	$data = array(
			'body' => 'paket/detail',
			'listpaket' => $this->ModelPaket->List_produk_paket()->result()
		);
		$this->load->view('index', $data);
    }
    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_detail_paket',$id);
    	$this->db->delete('detail_paket');
    	redirect('Detail_paket');
    }
    public function Input_detail(){
		$data = array(
		'body'=> 'paket/input_detail',
		'list_paket' => $this->ModelPaket->List_paket()->result(),
		'list_produk' => $this->ModelProduk->List_produk()->result());
		$this->load->view('index', $data);
    }
    public function Insert(){
    	$data  = array(
			'Paket_id_paket' => $this->input->post('nama_paket'), 
			'Produk_id_produk' => $this->input->post('nama_produk'),
			
		);
		$this->db->insert('detail_paket',$data);
		redirect('Detail_paket');
    }
}
?>