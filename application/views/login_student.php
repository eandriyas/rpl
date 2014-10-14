<p><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
        <title>My First Bootstrap project</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/bootstrap/css/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/public.css'); ?>">
        <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.js'); ?>"></script>

    </head>

    <body>
        <div class="row">
            <div class="container">
                <nav>
                    <div class="row">
                     <div class="col-md-4 col-md-offset-9">
                        <p>contact me : Andriyas efendi</p>
                    </div>
                </div>
            </nav>

            <header>
                <div class="row">
                    <div class="header col-md-2">
                        AESP
                    </div>
                    <div class="header col-md-10">
                        <ul class="menu">
                            <li><a href="#" >About</a></li>
                            <li><a href="#" >Course</a></li>
                            <li><a data-toggle="modal" data-target="#register" href="#" title="" >Register</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="">
                                    Login <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a data-toggle="modal" data-target="#login_student" href="#" title="">Student</a></li>
                                    <li><a data-toggle="modal" data-target="#login_teacher" href="#" title="">Teacher</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>

                </div>

            </header><!-- /header -->

        </div>

    </div>
    <!-- Start modal -->
    <!-- Modal login student -->
    <div class="modal fade" id="login_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Login as Student</h4>
        </div>
        <div class="modal-body">
            <!-- modal body-->
            <form class="form-horizontal" role="form" action="<?php echo site_url('student/login_student'); ?>" method="post" >
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
              </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
          </label>
      </div>
  </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" >Sign in</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Modal login teacher -->
<div class="modal fade" id="login_teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login as teacher</h4>
    </div>
    <div class="modal-body">
       <!-- modal body-->
       <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
      </label>
  </div>
</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- Modal register -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Login as teacher</h4>
    </div>
    <div class="modal-body">
       <!-- modal body-->
       <form class="form-horizontal" role="form">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Nama">
          </div>
      </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
      </label>
  </div>
</div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Register</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
<!-- end Modal -->
<section class="warna">

</section>
<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html></p>