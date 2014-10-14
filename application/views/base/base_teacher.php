<!DOCTYPE html>
<html>
<?php $this->load->view('teacher/head'); ?>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('teacher/header'); ?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php $this->load->view('teacher/left-guru'); ?>
        

            <!-- Right side column. Contains the navbar and content of the page -->
            <?php $this->load->view($template_teacher); ?>
        </div><!-- ./wrapper -->

<?php $this->load->view('teacher/js'); ?>   

    </body>
</html>