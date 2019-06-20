<?php
class Index extends MY_Model{
	public function __construct(){
		parent::__construct();
	}

	public function validaUserPass($user,$pass){
		$sql = "SELECT adm.email,adm.clave,adm.superAdmin
				FROM administrador adm 
				WHERE adm.fechaBaja is null
				AND adm.";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
}
