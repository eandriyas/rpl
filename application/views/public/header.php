<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Escuela | Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="http://bootstraptaste.com" />
		<!-- css -->
		<link href="<?php echo base_url('assets/css/'); ?>/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/'); ?>/fancybox/jquery.fancybox.css" rel="stylesheet">
		<!-- <link href="<?php echo base_url('assets/css/'); ?>/jcarousel.css" rel="stylesheet" /> -->
		<link href="<?php echo base_url('assets/css/'); ?>/flexslider.css" rel="stylesheet" />
		<link href="<?php echo base_url('assets/css/'); ?>/style.css" rel="stylesheet" />
		<!-- Theme skin -->
		<link href="<?php echo base_url('assets/skins/'); ?>/default.css" rel="stylesheet" />
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
		</script>
		<script>
		var myCenter=new google.maps.LatLng(-7.760449, 110.408961);
		var marker;
		function initialize()
		{
		var mapProp = {
		center:myCenter,
		zoom:17,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		marker=new google.maps.Marker({
		position:myCenter,
		animation:google.maps.Animation.BOUNCE
		});
		marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		
	</head>
	<body>
		<div id="wrapper">
			<!-- start header -->
			<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo site_url(); ?>"><span>E</span>scuela</a>
						</div>
						<div class="navbar-collapse collapse ">
							<ul class="nav navbar-nav">
								<li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Login <b class=" icon-angle-down"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#" data-toggle="modal" data-target="#LT">Teacher</a></li>
										<li><a href="#" data-toggle="modal" data-target="#LS">Student</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Sign Up <b class=" icon-angle-down"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#" data-toggle="modal" data-target="#ST">Teacher</a></li>
										<li><a href="#" data-toggle="modal" data-target="#SS">Student</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- end header -->