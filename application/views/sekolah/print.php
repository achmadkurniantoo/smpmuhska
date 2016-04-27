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
					<?php foreach ($cetak as $siswa): ?>
					<td><b>No. Pendaftaran : <u><?=$kode.$siswa->no_pendaftaran?></u></b></td>
				</tr>
			</table>


			<table>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo wordwrap($siswa->nama_lengkap,40,"<br>\n",TRUE);?></td>
				</tr>

				<tr>
					<td>Tempat & Tanggal Lahir</td>
					<td>:</td>
					<td><?=$siswa->ttgl?></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?=$siswa->jenis_kelamin?></td>
				</tr>


				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><?=$siswa->agama?></td>
				</tr>


				<tr>
					<td>Anak Ke</td>
					<td>:</td>
					<td><?=$siswa->anak?></td>
				</tr>


				<tr>
					<td>Status Dalam Keluarga</td>
					<td>:</td>
					<td><?=$siswa->status?></td>
				</tr>


				<tr>
					<td>Alamat Murid</td>
					<td>:</td>
					<td><?php echo wordwrap($siswa->alamat,60,"<br>\n",TRUE);?></td>
				</tr>

				

				<tr>
					<td>No. Induk Siswa Nasional (NISN)</td>
					<td>:</td>
					<td><?=$siswa->nisn?></td>
					
				</tr>

				

				<tr>
					<td><b>Sekolah Asal :</b></td>
				</tr>

				<tr>
					<td>Nama Sekolah</td>
					<td>:</td>
					<td><?=$siswa->nama_sekolah?></td>
				</tr>

				<tr>
					<td>Alamat Sekolah</td>
					<td>:</td>
					<td><?=$siswa->alamat_sekolah?></td>
				</tr>

				<tr>
					<td>No. Surat Tanda Lulus (STL)</td>
					<td>:</td>
					<td><?=$siswa->stl?></td>
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
					<td><?=$siswa->nama_ayah?></td>
				</tr>

				<tr>
				<td></td>
					<td>No. Telp</td>
					<td>:</td>
					<td><?=$siswa->hp_ayah?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$siswa->agama_ayah?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$siswa->pendidikan_ayah?></td>
				</tr>

				<tr>
				<td></td>
					<td> Pekerjaan</td>
					<td>:</td>
					<td><?=$siswa->pekerjaan_ayah?></td>
				</tr>

				

				<tr>
				<td>B. </td>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?=$siswa->nama_ibu?></td>
				</tr>

				<tr>
				<td></td>
					<td> No. Telp</td>
					<td>:</td>
					<td><?=$siswa->hp_ibu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$siswa->agama_ibu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$siswa->pendidikan_ibu?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?=$siswa->pekerjaan_ibu?></td>
				</tr>

				

				<tr>
				<td>C. </td>
					<td>Nama Wali</td>
					<td>:</td>
					<td><?=$siswa->nama_wali?></td>
				</tr>

				<tr>
				<td></td>
					<td> No. Telp</td>
					<td>:</td>
					<td><?=$siswa->hp_wali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Agama</td>
					<td>:</td>
					<td><?=$siswa->agama_wali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pendidikan</td>
					<td>:</td>
					<td><?=$siswa->pendidikan_wali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Pekerjaan</td>
					<td>:</td>
					<td><?=$siswa->pekerjaan_wali?></td>
				</tr>

				<tr>
				<td></td>
					<td>Penghasilan Orang Tua / Wali</td>
					<td>:</td>
					<td><?=$siswa->penghasilan?></td>
				</tr>

			</table>

			<?php endforeach;?>
			<br> <br>
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
						<?php foreach ($cetak as $siswa): ?>
						<td><?= "("." ".$siswa->nama_lengkap." ".")";?></td>
					<?php endforeach; ?>
					</tr>
				</table>

		
