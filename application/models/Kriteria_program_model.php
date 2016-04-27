<?php

/**
* 
*/
class Kriteria_program_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function getAll(){
		$query = $this->db->get('program_pendidikan');  
         return $query;
	}

	function update(){
		/*try{
			$this->db->where('id_program', 1)->limit(1)->update('program_pendidikan', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}*/
		$idNum = $data['id_program'];
  		unset($data['id_program']);
  		$this->db->where('id_program', $idNum);
  		$this->db->update('offers' ,$data);
  		return true;
	}
		function getById($id){
		$row = $this->db->where('id_program', $id)->limit(1)->get('program_pendidikan');
		return $row;
	}

	function create($data){
		try {
			$this->db->insert('program_pendidikan', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateProgram($id, $data){
		try{
			$this->db->where('id_program', $id)->limit(1)->update('program_pendidikan', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try {
			$this->db->where('id_program', $id)->delete('program_pendidikan');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}




?>