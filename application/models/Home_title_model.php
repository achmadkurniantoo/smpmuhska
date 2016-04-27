<?php
/**
* 
*/
class Home_title_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	public function getTitle(){
		$this->db->select('*');
		$this->db->from('home_title');
		$this->db->where('id_title', 1);

		$query = $this->db->get();
		$hasil = $query->row_array();
		return $hasil;
	}

	function update($data){
		try{
			$this->db->where('id_title', 1)->limit(1)->update('home_title', $data);
			return true;
		}catch (Exception $e) {
			echo $e->getMessage();
		}
	}
}

?>