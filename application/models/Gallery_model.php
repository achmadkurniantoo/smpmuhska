<?php
/**
* 
*/
class Gallery_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAll(){
		$result = $this->db->get('images');
		return $result;
	}

	function getIfShow(){
		$result = $this->db->where('status', 'show')->get('images');
		return $result;
	}

	function getById($id){
		$row = $this->db->where('id_images', $id)->limit(1)->get('images');
		return $row;
	}

	function create($data){
		try {
			$this->db->insert('images', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function update($id, $data){
		try{
			$this->db->where('id_images', $id)->limit(1)->update('images', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try {
			$this->db->where('id_images', $id)->delete('images');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function terakhirUpdate(){
		$query=$this->db->query('SELECT * FROM images ORDER BY id_images DESC limit 1');
		return $query->result();
	}
}

  ?>