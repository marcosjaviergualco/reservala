<?php
class MY_Model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function validaUserPass($user,$pass)
	{
		$sql = "SELECT adm.email,adm.clave,adm.superAdmin
				FROM administrador adm 
				WHERE adm.fechaBaja is null
				AND adm.";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		var_dump($result);
		return $result;
	}
}

