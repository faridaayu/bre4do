<?php 
class Produk extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('ModelProduk');
		$this->load->model('ModelJenis_produk');
		
	}
	public function android(){
		$sql = $this->ModelProduk->List_produk()->result();
		echo json_encode($sql);
	}
	public function List_produk(){
		$data = array(
			'body' => 'produk/list',
			'listproduk' => $this->ModelProduk->List_produk()->result());
		$this->load->view('index', $data);
	}
	public function Input_produk(){
		$data = array(
		'body'=> 'produk/input',
		'jenis_produk' => $this->ModelJenis_produk->List_jenis_produk()->result());
		$this->load->view('index', $data);
	}
	public function Insert(){
		$dir = base_url().'assets/image_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'produk/input',
            );
            $this->load->view('index', $error);
        }else{
		$data  = array(
		'nama_produk' => $this->input->post('nama'),
		'harga_produk' => $this->input->post('harga_produk'),
		'gambar' => $dir.$this->upload->data('file_name'),
		'stok' => $this->input->post('stok'),
		'Jenis_produk_id_jenis_produk' => $this->input->post('jenis_produk'),
	);
		$this->db->insert('produk',$data);
		redirect('produk/List_produk');		
	}
}
	public function edit(){
       $id = $this->uri->segment(3);
        $data = array(
            'body'      => 'produk/update',
            'listproduk'  => $this->ModelProduk->Update($id)->row_array(),
            'jenis_produk' => $this->ModelJenis_produk->List_jenis_produk()->result()
        );
        $this->load->view('index', $data);
    }

    public function Update(){
    	$id = $this->input->post('id_produk');
       $dir = base_url().'assets/image_upload/';
        $config['upload_path']      = 'assets/image_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar')) {
            $error = array(
                'error'     => $this->upload->display_errors(),
                'body'      => 'produk/update',
            );
            $this->load->view('index', $error);
        }else{
		$data  = array(
		'nama_produk' => $this->input->post('nama'),
		'harga_produk' => $this->input->post('harga_produk'),
		'gambar' => $dir.$this->upload->data('file_name'),
		'stok' => $this->input->post('stok'),
		'Jenis_produk_id_jenis_produk' => $this->input->post('jenis_produk'),
        );
       $this->db->where('id_produk',$id);
        $this->db->update('produk',$data);
        redirect('Produk/List_produk');
    }
}

    public function Delete(){
    	$id = $this->uri->segment(3);
    	$this->db->where('id_produk',$id);
    	$this->db->delete('produk');
    	redirect('Produk/List_produk');
    }
}