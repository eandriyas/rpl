<!-- Login guru -->
<div class="modal fade" id="LT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Login as Teacher</h3>
				<div class="errorteacher" style="text-align:center; color:red;"></div>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-inline gin" role="form" method="post" action="<?php echo site_url('teacher/f_teacher/login') ?>">
								<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input name="email" type="email" class="form-control log" id="LEP" placeholder="Enter email">
							</div>
								<div class="form-group">
								<label class="sr-only" for="exampleInputPassword2">Password</label>
								<input name="password" type="password" class="form-control log" id="LPP" placeholder="Password">
							</div>
								<div class="checkbox">
									<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button id="Lteacher" type="submit" class="btn btn-warning bu"><b>Sign in</b></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Login guru -->
<!-- Login siswa -->
<div class="modal fade" id="LS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Login as Student</h3>
				<div class="errort" style="text-align:center; color:red;"></div>

			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form id="reg-siswa" class="form-inline gin" role="form" method="post" action="<?php echo site_url('student/f_student/login'); ?>">
								<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input name="email" type="email" class="form-control log" id="LES" placeholder="Enter email">
							</div>
								<div class="form-group">
								<label class="sr-only" for="exampleInputPassword2">Password</label>
								<input name="password" type="password" class="form-control log" id="LPS" placeholder="Password">
							</div>
								<div class="checkbox">
									<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
							<button id="Lsiswa" type="submit" class="btn btn-warning bu"><b>Sign in</b></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end Login siswa -->
<!-- daftar guru-->
	<div class="modal fade" id="ST" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Sign Up as Teacher</h3>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-inline gin" role="form" method="post" action="<?php echo site_url('teacher/f_teacher/register_teacher'); ?>">
								<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input name="email" type="email" class="form-control log" id="EDT" placeholder="Enter email">
							</div>
								<div class="form-group">
								<label class="sr-only" for="exampleInputPassword2">Password</label>
								<input name="password" type="password" class="form-control log" id="PDT" placeholder="Password">
							</div>
							<button id="daftarGuru" type="submit" class="btn btn-warning bu"><b>Sign Up</b></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end daftar guru-->
<!-- daftar siswa-->
	<div class="modal fade" id="SS" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Sign Up as Student</h3>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form class="form-inline gin" role="form" action="<?php echo site_url('student/f_student/register_student'); ?>" method="post" >
								<div class="form-group">
								<label class="sr-only" for="email">Email address</label>
								<input name="email" type="email" class="form-control log" id="EDS" placeholder="Enter email">
							</div>
								<div class="form-group">
								<label class="sr-only" for="password">Password</label>
								<input name="password" type="password" class="form-control log" id="PDS" placeholder="Password">
							</div>
							<button id="daftarSiswa" type="submit" class="btn btn-warning bu"><b>Sign Up</b></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end daftar siswa-->
<!-- daftar berhasil-->
	<div class="modal fade" id="BB" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Thank you</h3>
			</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<p>Check your email to confirm you are human,,,</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end daftar berhasil-->