<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Class
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Class</a></li>
                        <li><a href="#tab_2" data-toggle="tab">Mark</a></li>
                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <!-- Small boxes (Stat box) -->
                            <div class="row">
                                    <?php foreach ($mapel as $key) :?>
                                    <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box <?php echo $key['style']; ?>">
                                        <div class="inner">
                                            <h3>
                                            <?php echo $key['nama_mapel']; ?>
                                            </h3>
                                            <p>
                                            <?php
                                            echo "kelas";
                                            //echo $key['deskripsi_mapel']; ?>
                                            </p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-bag"></i>
                                        </div>
                                        <a href="inclass_guru/<?php echo $key['id_mata_pelajaran']; ?>" class="small-box-footer">
                                        go to Class <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                    </div>

                                <?php endforeach; ?><!-- ./col -->
                                    <div clas="col-lg-3">
                                        <a class="btn btn-app" data-toggle="modal" data-target="#createclass">
                                        <i class="fa fa-plus"></i> Add Study
                                        </a>
                                    </div>
                                    </div><!-- /.row -->
                                    </div><!-- /.tab-pane -->
                                    <div class="tab-pane" id="tab_2">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <h3 class="box-title">Responsive Hover Table</h3>
                                                        <div class="box-tools">
                                                            <div class="input-group">
                                                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div><!-- /.box-header -->
                                                        <div class="box-body table-responsive no-padding">
                                                            <table class="table table-hover">
                                                                <tbody><tr>
                                                                    <th>No.</th>
                                                                    <th>Teacher</th>
                                                                    <th>Date</th>
                                                                    <th>Mark</th>
                                                                    <th>Assignment</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>183</td>
                                                                    <td>John Doe</td>
                                                                    <td>11-7-2014</td>
                                                                    <td><span class="label label-success">Approved</span></td>
                                                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                                                </tr>
                                                            </tbody></table>
                                                            </div><!-- /.box-body -->
                                                            </div><!-- /.box -->
                                                        </div>
                                                    </div>
                                                    </div><!-- /.tab-pane -->
                                                    </div><!-- /.tab-content -->
                                                </div>
                                                </div><!-- /.col -->
                                                </div><!-- /.row -->
                                                </section><!-- /.content -->
                                                </aside><!-- /.right-side -->
                                                </div><!-- ./wrapper -->
                                                <!-- COMPOSE MESSAGE MODAL -->
                                                <div class="modal fade" id="createclass" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                <h4 class="modal-title"><i class="fa fa-plus"></i> Create Study</h4>
                                                            </div>
                                                            <form action="create_class" method="post">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                    <input type="hidden" name="id_guru" value="<?php echo $teacher['id_guru']; ?>">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Name:</span>
                                                                            <input name="name" type="text" class="form-control" placeholder="Name of Study">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Class:</span>
                                                                            <select name="kelas" class="form-control">
                                                                                <?php foreach ($kelas as $key): ?>
                                                                                <option value="<?php echo $key['id_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
                                                                                <?php endforeach;  ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon">Style:</span>
                                                                            <select name="style" class="form-control">
                                                                                <option value="bg-maroon">Maroon</option>
                                                                                <option value="bg-aqua">Aqua</option>
                                                                                <option value="bg-green">Green</option>
                                                                                <option value="bg-yellow">Yellow</option>
                                                                                <option value="bg-red">Red</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <textarea name="description" id="email_message" class="form-control" placeholder="Description" style="height: 120px;"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer clearfix">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                                                                    <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-plus"></i> Create Class</button>
                                                                </div>
                                                            </form>
                                                            </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->