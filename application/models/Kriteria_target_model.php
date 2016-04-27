<?php 

/**
* 
*/
class Kriteria_target_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function getAll(){
		$query = $this->db->get('target_kompetensi');  
         return $query;
	}

	function getById($id){
		$row = $this->db->where('id_target', $id)->limit(1)->get('target_kompetensi');
		return $row;
	}

	function create($data){
		try {
			$this->db->insert('target_kompetensi', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateTarget($id, $data){
		try{
			$this->db->where('id_target', $id)->limit(1)->update('target_kompetensi', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try {
			$this->db->where('id_target', $id)->delete('target_kompetensi');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}



 ?>