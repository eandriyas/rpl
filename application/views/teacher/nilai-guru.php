<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<body class="skin-blue">
    <!-- header logo: style can be found in header.less -->
    <?php include 'header.php'; ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php include 'left.php'; ?>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    In Class Sosial
                    <small>Preview page</small>
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
                      <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Tugas</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>No.</th>
                                    <th>Kelas</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal</th>
                                    <th>Tugas</th>
                                    <th>Nilai</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Matematika</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    <td>90</td>
                                    <td></td>
                                </tr>
                            </tbody></table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->
    <?php include 'js.php'; ?>
</body>
</html>




