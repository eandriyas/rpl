<!-- Right side column. Contains the navbar and content of the page -->
<aside id="forProfile" class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Profile
        <small>Generate your profile easily</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- <h4 class="page-header">
        AdminLTE Small Boxes
        <small>Small boxes are used for viewing statistics. To create a small box use the class <code>.small-box</code> and mix & match using the <code>bg-*</code> classes.</small>
        </h4> -->
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-3" style="text-align:center;">
         
                
                <img src="<?php echo base_url().$thumb['image_thumb']; ?>" class="img-circle" alt="User Image"><br>
                <button style="margin-top:10px" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-profile">Edit Profile</button>
                <button style="margin-top:10px" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-foto">Change Photo</button>
            </div>
            
            <div class="col-md-6">
                <!-- The time line -->
                <ul class="timeline">
                    <!-- timeline time label -->
                    <li>
                        <i class="fa fa-user bg-blue"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header text-blue">
                            <strong>My Profile</strong>
                            </h3>
                            <div class="timeline-body">
                                Name : <span class="text-aqua"><?php echo $student['nama_lengkap']; ?></span></br>
                                D.O.B : <span class="text-green"><?php echo $student['ttl']; ?></span></br>
                                Sex : <span class="text-red"><?php echo $student['jenis_kelamin']; ?></span></br>
                                Address : <span class="text-yellow"><?php echo $student['alamat']; ?></span></br>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <li>
                        <i class="fa fa-phone bg-yellow"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header text-yellow">
                            <strong>Phone</strong>
                            </h3>
                            <div class="timeline-body">
                                +<?php echo $student['no_phone']; ?>
                            </div>
                        </div>
                    </li>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <li>
                        <i class="fa fa-envelope bg-red"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header text-red">
                            <strong>Mail</strong>
                            </h3>
                            <div class="timeline-body">
                                <?php echo $student['email']; ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-aqua"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header text-aqua">
                            <strong>Description</strong>
                            </h3>
                            <div class="timeline-body">
                                <?php echo $student['deskripsi']; ?>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-envelope bg-green"></i>
                        <div class="timeline-item">
                            <h3 class="timeline-header text-green">
                            <strong>Social</strong>
                            </h3>
                            <div class="timeline-body">
                                <button class="btn bg-blue btn-social"><i class="fa fa-facebook"></i> <span>RPL.AMIKOM</span></button>
                                <button class="btn bg-red btn-social"><i class="fa fa-google-plus"></i> <span>RPL Amikom</span></button>
                                <button class="btn bg-aqua btn-social"><i class="fa fa-twitter"></i> <span>RPL.Amikom</span></button>
                            </div>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-clock-o"></i>
                    </li>
                </ul>
            </div>
        </div>
        </section><!-- /.content -->
        </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        
        <!-- Edit profile MODAL -->
        <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Edit Profile</h4>
                    </div>
                    <form action="update_profile" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">Name :</span>
                                    <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $student['nama_lengkap']; ?>" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">D.O.B :</span>
                                    <input name="ttl" type="text" class="form-control datepicker" value="<?php echo $student['ttl']; ?>" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">SEX :</span>
                                    <input name="jenis_kelamin" type="text" class="form-control" value="<?php echo $student['jenis_kelamin']; ?>" placeholder="Sex">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="mail" class="form-control" value="<?php echo $student['email']; ?>" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                    <input name="password" type="password" class="form-control" value="<?php echo $student['password']; ?>" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input name="no_phone" type="text" class="form-control" value="<?php echo $student['no_phone']; ?>" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your class on Senior High School</label>
                                <select name="kelas" class="form-control">
                                    <option value="1">First Class</option>
                                    <option value="2">Second Class</option>
                                    <option value="3">Third Class</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="email_message" class="form-control" value="<?php echo $student['alamat']; ?>" placeholder="Full Address" style="height: 120px;"><?php echo $student['alamat']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="email_message" class="form-control" value="<?php echo $student['deskripsi']; ?>" placeholder="Description about you" style="height: 120px;"><?php echo $student['alamat']; ?></textarea>
                            </div><!-- 
                            <div class="form-group">
                                <div class="btn btn-success btn-file">
                                    <i class="fa fa-paperclip"></i> Attachment
                                    <input type="file" name="gambar"/>
                                </div>
                                <p class="help-block">Max. 32MB</p>
                            </div> -->
                        </div>
                        <div class="modal-footer clearfix">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                            <button type="submit" class="btn btn-primary pull-left">Save</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                    <!-- Edit foto MODAL -->
        <div class="modal fade" id="edit-foto" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Change photo Profile</h4>
                    </div>
                    <form action="update_foto" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <div class="modal-body">
                            <div id="cropContainerModal"></div>

                        </div>
                        <input type="hidden" name="id_student" value="<?php echo $student['id_student']; ?>">
                        <div class="modal-footer clearfix">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                            <button type="submit" class="btn btn-primary pull-left">Save</button>
                        </div>
                    </form>
                    </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->