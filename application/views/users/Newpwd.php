<style>
	.green{
		color: green;
	}
</style>
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Reset Password</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="new-password">enter your email|<small class="green">have password?</small><a href="<?php echo base_url();?>users/login">Go back</a></label>
									<input id="new-password" type="email" class="form-control" name="password" required autofocus data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
									<div class="form-text text-muted">
										Make sure your password is strong and easy to remember
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Reset Password
									</button>
								</div>
							</form>
						</div>
					</div>
					             <?php 
                                   $company="Zip news";
                                    $date=date("Y");

                                     ?>
        <footer id="main-footer">
            <div>Copyright &copy; <?php echo $date;?> &mdash;<?php echo $company;?></div>
            <div>project by <a href="">kelvin kinyua</a> <small>inspired by <a href=""> Travercy Media</a></small></div>
        </footer>