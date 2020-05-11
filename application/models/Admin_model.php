<?php

class Admin_model extends CI_model {
	public function getAllDapel()
	{
		return $query = $this->db->get('dapel')->result_array();
	}
}
