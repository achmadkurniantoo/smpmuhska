<?php
/**
* 
*/
class Staff_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAllGuru(){
		$result = $this->db->get('daftar_guru');
		return $result;
	}

	function getByIdGuru($id){
		$row = $this->db->where('id_guru', $id)->limit(1)->get('daftar_guru');
		return $row;
	}

	function createGuru($data){
		try {
			$this->db->insert('daftar_guru', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateGuru($id, $data){
		try{
			$this->db->where('id_guru', $id)->limit(1)->update('daftar_guru', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function deleteGuru($id){
		try {
			$this->db->where('id_guru', $id)->delete('daftar_guru');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

  ?>