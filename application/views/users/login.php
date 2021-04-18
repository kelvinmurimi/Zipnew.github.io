 <div class="card fat">
                        <div class="card-body">
                              <!-- flash messages-->
                             <?php if($this->session->flashdata('login_failed')):?>
                                <?php echo ' <p class="alert alert-danger">'.$this->session->flashdata('login_failed').' </p>';?>
                            <?php endif;?>
                            <?php unset($_SESSION['login_failed']);?>
                            <!--logged out -->
                             <?php if($this->session->flashdata('logged_in')):?>
                                <?php echo ' <p class="alert alert-danger">'.$this->session->flashdata('logged_in').' </p>';?>
                            <?php endif;?>
                            <?php unset($_SESSION['logged_in']);?>

                            <!--end flash-->

                            <?php echo Validation_errors();?>
                            <h4 class="card-title">Login</h4>
                           <?php echo form_open('users/login');?>
                                <div class="form-group">
                                    <label for="email">username</label>
                                    <input id="email" type="text" class="form-control" name="username" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password
										<a href="forgot.html" class="float-right">
											Forgot Password?
										</a>
									</label>
                                    <input id="password" type="password" class="form-control" name="password" required data-eye>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-checkbox custom-control">
                                        <input type="checkbox" name="remember" id="remember" class="custom-control-input">
                                        <label for="remember" class="custom-control-label">Remember Me</label>
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
                                </div>
                                <div class="mt-4 text-center">
                                    Don't have an account? <a href="register">Create One</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        in loving memory of Monica
                    </div>
                </div>
            </div>
        </div>
    </section>
               <?php 
   $company="Zip news";
    $date=date("Y");

   ?>
        <footer id="main-footer">
            <div>Copyright &copy; <?php echo $date;?> &mdash;<?php echo $company;?></div>
            <div>project by <a href="">kelvin kinyua</a> <small>inspired by <a href=""> Travercy Media</a></small></div>
        </footer>