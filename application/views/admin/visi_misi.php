<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin SMP MUH 10 SKA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php include 'navbar.php';  ?>
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Setting <small>Edit Visi dan Misi Sekolah</small>
                        </h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center> 
                            
                            <h2>Visi</h2>

                             <?php
                foreach ($visimisi->result() as $row)  
         {  ?>
                                    <h4><?=$row->visi?></h4> <?php }  
         ?> 
                                    <h2>Misi</h2> 
                                   <?php foreach ($visimisi->result() as $row)  
         {  ?>
                                    
                                    <h4><?=$row->misi?></h4>
                                    
                                    <?php }  
         ?> 

                            </center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Edit nama sekolah
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- --------------------------------------------- -->

                <div id="container">

                       <div id="body">
                          <div class="table-responsive">  
                          <table class="table table-bordered">
                              <th>No</th>
                              <th>Visi</th>
                              <th>Misi</th>
                              <th>Edit</th>
                              <th>Hapus</th>

                              <?php $no = 1;
                              foreach ($visimisi->result() as $baris) {?>
                              <tr class="warning">
                                  <td class="success"><?=$no?></td>
                                  <td><?=$baris->visi?></td>
                                  <td><?=$baris->misi?></td>
                                  <td><?=anchor('admin/dashboard/tentang_edit/'.$baris->id_visiMisi,'Edit',['class'=>'btn btn-warning'])?></td>
                                  <td><?=anchor('admin/dashboard/tentang_hapus/'.$baris->id_visiMisi,'Hapus',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Apa anda yakin mau menghapusnya?\')'])?></td>
                              </tr>
                               <?php $no++; }?>

                          </table>
                     <?=anchor('admin/dashboard/tentang_upload/','Upload',['class'=>'btn btn-warning', 'role'=>'button'])?>
                       </div>

                        
                              
                        </div> 
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>
