<?php

	class ModelDriver extends CI_Model{

		function List_driver(){
			return $this->db->get('driver');//ngambil database
		}
		function Update($id){
			return $this->db->get_where('driver', array('id_Driver'=>$id));
	    }	
	}
?>