<?php

/**
* 
*/
class Kontak_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getAll(){
		$result = $this->db->get('kontak');
		return $result;
	}
	function getBelumBaca(){
		$result = $this->db->where('status_baca', 'belum')->get('kontak');
		return $result;
	}

	function getByid($id){
		$result = $this->db->where('id', $id)->limit(1)->get('kontak');
		return $result;
	}

	function setStatus($id,$data){
		try{
			$this->db->where('id', $id)->limit(1)->update('kontak',$data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function setbaca($id){
		$data['status_baca'] = 'sudah';
		try{
			$this->db->where('id', $id)->limit(1)->update('kontak',$data);
			$result = $this->db->where('id', $id)->limit(1)->get('kontak');
			return $result;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
		
	}

	function getIfShow(){
		$result = $this->db->where('status_tayang', 'show')->get('kontak');
		return $result;
	}

	function kirimPesan($data){
		try{
			$this->db->insert('kontak', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try{
			$this->db->where('id', $id)->delete('kontak');
			return true;	
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}


  ?>