
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    In Class "<?php echo $isi_kelas['nama_mapel']; ?>"
                    <small><?php echo $isi_kelas['deskripsi_mapel']; ?></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Widgets</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab">Materi</a></li>
                                <li><a href="#tab_3" data-toggle="tab">Siswa</a></li>
                                <li><a href="#tab_4" data-toggle="tab">Tugas</a></li>
                                <li><a href="#tab_5" data-toggle="tab">Discuss</a></li>
                                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                            </ul>
                            <div class="tab-content">
                                <?php include 'tab1_inclass-guru.php'; ?>
                                <?php include 'tab3_inclass.php'; ?>
                                <?php include 'tab4_inclass-guru.php'; ?>
                                <?php include 'tab5_inclass.php'; ?>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
       