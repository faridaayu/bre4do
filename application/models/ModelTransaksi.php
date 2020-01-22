<?php

	class ModelTransaksi extends CI_Model{

		function List_transaksi(){
			return $this->db->get('Transaksi');
		}
	}
?>