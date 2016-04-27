<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$username?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    
                        <li>
                            <a href="<?php echo base_url() ?>index.php/admin/dashboard/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url() ?>index.php/admin/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/admin/dashboard/akademik"><i class="fa fa-fw fa-file"></i> Berita / Artikel</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/admin/dashboard/staff"><i class="fa fa-fw fa-file"></i> Staff / Guru</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#daftar"><i class="fa fa-fw fa-wrench"></i> Pendaftaran<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="daftar" class="collapse">
    
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/daftar">Edit Syarat Pendaftaran</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/program">Edit Program Pendidikan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/target">Edit Target Kompetensi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/pendaftaran">Cek Pendaftar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>index.php/admin/dashboard/gallery"><i class="fa fa-fw fa-table"></i> Gallery</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#tentang"><i class="fa fa-fw fa-wrench"></i> Tentang <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="tentang" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/tentang">Edit Visi dan Misi</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/sejarah">Edit Sejarah</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#setting"><i class="fa fa-fw fa-wrench"></i> Setting <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="setting" class="collapse">
                            <li>
                                <a href="<?php echo base_url() ?>index.php/admin/dashboard/judul">Edit Nama Sekolah</a>
                            </li>
                            
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>