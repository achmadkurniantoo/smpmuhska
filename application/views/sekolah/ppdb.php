<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMP Muhammadiyah 10</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/ppdb.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->


<style type="text/css">
  #rules{
    color: red;
  }
</style>
</head>

<body>

<!-- Navbar -->


<!-- Header -->
    <div class="container">
      <div class="row" style="border-bottom: 8px double;">
          <div class="col-md-9 col-md-push-3">
            <div class="header-ppdb">
              <h5>FORMULIR PENDAFTARAN</h5><br>
              <h5>SMP MUHAMMADIYAH 10 SURAKARTA</h5><br>
              <h6>Program Sekolah Unggulan</h6><br>
              <h5>TERAKREDITASI "A"</h5><br>
              <p> Alamat : Jl. Srikaya 3 Karangasem Laweyan Surakarta (Utara Lapangan Karangasem)</p><br>
              <p>    Telp : (0271) 738916 </p>
            </div>
          </div>
          <div class="col-md-3 col-md-pull-9">
            <div class="logo-dikdasmen">
              <center>
              <img src="<?php echo base_url()?>assets/img/logo.jpg">
              </center>
            </div>
          </div>
        </div>
    </div>



    <div class="container">
    

      <table class="table">      
        <tr>
          <td width="65%"><b><p>Identitas Murid :</p></b></td>
          <td width="35%" colspan="2"><b><p>No Pendaftaran :</p></b></td>
        </tr>
      </table>
      <?=form_open_multipart('sekolah/kirimData')?>
      <div align="center">
          <?=$this->session->flashdata('message')?>
      </div>
      <table class="table">
        <form class="form-horizontal">
        <div class="form-group">
        <div class="form-ppdb">
        <tr>
          <td width="25%"><label for="namaLengkap">Nama Lengkap</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="namaLengkap" type="text" id="namaLengkap" placeholder="Nama Lengkap"></td>
          
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('namaLengkap'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="ttgl">Tempat & Tanggal Lahir </label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="ttgl" type="text" id="ttgl" placeholder="Tempat & Tanggal Lahir"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('ttgl'); ?></div></td>
        </tr>


        <tr>
          <td width="25%"><label for="jenisKelamin">Jenis Kelamin</label></td>
          <td width="1%"><p> : </p></td>
            <td>
              <label class="radio-inline">
                <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-Laki"><b> Laki-Laki</b></label>
              <label class="radio-inline">
                <input type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan"> <b> Perempuan</b> </label>
            </td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('jenisKelamin'); ?></div></td>
        </tr>

        <tr>
          <td width="25%"><label for="agama">Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="agama" id="agama" placeholder="Agama"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('agama'); ?></div></td>
        </tr>

        <tr>
          <td width="25%"><label for="anakKe">Anak Ke</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="anakKe" id="anak" placeholder="Anak ke"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('anakKe'); ?></div></td>
        </tr>

        <tr>
          <td width="25%"><b><p for="status">Status Dalam Keluarga*</p></b></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control input-md" type="text" name="status" id="status" placeholder="Anak Kandung/Anak Tiri/Anak Angkat/Lainnya..."></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('status'); ?></div></td>
        </tr>

        <tr>
          <td width="25%" style="vertical-align: top;"><b><p>Alamat Murid</p></b></td>
          <td width="1%" style="vertical-align: top;"><p> : </p></td>
          <td width="74%"><textarea class="form-control" name="alamat"  id="alamat" rows="3" placeholder="Alamat Lengkap Murid"></textarea></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('alamat'); ?></div></td>
        </tr>

        <tr>
          <td width="25%"><p><b>No. Induk Siswa Nasional (NISN)</b></p></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control input-md" type="text" name="nisn" id="nisn" placeholder="Nomor Induk Siswa Nasional"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('nisn'); ?></div></td>
        </tr>
        </div>
        </div>
         </table>

      <table class="table">
        
        <div class="form-group">
        <div class="form-ppdb">
          <tr>
            <td><p><b>Sekolah Asal :</p></b></td>
          </tr>
        <tr>
          <td width="25%"><label for="namaSekolah">Nama Sekolah</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="namaSekolah" id="namaSekolah" placeholder="Nama Sekolah"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('namaSekolah'); ?></div></td>
        </tr>
        <tr>
          <td width="25%" style="vertical-align:top;"><label for="alamatSekolah">Alamat Sekolah </label></td>
          <td width="1%" style="vertical-align:top;"><p> : </p></td>
          <td width="74%"><textarea class="form-control" name="alamatSekolah" id="alamatSekolah" rows="3" placeholder="Alamat Lengkap Sekolah"></textarea></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('alamatSekolah'); ?></div></td>
        </tr>

        <tr>
          <td width="25%"><label for="nstl">No. Surat Tanda Lulus (STL)</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="nstl" id="nstl" placeholder="No. Surat Tanda Lulus (STL)"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('nstl'); ?></div></td>
        </tr>
        </div>
        </div>
      
      </table>

      <table class="table">
        
        <div class="form-group">
        <div class="form-ppdb">
          <tr>
            <td><p><b>Identitas Orang Tua/Wali : </p></b></td>
          </tr>

          <!-- Biodata Ayah -->

        <tr>
          <td width="25%"><label for="namaAyah">a. &nbsp; Nama Ayah</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="namaAyah" type="text" id="namaAyah" placeholder="Nama Ayah"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('namaAyah'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="nomorTelponAyah" id="nomorTelponAyah" placeholder="Nomor Telpon"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('nomorTelponAyah'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="agamaAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="agamaAyah" type="text" id="agamaAyah" placeholder="Agama"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('agamaAyah'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pendidikanAyah" type="text" id="pendidikanAyah" placeholder="pendidikan"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('pendidikanAyah'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanAyah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pekerjaanAyah" type="text" id="pekerjaanAyah" placeholder="pekerjaan"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('pekerjaanAyah'); ?></div></td>
        </tr>
        <tr><td> &nbsp; </td></tr>
        <!-- Biodata Ibu -->


        <tr>
          <td width="25%"><label for="namaIbu">b. &nbsp; Nama Ibu</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="namaIbu" type="text" id="namaIbu" placeholder="Nama Ibu"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('namaIbu'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="nomorTelponIbu" type="text" id="nomorTelponIbu" placeholder="Nomor Telpon"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('nomorTelponIbu'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="agamaIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="agamaIbu" type="text" id="agamaIbu" placeholder="Agama"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('agamaIbu'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pendidikanIbu" type="text" id="pendidikanIbu" placeholder="pendidikan"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('pendidikanIbu'); ?></div></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanIbu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pekerjaanIbu" type="text" id="pekerjaanIbu" placeholder="pekerjaan"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('pekerjaanIbu'); ?></div></td>
        </tr>
        <tr><td> &nbsp; </td></tr>
        <!-- Biodata Orang tua wali -->


        <tr>
          <td width="25%"><label for="namaWali">c. &nbsp; Nama Wali</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" type="text" name="namaWali" id="namaWali" placeholder="Nama Wali (Tidak Ada Kasih Tanda ' - ')"></td>
        </tr>
        <tr>
          <td width="25%"><label for="nomorTelponWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No. Telp</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="nomorTelponWali" type="text" id="nomorTelponWali" placeholder="Nomor Telpon (Tidak Ada Kasih Tanda ' - ')"></td>
        </tr>
        <tr>
          <td width="25%"><label for="agamaWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Agama</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="agamaWali" type="text" id="agamaWali" placeholder="Agama (Tidak Ada Kasih Tanda ' - ')"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pendidikanWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pendidikan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pendidikanWali" type="text" id="pendidikanWali" placeholder="pendidikan (Tidak Ada Kasih Tanda ' - ')"></td>
        </tr>
        <tr>
          <td width="25%"><label for="pekerjaanWali">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" name="pekerjaanWali" type="text" id="pekerjaanWali" placeholder="pekerjaan (Tidak Ada Kasih Tanda ' - ')"></td>
        </tr>
        <tr>
          <td width="25%"><label for="penghasilan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Penghasilan Orang Tua/Wali</label></td>
          <td width="1%"><p> : </p></td>
          <td width="74%"><input class="form-control" nama type="text" name="penghasilan" id="penghasilan" placeholder="Penghasilan Orang Tua/Wali(Rp)"></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td><div id="rules"><?php echo form_error('penghasilan'); ?></div></td>
        </tr>
        <tr><td> &nbsp; </td></tr>

        </div>
        </div>
         </table>
        
      
     

    </div>

<!-- End of ppdb form -->
<center>
  <button type="submit" class="btn btn-primary btn-lg" onclick="return(validate());">Kirim</button>
  </form>
  <button type="reset" class="btn btn-default btn-lg">Reset</button>
  <?=anchor('sekolah/pendaftaran','Kembali',['class'=>'btn btn-warning btn-lg'])?>
</center>




    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>
<script type="text/javascript">
function validate()
{
     var r=confirm("Apakah Anda yakin data yang Anda Masukkan benar??")
    if (r==true)
      return true;
    else
      return false;
}
</script>

</body>

</html>
