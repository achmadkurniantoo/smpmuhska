<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Dashboard extends CI_Controller
{
	var $data= array();
	public static $coba;

	function __construct(){
		parent::__construct();

		if(!isset($_SESSION)){session_start();}

		$this->load->model('gallery_model');
		$this->load->model('home_title_model');
		$this->load->model('kontak_model');
		$this->load->model('postingan_model');
		$this->load->model('akademik_model');
		$this->load->model('staff_model');      
		$this->load->model('visi_misi_model'); 
		$this->load->model('kriteria_program_model');
		$this->load->model('kriteria_daftar_model');
		$this->load->model('kriteria_target_model');
		$this->load->model('pendaftaran_model');
		$this->load->model('sejarah_model');
		$this->load->model('print_model');
		 


        $this->load->helper(['url','html','form']);
        $this->load->helper('date');
        $this->load->library(['form_validation','session']);
        $this->load->database();

    	if($this->session->userdata('logged_in')){
     		$session_data = $this->session->userdata('logged_in');
     		$this->data['username'] = $session_data['username'];
   		}else{
     		redirect('admin/login', 'refresh');
   		}

   		$this->data['hasil'] = $this->home_title_model->getTitle();
   		$this->data['kontak'] = $this->kontak_model->getAll();
   		$this->data['kontakbaca'] = $this->kontak_model->getBelumBaca()->num_rows();
   		$this->data['images'] = $this->gallery_model->getAll();
   		$this->data['daftarkategori'] = $this->postingan_model->getAllKategori();
   		$this->data['semuaberita'] = $this->postingan_model->getAllArtikel();
   		$this->data['allpostingan'] = $this->postingan_model->getAllPostingan();
   		$this->data['allkategoriakademik'] = $this->akademik_model->getAllKategoriAkademik();
   		$this->data['allakademik'] = $this->akademik_model->getAllAkademik();
   		$this->data['visimisi'] = $this->visi_misi_model->getVisiMisi();           
   		$this->data['staff'] = $this->staff_model->getAllGuru();                   
   		$this->data['program'] = $this->kriteria_program_model->getAll();
   		$this->data['daftar'] = $this->kriteria_daftar_model->getAll();
   		$this->data['target'] = $this->kriteria_target_model->getAll();
   		$this->data['sejarah'] = $this->sejarah_model->getAll();
   		$this->data['calon_siswa'] = $this->pendaftaran_model->getAll();
   		


	}
//--------------------------------------INDEX------------------------------------------
//-------------------------------------------------------------------------------------
	function index(){
		$this->load->view('admin/index',$this->data);
	}


//--------------------------------------JUDUL------------------------------------------
//-------------------------------------------------------------------------------------
	function judul(){
		
        $this->load->view('admin/judul', $this->data);
	}

	function judul_update(){

		$this->form_validation->set_rules('title','Title','required');

		if ($this->form_validation->run() == FALSE){
              $this->load->view('admin/judul',$this->data);
        }
        else{

        	$datajudul['title'] = set_value('title');
        	$datajudul['city'] = set_value('city'); 
        	$datajudul['logo'] = set_value('logo'); 
        	$datajudul['tagline'] = set_value('tagline');
        	$datajudul['tahun_pelajaran'] = set_value('tahun_pelajaran');

		    $this->home_title_model->update($datajudul);
		    $this->session->set_flashdata('message','Judul telah diperbarui...');
		    redirect('admin/dashboard/judul');
		}
	}


//-------------------------------------TENTANG-----------------------------------------
//-------------------------------------------------------------------------------------

	function tentang(){		
        $this->load->view('admin/visi_misi',$this->data);


	}

	function tentang_edit($id){
		$rules =    [
            [
                'field' => 'misi',
                'label' => 'Misi',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($rules);
        $tentang = $this->visi_misi_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/tentang_edit',['username' => $this->data['username'],'tentang'=>$tentang]);
        }
        else{
	        $datatentang['visi']   = set_value('visi');
	        $datatentang['misi']   = set_value('misi');
	        

	        $this->visi_misi_model->updateVismis($id,$datatentang);
	        $this->session->set_flashdata('message','Data telah diperbarui...');
	       	redirect('admin/dashboard/tentang');
        }
	}
	function tentang_upload(){
		$rules =    [
            
            [
                'field' => 'misi',
                'label' => 'misi',
                'rules' => 'required'
            ]
            
        ];

        $this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/tentang_upload', $this->data);
        }
        else{
        	

	        $datatentang['visi']   = set_value('visi');
	        $datatentang['misi']   = set_value('misi');

	        $this->visi_misi_model->create($datatentang);
	        $this->session->set_flashdata('message','Visi Misi Telah dibuat....');
	       	redirect('admin/dashboard/tentang');
        }
	}

	function tentang_hapus($id){
		$this->visi_misi_model->delete($id);
        $this->session->set_flashdata('message','Data telah dihapus..');
        redirect('admin/dashboard/tentang');
	}

//-------------------------------------KRITERIA PROGRAM-----------------------------------------
//-----------------------------------------------------------------------------------
	function program(){
		
        $this->load->view('admin/program', $this->data);
	}

	function program_edit($id){
		$rules =    [
            [
                'field' => 'program',
                'label' => 'Program Pendidikan',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($rules);
        $editProgram = $this->kriteria_program_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/program_edit',['username' => $this->data['username'],'editProgram'=>$editProgram]);
        }
        else{
	        $dataprogram['program']   = set_value('program');
	        

	        $this->kriteria_program_model->updateProgram($id,$dataprogram);
	        $this->session->set_flashdata('message','Data telah diperbarui...');
	       	redirect('admin/dashboard/program');
        }
	}
	function program_upload(){
		$rules =    [
            [
                'field' => 'program',
                'label' => 'Program Pendidikan',
                'rules' => 'required'
            ],
            
        ];

        $this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/program_upload', $this->data);
        }
        else{
        	

	        $dataprogram['program']   = set_value('program');

	        $this->kriteria_program_model->create($dataprogram);
	        $this->session->set_flashdata('message','Data Telah dibuat....');
	       	redirect('admin/dashboard/program');
        }
	}

	function program_hapus($id){
		$this->kriteria_program_model->delete($id);
        $this->session->set_flashdata('message','Data telah dihapus..');
        redirect('admin/dashboard/program');
	}

//-------------------------------------KRITERIA DAFTAR-----------------------------------------
//-----------------------------------------------------------------------------------
	function daftar(){
		
        $this->load->view('admin/syarat', $this->data);
	}

	
	function daftar_edit($id){
		$rules =    [
            [
                'field' => 'daftar',
                'label' => 'Syarat Pendaftaran',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($rules);
        $editDaftar = $this->kriteria_daftar_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/daftar_edit',['username' => $this->data['username'],'editDaftar'=>$editDaftar]);
        }
        else{
	        $datadaftar['daftar']   = set_value('daftar');
	        

	        $this->kriteria_daftar_model->updateDaftar($id,$datadaftar);
	        $this->session->set_flashdata('message','Data telah diperbarui...');
	       	redirect('admin/dashboard/daftar');
        }
	}
	function daftar_upload(){
		$rules =    [
            [
                'field' => 'daftar',
                'label' => 'Syarat Pendaftaran',
                'rules' => 'required'
            ],
            
        ];

        $this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/daftar_upload', $this->data);
        }
        else{
        	

	        $datadaftar['daftar']   = set_value('daftar');

	        $this->kriteria_daftar_model->create($datadaftar);
	        $this->session->set_flashdata('message','Syarat Pendaftaran Telah dibuat....');
	       	redirect('admin/dashboard/daftar');
        }
	}

	function daftar_hapus($id){
		$this->kriteria_daftar_model->delete($id);
        $this->session->set_flashdata('message','Data telah dihapus..');
        redirect('admin/dashboard/daftar');
	}

//------------------------------------SEJARAH----------------------------------------
//-----------------------------------------------------------------------------------
	function sejarah(){
		
        $this->load->view('admin/sejarah', $this->data);
	}

	function sejarah_update(){

		$this->form_validation->set_rules('sejarah','Sejarah','required');

		if ($this->form_validation->run() == FALSE){
              $this->load->view('admin/sejarah',$this->data);
        }
        else{

        	$datasejarah['konten'] = set_value('sejarah');
       

		    $this->sejarah_model->updateSejarah($datasejarah);
		    $this->session->set_flashdata('message','Data telah diperbarui...');
		    redirect('admin/dashboard/sejarah');
		}
	}

//-------------------------------------KRITERIA TARGET-----------------------------------------
//-----------------------------------------------------------------------------------
	function target(){
		
        $this->load->view('admin/target', $this->data);
	}

	function target_edit($id){
		$rules =    [
            [
                'field' => 'target',
                'label' => 'Target Kompetensi',
                'rules' => 'required'
            ],
        ];

        $this->form_validation->set_rules($rules);
        $editTarget = $this->kriteria_target_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/target_edit',['username' => $this->data['username'],'editTarget'=>$editTarget]);
        }
        else{
	        $datatarget['target']   = set_value('target');
	        

	        $this->kriteria_target_model->updateTarget($id,$datatarget);
	        $this->session->set_flashdata('message','Data telah diperbarui...');
	       	redirect('admin/dashboard/target');
        }
	}
	function target_upload(){
		$rules =    [
            [
                'field' => 'target',
                'label' => 'Target Kompetensi',
                'rules' => 'required'
            ],
            
        ];

        $this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/target_upload', $this->data);
        }
        else{
        	

	        $datatarget['target']   = set_value('target');

	        $this->kriteria_target_model->create($datatarget);
	        $this->session->set_flashdata('message','Data Telah dibuat....');
	       	redirect('admin/dashboard/target');
        }
	}

	function target_hapus($id){
		$this->kriteria_target_model->delete($id);
        $this->session->set_flashdata('message','Data telah dihapus..');
        redirect('admin/dashboard/target');
	}

//-------------------------------------GALLERY-----------------------------------------
//-------------------------------------------------------------------------------------

	function gallery(){
		
        $this->load->view('admin/gallery', $this->data);
	}

	function gallery_upload(){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
       		]
        ];

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/gallery_upload', $this->data);
        }
        else{
	        /* Start Uploading File */
	        $config =   [
	            'upload_path'   => './uploads/',
	            'allowed_types' => 'gif|jpg|png',
	            'max_size'      => 5000,
	            'max_width'     => 2024,
	            'max_height'    => 868
	        ];

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload()){
	            //$error = array('error' => $this->upload->display_errors());
	        	$this->session->set_flashdata('message','Maaf, Foto yang Anda upload terlalu besar.');
				redirect('admin/dashboard/gallery_upload','refresh');
	            //$this->load->view('admin/gallery_upload', $error);
	        }
	        else{
	            $file = $this->upload->data();

	            $now = time();
	            $tgl = unix_to_human($now, TRUE, 'us');
	            $str1 = str_replace(' ' , '',  $file['file_name'] .  set_value('caption'));
	            $toid = str_replace('.','',$str1 );
	            //print_r($file);
	            $data = [
	                'id_images'     => $toid ,
	                'file'          => 'uploads/' . $file['file_name'],
	                'title'         => set_value('caption'),
	                'date'          => $tgl,
	                'description'   => set_value('description'),
	                'status'        => set_value('radioOption')
	            ];
	            $this->gallery_model->create($data);
	            $this->session->set_flashdata('message','Foto berhasil diupload..');
	            redirect('admin/dashboard/gallery');                                  
	            }        
        }

	}

	function gallery_edit($id){
		$rules =    [
            [
                'field' => 'caption',
                'label' => 'Caption',
                'rules' => 'required'
            ],
            [
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $image = $this->gallery_model->getById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/gallery_edit',['username' => $this->data['username'],'image'=>$image]);
        }
        else{
	        $datagallery['title']   = set_value('caption');
	        $datagallery['description']   = set_value('description');
	        $datagallery['status']   = set_value('radioOption');

	        $this->gallery_model->update($id,$datagallery);
	        $this->session->set_flashdata('message','Foto telah diperbarui...');
	       	redirect('admin/dashboard/gallery');
        }
	}

	function gallery_hapus($id){
		$this->gallery_model->delete($id);
        $this->session->set_flashdata('message','Foto telah dihapus..');
        redirect('admin/dashboard/gallery');
	}

//-------------------------------------BERITA------------------------------------------
//-------------------------------------------------------------------------------------

	function berita(){
		//$this->load->view('admin/berita', $this->data);

		$this->form_validation->set_rules('namakategori','Namakategori','required');


        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita',$this->data);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->postingan_model->addKategori($datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah dibuat.....');
        	redirect('admin/dashboard/berita');
        }

	}

	function berita_edit_kategori($id){
		$this->form_validation->set_rules('namakategori','Namakategori','required');
		$hasil = $this->postingan_model->getKategoriById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita_edit_kategori',['username' => $this->data['username'],'kategoribyid' => $hasil, 
            	'kontak' => $this->data['kontak'],'daftarkategori' => $this->data['daftarkategori'] ,'semuaberita' => $this->data['semuaberita']
            	]);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->postingan_model->updateKategory($id,$datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah diedit.....');
        	redirect('admin/dashboard/berita');
        }
	}

	function berita_delete_kategori($id){
		$this->postingan_model->deleteKategori($id);
        $this->session->set_flashdata('message','Kategori baru telah dihapus.....');
        redirect('admin/dashboard/berita');
	}

	function berita_delete_artikel($id){
		$this->postingan_model->deleteArtikel($id);
        $this->session->set_flashdata('message','Artikel baru telah dihapus.....');
        redirect('admin/dashboard/berita');
	}

	function berita_status_artikel($id){
		$dat = $this->postingan_model->getArtikelById($id);
		$row = $dat->row();

		$stts;
		
		if ($row->status == 'hidden'){
			$new['status'] = 'show';
			$this->postingan_model->updateArtikel($id,$new);
			$stts = 'ditayangkan';
		}


		if ($row->status == 'show'){
			$new['status'] = 'hidden';
			$this->postingan_model->updateArtikel($id,$new);
			$stts = 'disembunyikan';
		}

		
		
		$this->session->set_flashdata('message','Pesan berhasil '.$stts.'....');
		redirect('admin/dashboard/berita','resresh');
	}

	function berita_baru(){

        $this->form_validation->set_rules('title','Title','required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/berita_baru',$this->data);
        }
        else{
        	$now = time();
	        $tgl = unix_to_human($now, TRUE, 'us');

	        $dataartikel['judul']   = set_value('title');
	        
	        
	        $dataartikel['isi']   = set_value('isi');
	        $dataartikel['tgl_posting']   = $tgl;
	        $dataartikel['status']   = set_value('radioOption');

	        $datakategori['id_artikel'] = $this->postingan_model->setArtikel($dataartikel);

	        $nokategori = $this->data['daftarkategori']->num_rows();
	        
	        if ($nokategori > 0) {
	        	$xx = 0;
	        	while ($xx  < $nokategori) {
	        		$datakategori['id_kategory']   = set_value('kategori'.$xx);
	        		if($datakategori['id_kategory'] > 0){
	        			$this->postingan_model->setPostingan($datakategori);
	        		}
	       			$xx++;
	        	}
	        }else{
	        	
	        }
	        
	        
	        $this->session->set_flashdata('message','Berita telah dibuat.....');
	       	redirect('admin/dashboard/berita_baru');
        }
	}
//-------------------------------------AKADEMIX----------------------------------------
//-------------------------------------------------------------------------------------
	function akademik(){
		$this->form_validation->set_rules('namakategori','Namakategori','required');


        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/akademik',$this->data);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->akademik_model->setKategoriAkademik($datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah dibuat.....');
        	redirect('admin/dashboard/akademik');
        }

	}

	function akademik_baru(){

		$rules = [
            [
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
            ],
            [
                'field' => 'opsikategori',
                'label' => 'Opsikategori',
                'rules' => 'required'
       		]
        ];
		$this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/akademik_baru',$this->data);
        }
        else{
        	$now = time();
	        $tgl = unix_to_human($now, TRUE, 'us');

	        $dataakademik['judul']   = set_value('title');
	        
	        
	        $dataakademik['isi']   = set_value('isi');
	        $dataakademik['tgl_posting']   = $tgl;
	        $dataakademik['kategori'] = set_value('opsikategori');
	        $dataakademik['status']   = set_value('radioOption');

	        $this->akademik_model->setAkademik($dataakademik);
	        
	        $this->session->set_flashdata('message','Berita telah dibuat.....');
	       	redirect('admin/dashboard/akademik_baru');
	    }
	}


	function akademik_edit($id){
		$hasil = $this->akademik_model->getKategoriAkademikById($id)->row();
		$akademikbyid = $this->akademik_model->getAkademikById($id)->row();



		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/akademik_edit', ['username' => $this->data['username'],'kategoribyid' => $hasil
				,'allkategoriakademik' => $this->data['allkategoriakademik'] ,'akademikbyid' => $akademikbyid
	            	]);
		}else{
			$dataakademik['judul']   = set_value('title');
			$dataakademik['isi']   = set_value('isi');
			$dataakademik['status']   = set_value('radioOption');

			$this->akademik_model->updateAkademik($id,$dataakademik);

			$this->session->set_flashdata('message','Artikel telah diedit.....');
	       	redirect('admin/dashboard/akademik');
		}
	}

	function akademik_status($id){

		$dat = $this->akademik_model->getAkademikById($id);
		$row = $dat->row();

		$stts;
		
		if ($row->status == 'hidden'){
			$new['status'] = 'show';
			$this->akademik_model->updateAkademik($id,$new);
			$stts = 'ditayangkan';
		}


		if ($row->status == 'show'){
			$new['status'] = 'hidden';
			$this->akademik_model->updateAkademik($id,$new);
			$stts = 'disembunyikan';
		}

		
		
		$this->session->set_flashdata('message','Pesan berhasil '.$stts.'....');
		redirect('admin/dashboard/akademik','resresh');
	}

	function akademik_delete($id){
		$this->akademik_model->deleteAkademik($id);
		$this->session->set_flashdata('message','Berita telah dihapus.....');
	    redirect('admin/dashboard/akademik');
	}

	//-----------------------------------
	function akademik_edit_kategori($id){
		$this->form_validation->set_rules('namakategori','Namakategori','required');
		$hasil = $this->akademik_model->getKategoriAkademikById($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/akademik_edit_kategori',['username' => $this->data['username'],'kategoribyid' => $hasil, 
            	'allkategoriakademik' => $this->data['allkategoriakademik'] ,'allakademik' => $this->data['allakademik']
            	]);
        }else{
        	$datakategori['kategori']   = set_value('namakategori');
        		$this->akademik_model->updateKategoriAkademik($id,$datakategori);
        		$this->session->set_flashdata('message','Kategori baru telah diedit.....');
        	redirect('admin/dashboard/akademik');
        }
	}

	function akademik_delete_kategori($kategori,$id){

		$this->akademik_model->deleteAllArtikelByKategori($kategori);


		$this->akademik_model->deleteKategoriAkademik($id);
        $this->session->set_flashdata('message','Kategori baru telah dihapus.....');
        redirect('admin/dashboard/akademik');
	}




//-------------------------------------STAFF-------------------------------------------
//-------------------------------------------------------------------------------------
	function staff(){
		$this->load->view('admin/staff', $this->data);
	}

	function staff_upload(){
		$rules =    [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
       		]
        ];

        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/staff_upload', $this->data);
        }
        else{
	        /* Start Uploading File */
	        $config =   [
	            'upload_path'   => './foto/',
	            'allowed_types' => 'gif|jpg|png',
	            'max_size'      => 2000,
	            'max_width'     => 2024,
	            'max_height'    => 868
	        ];

	        $this->load->library('upload', $config);
	        if ( ! $this->upload->do_upload()){
	            //$error = array('error' => $this->upload->display_errors());
	            //$this->session->set_flashdata('error',$error['error']);
	            $this->session->set_flashdata('message','Maaf, Foto staff/guru yang Anda upload terlalu besar.');
				redirect('admin/dashboard/staff_upload','refresh');
	           //$this->load->view('admin/staff_upload', $error);
	        }
	        else{
	            $file = $this->upload->data();

	            //$now = time();
	            //$tgl = unix_to_human($now, TRUE, 'us');
	            $str1 = str_replace(' ' , '',  $file['file_name'] .  set_value('nama'));
	            $toidGuru = str_replace('.','',$str1 );
	            //print_r($file);
	            $data = [
	                'id_guru'     => $toidGuru ,
	                'foto'          => 'foto/' . $file['file_name'],
	                'nama'         => set_value('nama'),
	                //'date'          => $tgl,
	                'jabatan'   => set_value('jabatan'),
	                //'status'        => set_value('radioOption')
	            ];
	            $this->staff_model->createGuru($data);
	            $this->session->set_flashdata('message','Staff/Guru berhasil diupload..');
	            redirect('admin/dashboard/staff');                                  
	            }        
        }

	}

	function staff_edit($id){
		$rules =    [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'jabatan',
                'label' => 'Jabatan',
                'rules' => 'required'
            ]
        ];

        $this->form_validation->set_rules($rules);
        $staff = $this->staff_model->getByIdGuru($id)->row();

        if ($this->form_validation->run() == FALSE){
            $this->load->view('admin/staff_edit',['username' => $this->data['username'],'image'=>$staff]);
        }
        else{
	        $datastaff['nama']   = set_value('nama');
	        $datastaff['jabatan']   = set_value('jabatan');
	        //$datagallery['status']   = set_value('radioOption');

	        $this->staff_model->updateGuru($id,$datastaff);
	        $this->session->set_flashdata('message','Data guru telah diperbarui...');
	       	redirect('admin/dashboard/staff');
        }
	}

	function staff_hapus($id){
		$this->staff_model->deleteGuru($id);
        $this->session->set_flashdata('message','Foto telah dihapus..');
        redirect('admin/dashboard/staff');
	}

//-------------------------------------KONTAK------------------------------------------
//-------------------------------------------------------------------------------------
	function kontak_edit($id){
		
		$dat = $this->kontak_model->getById($id);
		$row = $dat->row();

		$stts;
		
		if ($row->status_tayang == 'hidden'){
			$new['status_tayang'] = 'show';
			$this->kontak_model->setStatus($id,$new);
			$stts = 'ditayangkan';
		}


		if ($row->status_tayang == 'show'){
			$new['status_tayang'] = 'hidden';
			$this->kontak_model->setStatus($id,$new);
			$stts = 'disembunyikan';
		}

		
		
		$this->session->set_flashdata('message','Pesan berhasil '.$stts.'....');
		redirect('admin/dashboard/','resresh');
	}

	function kontak_baca($id){
		$result = $this->kontak_model->setbaca($id);
		$data= $result->row();
		$this->load->view('admin/kontakbaca',['kontakdibaca' => $data,'kontak' => $this->data['kontak'],'kontakbaca' =>$this->data['kontakbaca'] , 'username' => $this->data['username']]);
	}

	function kontak_hapus($id){
		$this->kontak_model->delete($id);
		$this->session->set_flashdata('message','Pesan berhasil dihapus....');
		redirect('admin/dashboard/', 'refresh');
	}

//-------------------------------------LOGOUT------------------------------------------
//-------------------------------------------------------------------------------------
	function logout(){
   		$this->session->unset_userdata('logged_in');
   		session_destroy();
   		redirect('admin/login', 'refresh');
   }

//-------------------------------------PENDAFTARAN--------------------------------------------
//--------------------------------------------------------------------------------------
   function pendaftaran(){
   		$this->load->view('admin/pendaftar', $this->data);
   
    }

//-------------------------------------PRINT REKAPAN--------------------------------------------
//--------------------------------------------------------------------------------------
    function cetak(){
        ob_start();
        $data['siswa'] = $this->print_model->view();
        $this->load->view('admin/print_rekap', $this->data);
        $html = ob_get_contents();
        ob_end_clean();
         
        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('P',array('330','215'),'en');
        $pdf->WriteHTML($html);
        $pdf->Output('rekap_data.pdf', 'D');
    }
    
    function cetak_siswa($id)
     {
     	ob_start();
     	
     	$cetak = $this->print_model->getByIdSiswa($id)->row();
     	$this->load->view('admin/print_siswa', ['cetak'=>$cetak]);
     	$htmlprint = ob_get_contents();
     	ob_end_clean();

     	require_once('./assets/html2pdf/html2pdf.class.php');
     	$hasil = new HTML2PDF('P',array('330','215'),'en');
     	$hasil->WriteHTML($htmlprint);
     	$hasil->Output('data_siswa.pdf', 'D');
     } 

     function reset()
     {
     	$this->print_model->reset();
     	$this->session->set_flashdata('message','Data semua sudah direset');
        redirect('admin/dashboard/pendaftaran');
     }

}
 ?>