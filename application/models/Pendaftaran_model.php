<?php
/**
* 
*/
class Pendaftaran_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function insertForm($data){
		try {
			$this->db->insert('form_pendaftaran', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	function getAll(){
		$result = $this->db->get('form_pendaftaran');
		return $result;
	}
}

?>