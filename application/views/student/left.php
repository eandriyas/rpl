<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <!-- <img src="<?php echo base_url().$thumb['image_thumb']; ?>" class="img-circle" alt="User Image"> -->
                <div id="#imageLeftCircle"><img src="<?php echo base_url().$thumb['image_thumb']; ?>" class="img-circle" alt="User Image"></div>
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li>
                <a id="menuDash"  href="<?php echo site_url('student/student/dash'); ?>" value="profil">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a id="menuProfile" href="<?php echo site_url('student/student/profile'); ?>">
                <i class="fa fa-user"></i> <span>Profile</span>
                </a>
            </li>
            <li>
                <a id="menuMessage" href="<?php echo site_url('student/student/message'); ?>">
                <i class="fa fa-comments"></i> <span>Message</span>
                <small class="badge pull-right bg-yellow">5</small>
                </a>
            </li>
            <li>
                <a id="menuAssign" href="<?php echo site_url('student/student/assignment'); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>Assignment</span>
                <small class="badge pull-right bg-red">5</small>
                </a>
            </li>
            <li>
                <a id="menuClass" href="<?php echo site_url('student/student/class_student'); ?>" >
                <i class="fa fa-group"></i> <span>Class</span>
                <small class="badge pull-right bg-red">5</small>
                </a>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>