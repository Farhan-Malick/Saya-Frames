	<!-- Page content -->
	<div class="page-content login-cover">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->

				<div class="card mb-0">
					<ul class="nav nav-tabs nav-justified alpha-grey mb-0">
						<li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active" data-toggle="tab">
								<h6 class="my-1">Sign in</h6>
							</a></li>
						<li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0" data-toggle="tab">
								<h6 class="my-1">Register</h6>
							</a></li>
					</ul>

					<div class="tab-content card-body">
						<div class="tab-pane fade show active" id="login-tab1">
							<form class="login-form wmin-sm-400" method="post" action="<?= base_url() ?>login/verifyLogin">
								<div class="text-center mb-3">
									<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Login to your account</h5>
									<?php if(isset($_GET['err'])) { ?>
										<span class="d-block text-muted" style="color: red!important;">Incorrect Email/Password</span>
									<?php } ?>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="email" placeholder="Email">
									<div class="form-control-feedback">
										<i class="icon-user text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="password" placeholder="Password">
									<div class="form-control-feedback">
										<i class="icon-lock2 text-muted"></i>
									</div>
								</div>

								<!-- <div class="form-group d-flex align-items-center">
									<div class="form-check mb-0">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
											Remember
										</label>
									</div>

									<a href="login_password_recover.html" class="ml-auto">Forgot password?</a>
								</div> -->

								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-block">Sign in</button>
								</div>
							</form>
						</div>

						<div class="tab-pane fade" id="login-tab2">
							<form class="login-form wmin-sm-400" method="post" action="<?= base_url() ?>login/register">
								<div class="text-center mb-3">
									<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Create account</h5>
									<span class="d-block text-muted">All fields are required</span>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="name" placeholder="Your name">
									<div class="form-control-feedback">
										<i class="icon-user-check text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="text" class="form-control" name="email" placeholder="Your email">
									<div class="form-control-feedback">
										<i class="icon-mention text-muted"></i>
									</div>
								</div>

								<div class="form-group form-group-feedback form-group-feedback-left">
									<input type="password" class="form-control" name="password" placeholder="Your password">
									<div class="form-control-feedback">
										<i class="icon-user-lock text-muted"></i>
									</div>
								</div>

								<div class="form-group">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" data-fouc>
											Accept <a href="#">terms of service</a>
										</label>
									</div>
								</div>
								<button type="submit" class="btn bg-dark btn-block">Register</button>
							</form>
						</div>
					</div>
				</div>

				<!-- /login form -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<script>
		$('body').attr("class", "bg-slate-800");
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
