<!--TAB ANGGOTA-->
<div class="tab-pane" id="tab_3">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Anggota</h3>
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
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No phone</th>
                                <th></th>
                            </tr>
                            <?php
                            $i=1;
                            foreach ($l_student as $key): ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $key['nama_lengkap']; ?></td>
                                <td><?php echo $key['email']; ?></td>
                                <td><?php echo $key['no_phone']; ?></td>
                                <td><a href=""><button class="btn btn-success btn-sm">View Profile</button></a></td>
                            </tr>
                            <?php
                            $i++;
                            endforeach; ?>
                        </tbody></table>
                        </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                    </div><!-- /.tab-pane -->
                    </div><!-- /.tab-content -->