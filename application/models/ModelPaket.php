<?php

	class ModelPaket extends CI_Model{

		function List_paket(){
			return $this->db->get('paket');
		}
		function Update($id){
			return $this->db->get_where('paket', array('id_paket'=>$id));
	    }

	    function List_produk_paket(){
	    	$this->db->select('*');
	    	$this->db->from('paket');
	    	$this->db->join('detail_paket','paket.id_paket = detail_paket.Paket_id_paket');
	    	$this->db->join('produk', 'produk.id_produk = detail_paket.Produk_id_produk');
	    	return $this->db->get();
	    }
	}
?>