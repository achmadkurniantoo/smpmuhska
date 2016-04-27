<?php

/**
* 
*/
class Sejarah_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAll(){
		$query = $this->db->get('sejarah');  
         return $query;
	}

	function updateSejarah($data){
		try{
			$this->db->where('id_sejarah',1)->limit(1)->update('sejarah',$data);
			return true;
	}
		catch (Exception $e) {
			echo $e->getMessage();
		}
}
}

?>