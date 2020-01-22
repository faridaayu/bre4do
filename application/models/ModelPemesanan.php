<?php

	class ModelPemesanan extends CI_Model{

		function List_pemesanan(){
			return $this->db->get('pesanan');
		}
		function Update($id){
			return $this->db->get_where('pesanan', array('id_pesanan'=>$id));
	    }
	    function List_detail_pesanan(){
	    	$this->db->select('*');
	    	$this->db->from('pesanan');
	    	$this->db->join('metode_bayar','metode_bayar.id_metode_bayar = pesanan.Metode_bayar_id_metode_bayar');
	    	$this->db->join('detail_pesanan','detail_pesanan.Pesanan_id_pesanan = pesanan.id_pesanan');
	    	$this->db->join('users','users.id = pesanan.users_id');
	    	$this->db->join('driver','driver.id_Driver = pesanan.Driver_id_Driver');
	    	return $this->db->get();

	    }
	}
?>