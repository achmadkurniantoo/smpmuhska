<page backtop="15mm" backbottom="5mm" backleft="15mm" backright="10mm" style="font-size: 12pt">
	</page>
<style type="text/css">
	td{
		height:19px;
		
	}
	table, td{
		font-size: 12pt;
	}
	h4{
		margin-left: 400px;
		font-size: 12pt;
	}

</style>


<img src="print/logo.jpg" width="120" height="120">
<img src="print/form.png" width="530" height="120">
<hr> 
<?php
$noPendaftaran 		= $cetak->no_pendaftaran;
$namaLengkap        = $cetak->nama_lengkap;
$ttl    			= $cetak->ttgl;
$jenisKelamin 		= $cetak->jenis_kelamin;
$agama 				= $cetak->agama;
$anak 				= $cetak->anak;
$status 			= $cetak->status;
$alamat 			= $cetak->alamat;
$nisn 				= $cetak->nisn;
$namaSekolah 		= $cetak->nama_sekolah;
$alamatSekolah		= $cetak->alamat_sekolah;
$nstl 				= $cetak->stl;
$namaAyah			= $cetak->nama_ayah;
$namaIbu			= $cetak->nama_ibu;
$namaWali			= $cetak->nama_wali;
$hpIbu				= $cetak->hp_ibu;
$hpAyah 			= $cetak->hp_ayah;
$hpWali				= $cetak->hp_wali;
$agamaAyah			= $cetak->agama_ayah;
$agamaIbu 			= $cetak->agama_ibu;
$agamaWali			= $cetak->agama_wali;
$pendidikanAyah		= $cetak->pendidikan_ayah;
$pendidikanIbu		= $cetak->pendidikan_ibu;
$pendidikanWali		= $cetak->pendidikan_wali;
$pekerjaanAyah		= $cetak->pekerjaan_ayah;
$pekerjaanIbu		= $cetak->pekerjaan_ibu;
$pekerjaanWali		= $cetak->pekerjaan_wali;
$penghasilan 		= $cetak->penghasilan;
$kode				= "OL";

?>
			<table>
				<tr>
					<td><b>Identitas Siswa :</b></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					

					<td><b>No. Pendaftaran : <u><?=$kode.$noPendaftaran?></u></b></td>
				</tr>
				</table>
				<table>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo wordwrap($namaLengkap,40,"<br>\n",TRUE);?></td>
				</tr>

				<tr>
					<td>Tempat & Tanggal Lahir</td>
					<td>:</td>
					<td><?=$ttl?></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?=$jenisKelamin?></td>
				</tr>


				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?=$agama?></td>
				</tr>


				<tr>
					<td>Anak Ke</td>
					<td>:</td>
					<td><?=$anak?></td>
				</tr>


				<tr>
					<td>Status Dalam Keluarga</td>
					<td>:</td>
					<td><?=$status?></td>
				</tr>


				<tr>
					<td>Alamat Murid</td>
					<td>:</td>
					<td><?php echo wordwrap($alamat,60,"<br>\n",TRUE);?></td>
				</tr>

				

				<tr>
					<td>No. Induk Siswa Nasional (NISN)</td>
					<td>:</td>
					<td><?=$nisn?></td>
					
				</tr>

				

				<tr>
					<td><b>Sekolah Asal :</b></td>
				</tr>

				<tr>
					<td>Nama Sekolah</td>
					<td>:</td>
					<td><?=$namaSekolah?></td>
				</tr>

				<tr>
					<td>Alamat Sekolah</td>
					<td>:</td>
					<td><?=$alamatSekolah?></td>
				</tr>

				<tr>
					<td>No. Surat Tanda Lulus (STL)</td>
					<td>:</td>
					<td><?=$nstl?></td>
				</tr>
				<tr>
					<td><b>Identitas Orang Tua/Wali :</b></td>
				</tr>
				</table>

				<table>
				<tr>
					<td>A.</td>
					<td>Nama Ayah</td>
					<td>:</td>
					<td><?=$namaAyah?></td>
				</tr>

				<tr>
				<td></td>
					<td>No. Telp</td>
					<td>:</td>
					<td><?=$hpAyah?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$agamaAyah?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$pendidikanAyah?></td>
				</tr>

				<tr>
				<td></td>
					<td> Pekerjaan</td>
					<td>:</td>
					<td><?=$pekerjaanAyah?></td>
				</tr>

				

				<tr>
				<td>B.</td>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?=$namaIbu?></td>
				</tr>

				<tr>
				<td></td>
					<td> No. Telp</td>
					<td>:</td>
					<td><?=$hpIbu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$agamaIbu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$pendidikanIbu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?=$pekerjaanIbu?></td>
				</tr>

				

				<tr>
				<td>C.</td>
					<td>Nama Wali</td>
					<td>:</td>
					<td><?=$namaWali?></td>
				</tr>
				

				<tr>
				<td></td>
					<td> No. Telp</td>
					<td>:</td>
					<td><?=$hpWali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$agamaWali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$pendidikanWali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?=$pekerjaanWali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Penghasilan Orang Tua / Wali</td>
					<td>:</td>
					<td><?="Rp"." ".$penghasilan." "."/Bulan"?></td>
				</tr>
				</table> <br> <br>

			
			
			
				<img src="print/pas.png" width="100 " height="120">
				<img src="print/nama.png" width="450" height="120">
				<table>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						
						<td><?php echo "("." ".$namaLengkap." ".")";?></td>
					</tr>
				</table>
				
			
			

		
