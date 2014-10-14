<!--TAB MATERI-->
<div class="tab-pane active" id="tab_1">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Materi</h3>
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
                            <th>Mata Pelajaran</th>
                            <th>Guru</th>
                            <th>Tanggal</th>
                            <th>Judul Materi</th>
                            <th></th>
                        </tr>
                        <?php 
                        $i=1;
                        foreach ($materi as $key):?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $key['title'] ?></td>
                            <td><?php echo $key['nama_lengkap']; ?></td>
                            <td><?php echo $key['date_upload']; ?></td>
                            <td><?php echo $key['description']; ?></td>
                            <td><a href="<?php echo base_url('file/teacher/'.$key['id_guru'].'/materi/'.$key['file_name']); ?>"><button class="btn btn-success btn-sm">Download</button></a></td>
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