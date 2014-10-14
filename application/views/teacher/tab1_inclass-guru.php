<!--TAB MATERI-->
<div class="tab-pane active" id="tab_1">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">File</h3>
                    <div class="box-tools">
                        <a style="margin-left:20px;" href=""><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#upload">Upload File</button></a>
                    </div>
                    </div><!-- /.box-header -->
                    
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Teacher</th>
                                    <th>Date upload</th>
                                    <th>Description</th>
                                </tr>
                                <?php
                                $i=1;
                                foreach ($view_list_materi as $key):?>
                                
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $key['title']; ?></td>
                                    <td><?php echo $key['nama_lengkap']; ?></td>
                                    <td><?php echo $key['date_upload']; ?></td>
                                    <td><?php echo $key['description']; ?></td>
                                    <td><a href="<?php echo base_url('file/teacher/'.$key['id_guru'].'/materi/'.$key['file_name']);?>">
                                        <button class="btn btn-success btn-sm">Download</button></a>
                                        <a href="<?php echo site_url('teacher/teacher/delete_file/'.$key['id_fm']); ?>" onclick="return confirm('Are you sure')"><button class="btn btn-danger btn-sm">Delete</button></a>
                                        
                                    </td>
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
                        <!-- MAILBOX END -->
                        <!-- COMPOSE MESSAGE MODAL -->
                        <div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-book"></i> Upload File</h4>
                                    </div>
                                    <form action="<?php echo site_url('teacher/teacher/') ?>/upload_file" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Title:</span>
                                                    <input name="judul_materi" type="text" class="form-control" placeholder="Book Title">
                                                </div>
                                                <input type="hidden" name="id_mapel" value="<?php echo $this->uri->segment(4); ?>">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="deskripsi_materi" id="" class="form-control" placeholder="Description" style="height: 120px;"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <div class="btn btn-success btn-file">
                                                    <i class="fa fa-paperclip"></i> Attachment
                                                    <input type="file" name="file_name"/>
                                                </div>
                                                <p class="help-block">Max. 32MB</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer clearfix">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                                            <button type="submit" class="btn btn-primary pull-left">Upload</button>
                                        </div>
                                    </form>
                                    </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->