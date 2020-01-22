<?php

	class ModelUser extends CI_Model{

		function List_user(){
			return $this->db->get('user');
		}
		function Update($id){
			return $this->db->get_where('user', array('id_user'=>$id));
		}
	}
?>