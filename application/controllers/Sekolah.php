<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Sekolah extends CI_Controller
{

	var $data;

	function __construct()
	{
		parent::__construct();

		$this->load->helper(['url','html','form']);
        $this->load->helper('date');
        $this->load->library(['form_validation','session']);
        $this->load->database();


		$this->load->model('home_title_model');
		$this->load->model('kontak_model');
		$this->load->model('visi_misi_model');
		$this->load->model('gallery_model');
		$this->load->model('visi_misi_model');
		$this->load->model('staff_model');
		$this->load->model('akademik_model');
        $this->load->model('akademik_model_new');
		$this->load->model('kriteria_daftar_model');
		$this->load->model('kriteria_program_model');
		$this->load->model('kriteria_target_model');
		$this->load->model('sejarah_model');
		$this->load->model('pendaftaran_model');
		$this->load->model('print_model');
		

		$this->load->helper('url_helper');
		$this->load->library('pagination');


//------------home------------------------
		$result = $this->home_title_model->getTitle();
		$this->data['title']  		   = $result['title'];
		$this->data['city']            = $result['city'];
		$this->data['logo']            = $result['logo'];
		$this->data['tagline']         = $result['tagline'];
		$this->data['tahun_pelajaran'] = $result['tahun_pelajaran'];

//--------------berita-------------------
        

		$this->data['kategoris'] = $this->akademik_model->getAllKategoriAkademik();

//--------------akademik-------------------

        $this->data['kategoriakademik'] = $this->akademik_model_new->getAllKategoriAkademik();


//----------------tentang----------------------------
		$this->data['vismis'] = $this->visi_misi_model->getVisiMisi();


//------------Staff---------------------
		$this->data['staff'] = $this->staff_model->getAllGuru();
		
//------------Gallery-------------------
		$this->data['images'] = $this->gallery_model->getAll();


//-------------------Syarat Pendaftaran------------------------------------------------
		$this->data['daftar'] = $this->kriteria_daftar_model->getAll();


//---------------------Program Pendidikan---------------------------------------------
		$this->data['program'] = $this->kriteria_program_model->getAll();


//---------------------Target Pendidikan-----------------------------------------------
		$this->data['target'] = $this->kriteria_target_model->getAll();

//---------------------Sejarah------------------------------------------------
		$this->data['konten'] = $this->sejarah_model->getAll();
//-----------------------------------testimoni-------------------------------
        $this->data['testimoni'] = $this->kontak_model->getIfShow();
	}



//-------------------------------------INDEX-------------------------------------------
//-------------------------------------------------------------------------------------
	function index(){
		$this->load->view('sekolah/index',$this->data);
	}

//-------------------------------------KONTAK------------------------------------------
//-------------------------------------------------------------------------------------
	function kontak(){
		$this->load->view('sekolah/kontak',$this->data);
	}

	function kontak_kirim(){
		$rules =    [
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'tlp',
                'label' => 'Tlp',
                'rules' => 'required'
            ],
            [
                'field' => 'pesan',
                'label' => 'Pesan',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('sekolah/kontak',$this->data);
        }
        else{
        	$now = time();

	        $datakontak['nama']   = set_value('name');
	        $datakontak['email']   = set_value('email');
	        $datakontak['no_tlp']   = set_value('tlp');
	        $datakontak['pesan']   = set_value('pesan');
	        $datakontak['tgl_kirim']   = unix_to_human($now, TRUE, 'us');
	        $datakontak['status_baca']   = 'belum';
	        $datakontak['status_tayang']   = 'hidden';

	        $this->kontak_model->kirimPesan($datakontak);
	        $this->session->set_flashdata('message','Pesan Telah terkirim....');
	       	redirect('sekolah/kontak');
        }
	}

	//-----------------------------------BERITA------------------------------------------------
	//-----------------------------------------------------------------------------------------

	function artikel($kategori){

		$config["base_url"] = base_url() . "sekolah/artikel/".$kategori;
		$total_row = $this->akademik_model->record_count($kategori);
		$config["total_rows"] = $total_row * 3 + $total_row / 2;
		$config["per_page"] = 5;
		$config['use_page_numbers'] = TRUE;
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
       

		$this->pagination->initialize($config);
        $this->db->order_by("id_akademik","desc");

		$dari = ($this->uri->segment(4))? $this->uri->segment(4) : 0;

		$data["results"] = $this->akademik_model->fetch_data($config["per_page"],$dari, urldecode($kategori));

		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
		$data["thiskategori"] = $kategori;

		$this->load->view('sekolah/listberita',['title' => $this->data['title'], 'city' => $this->data['city'],'thiskategori'=>$data["thiskategori"],'results' => $data["results"],'links' =>$data["links"], 'title' => $this->data['title'], 'kategoriakademik'=> $this->data["kategoriakademik"],'kategoris'=> $this->data["kategoris"]]);
		
	}

	function baca($kategori=NULL,$id=NULL){
		
		if($kategori != NULL && $id != NULL){
			$data["artikel"] = $this->akademik_model->getAkademikByIdIfShow($id, urldecode($kategori));
			$data["thiskategori"] = $kategori;
			$this->load->view('sekolah/berita',['title' => $this->data['title'], 'city' => $this->data['city'],'thiskategori'=>$data["thiskategori"], 'kategoriakademik'=> $this->data["kategoriakademik"], 'kategoris'=> $this->data["kategoris"],'artikel' =>$data["artikel"], 'title' => $this->data['title']]);
		}	
	}

    //-----------------------------------Akademik------------------------------------------------
    //-----------------------------------------------------------------------------------------

    function akademik($kategori){

        $config["base_url"] = base_url() . "sekolah/akademik/".$kategori;
        $total_row = $this->akademik_model_new->record_count($kategori);
        $config["total_rows"] = $total_row * 3 + $total_row / 2;
        $config["per_page"] = 5;
        $config['use_page_numbers'] = TRUE;
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
       

        $this->pagination->initialize($config);
        $this->db->order_by("id_akademik","desc");

        $dari = ($this->uri->segment(4))? $this->uri->segment(4) : 0;

        $data["results"] = $this->akademik_model_new->fetch_data($config["per_page"],$dari, urldecode($kategori));

        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
        $data["thiskategori"] = $kategori;

        $this->load->view('sekolah/new_listberita',['title' => $this->data['title'], 'city' => $this->data['city'],'thiskategori'=>$data["thiskategori"],'results' => $data["results"],'links' =>$data["links"], 'title' => $this->data['title'], 'kategoris'=> $this->data["kategoris"],'kategoriakademik'=> $this->data["kategoriakademik"]]);
        
    }

    function baca_akademik($kategori=NULL,$id=NULL){
        
        if($kategori != NULL && $id != NULL){
            $data["akademik"] = $this->akademik_model_new->getAkademikByIdIfShow($id, urldecode($kategori));
            $data["thiskategori"] = $kategori;
            $this->load->view('sekolah/new_berita',['title' => $this->data['title'], 'city' => $this->data['city'],'thiskategori'=>$data["thiskategori"], 'kategoriakademik'=> $this->data["kategoriakademik"], 'kategoris'=> $this->data["kategoris"],'akademik' =>$data["akademik"], 'title' => $this->data['title']]);
        }   
    }

	//-----------------------------------STAFF-------------------------------------------------
	//-----------------------------------------------------------------------------------------

	function staff()
	{
		
		$this->load->view('sekolah/staff',$this->data);
	}

	//-----------------------------------TENTANG----------------------------------------------
	//----------------------------------------------------------------------------------------

	function tentang(){
		

		$this->load->view('sekolah/tentang',$this->data);

	}

	//----------------------------------GALLERY-----------------------------------------------
	//----------------------------------------------------------------------------------------

	function gallery()
	{
		$this->load->view('sekolah/gal', $this->data);
	}

	//-----------------------------------TAUSIAH---------------------------------------------
	//---------------------------------------------------------------------------------------
	function tausiah()
	{
		$this->load->view('sekolah/tausiah', $this->data);
	}



	//---------------------------------PENDAFTARAN---------------------------------------------------
	//----------------------------------------------------------------------------------------
	function pendaftaran()
	{
		$gambar = $this->gallery_model->terakhirUpdate();
		$this->load->view('sekolah/pendaftaran', $this->data);
	}

	//-----------------------------PRINT--------------------------------------------------
	//------------------------------------------------------------------------------------
	function cetak_form()
	{
		ob_start();
     	
     	$cetak= $this->print_model->printSiswa();
     	$this->load->view('sekolah/print', ['cetak'=>$cetak]);
     	$htmlprint = ob_get_contents();
     	ob_end_clean();

     	require_once('./assets/html2pdf/html2pdf.class.php');

     	$hasil = new HTML2PDF('P',array('330','215'),'en');
     	$hasil->WriteHTML($htmlprint);

     	$hasil->Output('data_siswa.pdf', 'D');

     	
     	

	}  
    //------------------------------testimoni---------------------------------------------
    //------------------------------------------------------------------------------------
    function testimoni(){
        $this->load->view('sekolah/testimoni', $this->data);
    }

	
	//------------------------------FORM PPDB---------------------------------------------
	//-------------------------------------------------------------------------------------
	function ppdb()
	{

		$this->load->view('sekolah/ppdb', $this->data);
	}

	

	function preview()
	{
		$murid= $this->print_model->printSiswa();
     	$this->load->view('sekolah/preview', ['murid'=>$murid]);
		
	}

	function kirimData(){
        $rules =    [
            [
                'field' => 'namaLengkap',
                'label' => '*Nama Lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'ttgl',
                'label' => '*Tempat Tanggal Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'jenisKelamin',
                'label' => '*Jenis Kelamin',
                'rules' => 'required'
            ],
            [
                'field' => 'agama',
                'label' => '*Agama',
                'rules' => 'required'
            ],
            [
                'field' => 'anakKe',
                'label' => '*Anak Ke',
                'rules' => 'required'
            ],
            [
                'field' => 'status',
                'label' => '*Status',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat',
                'label' => '*Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'nisn',
                'label' => '*NISN',
                'rules' => 'required'
            ],
            [
                'field' => 'nstl',
                'label' => '*NSTL',
                'rules' => 'required'
            ],

            [
                'field' => 'namaSekolah',
                'label' => 'Nama Sekolah',
                'rules' => 'required'
            ],            
            [
                'field' => 'alamatSekolah',
                'label' => '*Alamat Sekolah',
                'rules' => 'required'
            ],
            
            [
                'field' => 'namaAyah',
                'label' => '*Nama Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'nomorTelponAyah',
                'label' => '*No.Telp Ayah',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'pekerjaanAyah',
                'label' => '*Pekerjaan Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'pendidikanAyah',
                'label' => '*Pendidikan Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'agamaAyah',
                'label' => '*Agama Ayah',
                'rules' => 'required'
            ],
            [
                'field' => 'namaIbu',
                'label' => '*Nama Ibu',
                'rules' => 'required'
            ],
            [
                'field' => 'nomorTelponIbu',
                'label' => '*No.Telp Ibu',
                'rules' => 'required|integer'
            ],
            [
                'field' => 'agamaIbu',
                'label' => '*Agama Ibu',
                'rules' => 'required'
            ],
            [
                'field' => 'pendidikanIbu',
                'label' => '*Pendidikan Ibu',
                'rules' => 'required'
            ],
            [
                'field' => 'pekerjaanIbu',
                'label' => '*Pekerjaan Ibu',
                'rules' => 'required'
            ],
            [
                'field' => 'penghasilan',
                'label' => '*Penghasilan',
                'rules' => 'required|integer'
            ],

        ];

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('sekolah/ppdb',$this->data);
        }
        else{
        	
	        $datappdb['nama_lengkap']   = set_value('namaLengkap');
	        $datappdb['ttgl']   = set_value('ttgl');
	        $datappdb['jenis_kelamin']   = set_value('jenisKelamin');
	        $datappdb['agama']   = set_value('agama');
	        $datappdb['anak']   = set_value('anakKe');
	        $datappdb['status']   = set_value('status');
	        $datappdb['alamat']   = set_value('alamat');
	        $datappdb['nisn']   = set_value('nisn');
	        $datappdb['nama_sekolah']   = set_value('namaSekolah');
	        $datappdb['alamat_sekolah']   = set_value('alamatSekolah');
	        $datappdb['stl']   = set_value('nstl');
	        $datappdb['nama_ayah']   = set_value('namaAyah');
	        $datappdb['hp_ayah']   = set_value('nomorTelponAyah');
	        $datappdb['agama_ayah']   = set_value('agamaAyah');
	        $datappdb['pendidikan_ayah']   = set_value('pendidikanAyah');
	        $datappdb['pekerjaan_ayah']   = set_value('pekerjaanAyah');
	        $datappdb['nama_ibu']   = set_value('namaIbu');
	        $datappdb['hp_ibu']   = set_value('nomorTelponIbu');
	        $datappdb['agama_ibu']   = set_value('agamaIbu');
	        $datappdb['pendidikan_ibu']   = set_value('pendidikanIbu');
	        $datappdb['pekerjaan_ibu']   = set_value('pekerjaanIbu');
	        $datappdb['nama_wali']   = set_value('namaWali');
	        $datappdb['hp_wali'] = set_value('nomorTelponWali');
	        $datappdb['agama_wali']   = set_value('agamaWali');
	        $datappdb['pendidikan_wali']   = set_value('pendidikanWali');
	        $datappdb['pekerjaan_wali']   = set_value('pekerjaanWali');
	        $datappdb['penghasilan']   = set_value('penghasilan');

	        $this->pendaftaran_model->insertForm($datappdb);
	        $this->session->set_flashdata('message','Data Telah terkirim....');
	       	redirect('sekolah/preview');

        }
    }

    function view($id)
     {
        $views = $this->gallery_model->getById($id)->row();
        $this->load->view('sekolah/view', ['views'=>$views]);
     }
    
    
	
}

?>