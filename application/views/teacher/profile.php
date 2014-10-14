<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Profile
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3" style="text-align:center;">
                <img src="<?php echo base_url().$thumb['image_thumb']; ?>" class="img-circle" alt="User Image"></br>
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
                                Name : <span class="text-aqua"><?php echo $teacher['nama_lengkap']; ?></span></br>
                                D.O.B : <span class="text-green"><?php echo $teacher['ttl']; ?></span></br>
                                Sex : <span class="text-red"><?php echo $teacher['jenis_kelamin']; ?></span></br>
                                Address : <span class="text-yellow"><?php echo $teacher['alamat']; ?></span></br>
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
                                <?php echo $teacher['no_phone']; ?>
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
                                <?php echo $teacher['email']; ?>
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
                                <?php echo $teacher['deskripsi']; ?>
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
        <!-- PROFILE MODAL -->
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
                                    <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $teacher['nama_lengkap']; ?>" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">D.O.B :</span>
                                    <input name="ttl" type="text" class="form-control datepicker" value="<?php echo $teacher['ttl']; ?>" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon">SEX :</span>
                                    <select name="jenis_kelamin" class="form-control">
                                            <option value="<?php if($teacher['jenis_kelamin']=="female"){                                              echo "female";
                                                } else if($teacher['jenis_kelamin']==null){
                                                    echo "";
                                                } else{
                                                echo "male";}?>">
                                            <?php if($teacher['jenis_kelamin']=="female"){
                                                echo "female";
                                                } else if($teacher['jenis_kelamin']==null){
                                                    echo "";
                                                } else{
                                                echo "male";}?></option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                    <!-- <input name="jenis_kelamin" type="text" class="form-control" value="<?php echo $teacher['jenis_kelamin']; ?>" placeholder="Sex"> -->
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input name="email" type="mail" class="form-control" value="<?php echo $teacher['email']; ?>" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                                    <input name="password" type="password" class="form-control" value="<?php echo $teacher['password']; ?>" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    <input name="no_phone" type="text" class="form-control" value="<?php echo $teacher['no_phone']; ?>" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bidang Mata pelajaran</label>
                                <select name="bidang" class="form-control">
                                <option value="<?php echo $teacher['id_kelas']; ?>"><?php if($teacher['id_kelas']==1){
                                    echo "IPA";
                                    } else if($teacher['id_kelas']==2){
                                        echo "IPS";
                                        } else{
                                            echo "MTK";
                                            } ?></option>
                                 <?php foreach ($kelas as $key): ?>
                                    <option value="<?php echo $key['id_kelas']; ?>"><?php echo $key['nama_kelas']; ?></option>
                                <?php endforeach;  ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <select name="pendidikan" class="form-control">
                                    <option value="1">D3</option>
                                    <option value="2">S1</option>
                                    <option value="3">S2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="alamat" id="email_message" class="form-control" value="<?php echo $teacher['alamat']; ?>" placeholder="Full Address" style="height: 120px;"><?php echo $teacher['alamat']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <textarea name="deskripsi" id="email_message" class="form-control" value="<?php echo $teacher['deskripsi']; ?>" placeholder="About your self" style="height: 120px;"><?php echo $teacher['deskripsi']; ?></textarea>
                            </div>
                            
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
                                    <input type="hidden" name="id_guru" value="<?php echo $teacher['id_guru']; ?>">
                                    <div class="modal-footer clearfix">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                                        <button type="submit" class="btn btn-primary pull-left">Save</button>
                                    </div>
                                </form>
                                </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->