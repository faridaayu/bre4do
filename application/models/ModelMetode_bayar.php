	<?php

		class ModelMetode_bayar extends CI_Model{

			function List_metode(){
				return $this->db->get('metode_bayar');
			}
			function Update($id){
				return $this->db->get_where('metode_bayar', array('id_metode_bayar'=>$id));
		    }	
		}
	?>