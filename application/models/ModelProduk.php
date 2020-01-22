<?php

	class ModelProduk extends CI_Model{
		function List_produk(){
			return $this->db->from('produk')
							->join('jenis_produk', 'produk.Jenis_produk_id_jenis_produk = jenis_produk.id_jenis_produk')
							->get();
		}

		function Update($id){
			return $this->db->get_where('produk', array('id_produk'=>$id));
	    }
	}
?>