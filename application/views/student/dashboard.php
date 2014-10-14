<aside id="forDash" class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Welcome to Escuela
        <small>Escuela make your school better</small>
        </h1>
    </section>
    <?php 
if($student['nama_lengkap']==null){
    $a = site_url('student/student/profile');
    echo <<<END
        <div class="alert alert-info alert-dismissable">
        <i class="fa fa-info"></i>
        Thank you for confirm your account.
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        </div>
END;
        echo <<<END
        <div class="alert alert-danger alert-dismissable">
        <i class="fa fa-ban"></i>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
         Please complete your profile to this <a href="$a" >link</a>
        </div>
END;
        }
     ?>
    <!-- Main content -->
    <section class="content">
        <h4 class="page-header">
        Escuela Home<!--
        <small>Information to tell you about your activity</small> -->
        </h4>
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>
                        Profile
                        </h3>
                        <p>
                        Your Name Here
                        </p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person"></i>
                    </div>
                    <a href="profile.php" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
                </div><!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>
                            53<sup style="font-size: 20px">%</sup>
                            </h3>
                            <p>
                            Material Uploaded
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                        More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>
                                Message
                                </h3>
                                <p>
                                You Have 99 Message
                                </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-chatboxes"></i>
                            </div>
                            <a href="message.php" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                            </a>
                        </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                    Assignment
                                    </h3>
                                    <p>
                                    You Have 55 Assignment
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-compose"></i>
                                </div>
                                <a href="assignment.php" class="small-box-footer">
                                More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            </div><!-- ./col -->
                            </div><!-- /.row -->
                                                
                                                </section><!-- /.content -->
                                                </aside><!-- /.right-side -->