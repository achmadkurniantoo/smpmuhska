<page backtop="15mm" backbottom="10mm" backleft="15mm" backright="10mm" style="font-size: 12pt">
</page>
<style type="text/css">
	table, td, th{
		 border: 1px solid black;
		}
	table{
		table-layout: fixed;
		border-collapse: collapse;
	}

	th{
		height: 30px;
		width: 14%;
		text-align: center;
		background-color: green;
	}
	td{
		height:20px;
		
	
		
		
		
		
	}

</style>


<img src="print/logo.jpg" width="120" height="120">
<img src="print/form.png" width="530" height="120">
<hr> 
<h4 style="text-align:center">Rekapan Data Calon Siswa SMP Muhammadiyah 10 Surakarta</h4> 
<table>
	<tr>
    	<th>No Pendaftaran</th>
    	<th>Nama Lengkap</th>
    	<th>Alamat</th>
    	<th>NISN</th>
    	<th>No STL</th>
    	<th>Nama Ayah</th>
    	<th>Nama Ibu</th>
	</tr>

	<?php
                $kode = "OL";              
                foreach ($calon_siswa->result() as $siswa)  
         {  ?>
                                    <tr>
                                    <td><?=$kode.$siswa->no_pendaftaran?></td>
                                    <td><?php echo wordwrap($siswa->nama_lengkap,10,"<br>\n",TRUE);?></td>
                                    <td><?php echo wordwrap($siswa->alamat,10,"<br>\n",TRUE);?></td>
                                    <td><?=$siswa->nisn?></td>
                                    <td><?=$siswa->stl?></td>
                                    <td><?php echo wordwrap($siswa->nama_ayah,10,"<br>\n",TRUE);?></td>
                                    <td><?php echo wordwrap($siswa->nama_ibu,10,"<br>\n",TRUE);?></td>
                                    </tr> <?php }  
         ?> 
</table>

