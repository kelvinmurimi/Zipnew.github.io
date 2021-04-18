                   <style>
                   	.red{
                   		
                   		color: red;
                   	}
                   </style>
                   <?php 

                   $this->form_validation->set_error_delimiters(
                       '<div class="red">','</div>'
                   );
                   ?>

                   <div class="card fat">
						<div class="card-body">
							                     <p class="red"><?php echo Validation_errors();?></p>
							<h4 class="card-title">Register</h4>
							<?php echo form_open('users/register');?>
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" utofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>
								<div class="form-group">
									<label for="password">Zipcode</label>
									<input id="password" type="text" class="form-control" name="zipcode" value="any 5 numbers" data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>


								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" >
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>
								<div class="form-group">
									<label for="email">Username</label>
									<input id="email" type="text" class="form-control" name="username">
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password"  data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								<div class="form-group">
									<label for="password">Cornfirm Password</label>
									<input id="password" type="password" class="form-control" name="passconf"  data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>


								

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="login">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						<p style="color: black;">in loving memory of Monica</p>
						   <?php 
                                 $company="Zip news";
                                 $date=date("Y");

                            ?>
                       <footer id="main-footer">
                           <div>Copyright &copy; <?php echo $date;?> &mdash;<?php echo $company;?></div>
                           <div>project by <a href="">kelvin kinyua</a> <small>inspired by <a href=""> Travercy   Media</a></small>              
                            </div>
                       </footer>
					</div>
				</div>
			</div>
		</div>
	</section>