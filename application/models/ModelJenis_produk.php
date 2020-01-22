<?php

	class ModelJenis_produk extends CI_Model{

		function List_jenis_produk(){
			return $this->db->get('jenis_produk');
		}
		function Update($id){
			return $this->db->get_where('jenis_produk', array('id_jenis_produk'=>$id));
	    }	
	}
?>