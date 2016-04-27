<?php


/**
* 
*/
class Kriteria_daftar_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function getAll(){
		$query = $this->db->get('syarat_pendaftaran');  
         return $query;
	}
	function getById($id){
		$row = $this->db->where('id_daftar', $id)->limit(1)->get('syarat_pendaftaran');
		return $row;
	}

	function create($data){
		try {
			$this->db->insert('syarat_pendaftaran', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateDaftar($id, $data){
		try{
			$this->db->where('id_daftar', $id)->limit(1)->update('syarat_pendaftaran', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try {
			$this->db->where('id_daftar', $id)->delete('syarat_pendaftaran');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	/*function update($data){
		try{
			$this->db->where('id_daftar', 1)->limit(1)->update('syarat_pendaftaran', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	} */
}







?>