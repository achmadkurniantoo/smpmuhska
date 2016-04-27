<?php
/**
* 
*/
class Postingan_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	//-----------------------kategori-----------------------
	function getAllKategori(){
		$result = $this->db->get('kategori');
		return $result;
	}
	function addKategori($data){
		try {
			$this->db->insert('kategori',$data);
			return true ;
		} catch (Exception $e) {
			echo $e->getMessage();
		}		
	}

	function getKategoriById($id){
		$result = $this->db->where('id_kategory', $id)->limit(1)->get('kategori');
		return $result;
	}

	function updateKategory($id,$data){
		try {
			$this->db->where('id_kategory', $id)->limit(1)->update('kategori',$data);
			return true ;
		} catch (Exception $e) {
			echo $e->getMessage();
		}		
	}

	function deleteKategori($id){
		try {

			if($this->db->where('id_kategory', $id)->delete('postingan')){
				$this->db->where('id_kategory', $id)->limit(1)->delete('kategori');
			}else{
				$this->db->where('id_kategory', $id)->limit(1)->delete('kategori');
			}
			

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


	//-----------------------Artikel------------------------

	function setArtikel($data){
		try {
			$this->db->insert('artikel',$data);
			$insert_id = $this->db->insert_id();
			return $insert_id ;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function getArtikelById($id){
		$result = $this->db->where('id_artikel',$id)->get('artikel');
		return $result;		
	}

	function getArtikelIfShow(){
		$result = $this->db->where('status', 'show')->get('artikel');
		return $result;		
	}

	function getAllArtikel(){
		$result = $this->db->get('artikel');
		return $result;	
	}

	function deleteArtikel($id){
		try {

			if($this->db->where('id_artikel', $id)->delete('postingan')){
				$this->db->where('id_artikel', $id)->limit(1)->delete('artikel');
			}else{
				$this->db->where('id_artikel', $id)->limit(1)->delete('artikel');
			}
			

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function updateArtikel($id,$data){
		try {
			$this->db->where('id_artikel', $id)->update('artikel', $data);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}


	//----------------------Postingan-----------------------

	function setPostingan($data){
		try {
			$this->db->insert('postingan',$data);
			return true;
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function getAllPostingan(){
		$result = $this->db->get('postingan');
		return $result;
	}

	function getAllJoin(){
		$result = $this->db->query("SELECT A.id_artikel, A.judul, A.tgl_posting, A.status, K.kategori FROM postingan INNER JOIN artikel A ON postingan.id_artikel=A.id_artikel INNER JOIN kategori K ON postingan.id_kategory=K.id_kategory ORDER BY A.judul");
		return $result;
	}
}



  ?>