<?php
/**
* 
*/
class Akademik_model_new extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function record_count($kategori) {
		return $this->db->where(['kategori'=> $kategori, 'status' => 'show'])->get("new_akademik")->num_rows();
	}

	public function fetch_data($limit,$dari, $kategori) {
		$query = $this->db->where(['kategori'=> $kategori, 'status' => 'show'])->get("new_akademik" ,$limit, $dari)->result();
		return $query;
	}



	function getAllAkademik(){
		$result = $this->db->get('new_akademik');
		return $result;
	}

	function getAkademikById($id){
		$result = $this->db->where('id_akademik', $id)->get('new_akademik');
		return $result;
	}

	function getAkademikByIdIfShow($id,$kategori){
		$result = $this->db->limit(1)->where(['id_akademik'=> $id,'kategori'=> $kategori, 'status' => 'show'])->get('new_akademik');
		return $result;
	}

	function getAkademikIfShowByKategori($kategori){
		$result = $this->db->where(['status' => 'show', 'kategori' => $kategori])->get('new_akademik');
		return $result;
	}


	function setAkademik($data){
		try {
			$this->db->insert('new_akademik', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateAkademik($id, $data){
		try {
			$this->db->where('id_akademik', $id)->limit(1)->update('new_akademik', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function deleteAkademik($id){
		try {
			$this->db->where('id_akademik', $id)->limit(1)->delete('new_akademik');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


	function deleteAllArtikelByKategori($kategori){
		try {
			$this->db->where('kategori', $kategori)->delete('new_akademik');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	//-------------------------------------------------------------------------

	function getAllKategoriAkademik(){
		$result = $this->db->get('new_kategoriakademik');
		return $result;
	}

	function getKategoriAkademikById($id){
		$result = $this->db->where('id_kategori', $id)->get('new_kategoriakademik');
		return $result;
	}

	function setKategoriAkademik($data){
		try {
			$this->db->insert('new_kategoriakademik', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateKategoriAkademik($id, $data){
		try {
			$this->db->where('id_kategori', $id)->limit(1)->update('new_kategoriakademik', $data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function deleteKategoriAkademik($id){
		try {
			$this->db->where('id_kategori', $id)->limit(1)->delete('new_kategoriakademik');
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

}


?>