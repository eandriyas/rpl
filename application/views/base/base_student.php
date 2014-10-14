<!DOCTYPE html>
<html>
<?php $this->load->view('student/head'); ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('student/header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php $this->load->view('student/left'); ?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <div id="forAjaxView">
            	<?php $this->load->view($template_student); ?>
            </div>
        </div><!-- ./wrapper -->

<?php $this->load->view('student/js'); ?>    

    </body>
</html>