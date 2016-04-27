<?php 
/**
* 
*/
class Visi_misi_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getVisiMisi(){
		$query = $this->db->get('visi_misi');  
         return $query;
	}

	


	function getById($id){
		$row = $this->db->where('id_visiMisi', $id)->limit(1)->get('visi_misi');
		return $row;
	}

	function create($data){
		try {
			$this->db->insert('visi_misi', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateVismis($id, $data){
		try{
			$this->db->where('id_visiMisi', $id)->limit(1)->update('visi_misi', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function delete($id){
		try {
			$this->db->where('id_visiMisi', $id)->delete('visi_misi');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}


  ?>