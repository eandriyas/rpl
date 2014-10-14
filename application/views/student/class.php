<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Class
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Your Class</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Another Class</a></li>
                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <?php foreach ($kelasmu as $key):?>
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box <?php echo $key['style']; ?>">
                                        <div class="inner">
                                            <h3>
                                            <?php echo $key['nama_mapel']; ?>
                                            </h3>
                                            <p>
                                            <?php echo $key['deskripsi_mapel']; ?>
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <input type="hidden" name="id_mapel" value=" <?php echo $key['id_mata_pelajaran']; ?>">
                                        <a href="in_class_student/<?php echo $key['id_mata_pelajaran']; ?>" class="small-box-footer" value="">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    </div><!-- ./col -->
                                    <?php endforeach; ?>
                                    </div><!-- /.row -->
                                    </div><!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                <?php foreach ($kelas as $key):?>
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box <?php echo $key['style']; ?>">
                                        <div class="inner">
                                            <h3>
                                            <?php echo $key['nama_mapel']; ?>
                                            </h3>
                                            <p>
                                            <?php echo $key['deskripsi_mapel']; ?>
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <input type="hidden" name="id_mapel" value=" <?php echo $key['id_mata_pelajaran']; ?>">
                                        <a href="join_class/<?php echo $key['id_mata_pelajaran']; ?>" class="small-box-footer" value="">
                                        More info <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    </div><!-- ./col -->
                                    <?php endforeach; ?>
                                    </div><!-- /.row -->
                                    </div><!-- /.tab-pane -->
                                </div>
                                </div><!-- /.col -->
                                </div><!-- /.row -->
                                </section><!-- /.content -->
                                </aside><!-- /.right-side -->