<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Print_model extends CI_Model {
    public function view(){
        return $this->db->get('form_pendaftaran')->result();
    }

    function getByIdSiswa($id){
		$row = $this->db->where('no_pendaftaran', $id)->limit(1)->get('form_pendaftaran');
		return $row;
	}

	function printSiswa(){
		$query=$this->db->query('SELECT * FROM form_pendaftaran ORDER BY no_pendaftaran DESC limit 1');
		return $query->result();


	}
	function getAll(){
		$this->db->select('*');
		$this->db->from('form_pendaftaran');
		$this->db->where('no_pendaftaran', 1);

		$query = $this->db->get();
		$pendaftar = $query->row_array();
		return $pendaftar;
	}
	function reset()
	{
		$query=$this->db->query('TRUNCATE TABLE form_pendaftaran');
	}
}