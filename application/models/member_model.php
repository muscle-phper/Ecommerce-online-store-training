<?php
	
	class member_model extends CI_model{

		public function getall(){

			$query = $this->db->SELECT('*')
					 ->FROM('members')
					 ->order_by('id','ASC')
					 ->get();
			return $query->result();

		}
	}

?>