	<style>
		#login-tab2 {
			width: 800px;
		}

		#login-tab2 form {
			width: 100%;
		}

		@media screen and (max-width: 920px) {
			#login-tab2 {
				width: 600px;
			}
		}

		@media screen and (max-width: 720px) {
			#login-tab2 {
				width: 500px;
			}
		}

		@media screen and (max-width: 590px) {

			#login-tab2,
			#login-tab1 {
				width: 400px;
			}
		}

	</style>
	<!-- Page content -->
	<div class="page-content login-cover">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login form -->

				<div class="card mb-0">
					<ul class="nav nav-tabs nav-justified alpha-grey mb-0">
						<!-- <li class="nav-item"><a href="#login-tab1" class="nav-link border-y-0 border-left-0 active"
								data-toggle="tab">
								<h6 class="my-1">Sign in</h6>
							</a></li> -->
						<li class="nav-item"><a href="#login-tab2" class="nav-link border-y-0 border-right-0"
								data-toggle="tab">
								<h6 class="my-1">Register</h6>
							</a></li>
					</ul>

					<div class="tab-content card-body">

						<div class="tab-pane fade show active" id="login-tab2">
							<form class="login-form wmin-sm-400 " id="register"  method="post" action="<?= base_url() ?><?php echo isset($customerData) ? "register/updateCustomer" :"register/registerCustomer" ?>">
								<div class="text-center mb-3">
									<i
										class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
									<h5 class="mb-0">Create account</h5>
									<span class="d-block text-muted">All fields are required</span>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" name="name" value="<?php echo isset($customerData) ? $customerData['name'] :"" ?>" placeholder="Your name">
											<div class="form-control-feedback">
												<i class="icon-user-check text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" name="email" value="<?php echo isset($customerData) ? $customerData['email'] :"" ?>" placeholder="Your email">
											<div class="form-control-feedback">
												<i class="icon-mention text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="password" class="form-control" name="password" id="password"
												placeholder="Your password">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="password" class="form-control" name="cpassword" id="cpassword"
												placeholder="Confirm password">
											<div class="form-control-feedback">
												<i class="icon-user-lock text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" name="address"
											value="<?php echo isset($customerData) ? $customerData['address'] :"" ?>"
												placeholder="Street Address">
											<div class="form-control-feedback">
												<i class="icon-home2 text-muted"></i>
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" value="<?php echo isset($customerData) ? $customerData['city'] :"" ?>" name="city" placeholder="Your City">
											<div class="form-control-feedback">
												<i class="icon-office text-muted"></i>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-feedback form-group-feedback-left">
											<input type="text" class="form-control" name="mobile" value="<?php echo isset($customerData) ? $customerData['mobile'] :"" ?>"
												placeholder="Your Phone Number">
											<div class="form-control-feedback">
												<i class="icon-phone text-muted"></i>
											</div>
										</div>
									</div>
								</div>

								<!-- <div class="form-group">
									<div class="form-check">
										<label class="form-check-label">
											<input type="checkbox" name="remember" class="form-input-styled" data-fouc>
											Accept <a href="#">terms of service</a>
										</label>
									</div>
								</div> -->
								<div style="text-align:center">
									<p id="error">
										<?php if(isset($_GET['err1'])) { ?>
									<span class="d-block text-muted" style="color: red!important;">Email already Registered</span>
									<?php } ?></p>
								</div>
								<button type="submit" class="btn bg-dark btn-block"><?php echo isset($customerData) ? "Update" :"Register" ?> </button>
							</form>
							<div style="text-align:right; margin-top: 10px;">
							<p>Already member?  <a href="/saya_frames/login">Login here</a></p>
							</div >
							
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
		function register(event){
			event.preventDefault();
			$("#error").html('');
			if($("#password").val()!=$("#cpassword").val()){
				$("#error").html("Password Not Match")
				return;
			}
			$.ajax({
				url:"<?= base_url() ?>login/register",
				data:$("#register").serialize(),
				type:'post',
				success: function(result){
				if(result==1){
					window.location.replace(window.location.origin);
				}
  			}});
		}								
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
