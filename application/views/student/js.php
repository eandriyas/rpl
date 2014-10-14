<!-- add new calendar event modal -->
<!-- jQuery 2.0.2 -->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
<script src="<?php echo base_url('assets/social/'); ?>/js/jquery.min.js"></script>
<!-- jQuery UI 1.10.3 -->
<script src="<?php echo base_url('assets/social/'); ?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets/social/'); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
<script src="<?php echo base_url('assets/social/'); ?>/js/raphael-min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/social/'); ?>/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="js/AdminLTE/dashboard.js" type="text/javascript"></script> -->

<script src="<?php echo base_url('assets/social/'); ?>/js/datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/ajax/'); ?>/user.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
$('.datepicker').datepicker();
});
</script>
<script src="<?php echo base_url('assets/social/'); ?>/js/croppic.min.js"></script>
    <script>
		var croppicContainerModalOptions = {
				uploadUrl:'image_crop',
				cropUrl:'img_crop_file',
				modal:true,
				imgEyecandyOpacity:0.4,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
		}
		var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);
	</script>