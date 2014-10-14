<html>
	<head>
		<title>awal</title>
		<!-- css -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="assets/css/jcarousel.css" rel="stylesheet" />
		<link href="assets/css/flexslider.css" rel="stylesheet" />
		<link href="assets/css/style.css" rel="stylesheet" />
		<!-- Theme skin -->
		<link href="assets/skins/default.css" rel="stylesheet" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		
	</head>
	<body>
		<form action="test/input_contact" method="post" accept-charset="utf-8">
			<label>Name : <input type="email" name="nama" id="email" ></label><br />
			<label>password : <input type="password" name="password" id="password" ></label>
			<input id="submit" type="submit" name="submit">
		</form>
		<a href="#" data-toggle="modal" data-target="#ST">Teacher</a>
		
		<div id="untuk_isi">
			
		</div>
		<!-- Login guru -->
		<div class="modal fade" id="ST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Login as Teacher</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form class="form-inline gin" role="form" method="post">
									<div class="form-group">
										<label class="sr-only" for="exampleInputEmail2">Email address</label>
										<input name="email2" type="email" class="form-control log" id="email2" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="sr-only" for="exampleInputPassword2">Password</label>
										<input name="password" type="password" class="form-control log" id="password" placeholder="Password">
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox"> Remember me
										</label>
									</div>
									<button id="submit2" name="submit2" type="submit" class="btn btn-warning bu"><b>Sign in</b></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Login guru -->
		<!-- Login guru -->
		<div class="modal fade" id="berhasil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Berhasil</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<p>Check your email to confirm your registered</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Login guru -->
		<script src="assets/js/user.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>