<section class="s1">
		<div class="main-container">
			<div class="greeting-wrapper">
				<h1>Hi, Welcome to ZipNews</h1>
			</div>


			<div class="intro-wrapper">
				<div class="nav-wrapper">

					<!-- Link around dots-wrapper added after tutorial video -->
					<a href="<?php echo base_url();?>posts">
						<div class="dots-wrapper">
							<div id="dot-1" class="browser-dot"></div>
							<div id="dot-2" class="browser-dot"></div>
							<div id="dot-3" class="browser-dot"></div>
						</div>
					</a>
					

					<ul id="navigation">
						
						<li><a href="<?php echo base_url();?>posts">Blog</a></li>
						<li><a href="<?php echo base_url();?>about">About</a></li>
						<?php if($this->session->userdata('logged_in')):?>
						<li><a href="<?php echo base_url();?>users/logout">Logout</a></li>
						<?php else:?>
							<li><a href="<?php echo base_url();?>users/login">Login</a></li>
                       <?php endif;?>
					</ul>
				</div>

				<div class="left-column">
					<img id="profile_pic" src="<?php echo base_url();?>images/newsl.jpg">
					<h5 style="text-align: center;line-height: 0;">Personalize Theme</h5>

					<div id="theme-options-wrapper">
						<div data-mode="light" id="light-mode" class="theme-dot"></div>
						<div data-mode="blue" id="blue-mode" class="theme-dot"></div>
						<div data-mode="green" id="green-mode" class="theme-dot"></div>
						<div data-mode="purple" id="purple-mode" class="theme-dot"></div>
					</div>

					<p id="settings-note">*Click on Theme Color you like!<br><a href="<?php echo base_url();?>posts">Blog</a></p>
				</div>

				<div class="right-column">

					<div id="preview-shadow">
						<div id="preview">
							<div id="corner-tl" class="corner"></div>
							<div id="corner-tr" class="corner"></div>
							<h3>Qoute of Day.</h3>
							<p>
                               "Dont let Yesterday Take too Much of your Today"-Will Rogers
							</p>
							<div id="corner-br" class="corner"></div>
							<div id="corner-bl" class="corner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="s2">
		<div class="main-container">

			<div class="about-wrapper">
				<div class="about-me">
					<h4>About Us |</h4>

					<p>Hi We are Happy that You are Finnally Here ,ZipNews is a New News/Blogs/Articles and Advertising company.</p>

					<p>Our Aim is to make Everyone with Desire to be a Blogger an Oportunity to create and Publish Blogs Absolutely for free.</p>
                    <p>We also offer Advertisement , Web design and development if You Need a  Blog website ,Company/Bussiniss Website .:
                        <a href="<?php echo base_url();?>#contact">Contact Us</a>
					</p>
					<p>
						You can login to start adding Post/articles/blogs <a href="<?php echo base_url();?>users/login">Login</a> or Read Blogs Here <a href="<?php echo base_url();?>posts">Blog</a>
					</p>

					<hr>

					<h4>Trending News</h4>

					<style>
						#btn-quote:hover{
							background-color: rgb(17, 218, 33);
							color: aliceblue;
							cursor: pointer;
							
						}
						#btn-quote{
							background-color: grey;
							color: aliceblue;
							cursor: pointer;
							padding: 0 10px;
							border-radius: 8px;
							transition: .4s;
						}
						.black{
							color: black;
						}
					</style>
					<p id="NewQuoteSection" >Here are Most viewed News Categories.<small class="black">want quote first?</small>: </p>
					<p><button  id="btn-quote" onclick="getQuote()">Quote</button></p>
                 
					<div id="skills">
						
						<ul>
						 <?php foreach($categories as $category):?>
							<li>
								<a href="<?php echo site_url('/categories/posts/'.$category['id']);?>"><?php echo $category['name'];?>
							</li>
							
						  <?php endforeach;?>
						</ul>
                       
						<ul>
						
							<li>Thank You</li>
							<li>for</li>
							<li>Being part</li>
							<li>of us </li>
							 <?php if($this->session->userdata('logged_in')):?>
							   <li><a href="<?php echo base_url();?>posts/create">Create Post</a></li>
							  <?php else:?>
							  	 <li><a href="<?php echo base_url();?>users/login">Create Post</a></li>
							  <?php endif;?>
						</ul>
                  
					</div>


				</div>

				
				<div class="social-links">
					<img id="social_img" src="<?php echo base_url();?>images/flow.jpg">
					<h3>follow us</h3>

					<a target="_blank" href="https://www.youtube.com/c/dennisivy">Facebook:Zip News</a>
					<br>
					<a target="_blank" href="https://twitter.com/dennisivy11">Twitter: @Zipnews</a>
				</div>
			</div>

		</div>
	</section>

	<section class="s1">
		<div class="main-container">
			<h3 style="text-align: center;">More of What we Offer.</h3>

			<div class="post-wrapper">

				<div>
				<a  href="<?php echo base_url();?>detailed">
					<div class="post">
						<img class="thumbnail" src="<?php echo base_url();?>images/write2.jpg">
						<div class="post-preview">
							<h6 class="post-title">Articles ,Blogs,Motivation</h6>
							<p class="post-intro">
								We beleive Given opportunity every one can Write..
							</p>
							<a href="<?php echo base_url();?>detailed">Read More</a>
						</div>
					</div>
				</a>
				</div>
			

				
				<div>
				 <a href="<?php echo base_url();?>detailed" >
					<div class="post">
						<img class="thumbnail" src="images/webdev.jpg">
						<div class="post-preview">
							<h6 class="post-title">Web development </h6>
							<p class="post-intro">
							  Most small business,companies are going online due to rapid growth in technology...
							</p>
							<a href="<?php echo base_url();?>detailed">Read More</a>
						</div>
					</div>
				</a>
				  </div>
                 
			
				<div>
				<a href="<?php echo base_url();?>about">		
					<div class="post">
						<img class="thumbnail" src="images/mic.jpg">
						<div class="post-preview">
							<h6 class="post-title">Advertising  and Marketing</h6>
							<p class="post-intro">
							Do you have any product to advertise or promote?,we..
						</p>
							<a href="<?php echo base_url();?>detailed">Read More</a>
						</div>
					</div>
				 </a> 
				</div>
          
			</div>
		
		</div>
	</section>

	<section class="s2">
		<div class="main-container">
			<a href=""></a>
			<h3 style="text-align: center;">Get In Touch</h3>

			<form id="contact-form">
				<a name="contact"></a>

				<label>Name</label>
				<input class="input-field" type="text" name="name">

				<label>Subject</label>
				<input class="input-field" type="text" name="subject">

				<label>Email</label>
				<input class="input-field" type="text" name="email">

				<label>Message</label>
				<textarea class="input-field" name="message"></textarea>

				<input id="submit-btn" type="submit" value="Send ">
			</form>
		</div>
	</section> 