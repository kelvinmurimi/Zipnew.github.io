  <section class="site-section pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

             <!--<div class="owl-carousel owl-theme home-slider">
                  <div>
            

                    class="a-block d-flex align-items-center height-lg" style="background-image: url('../assets/posts/images/img_1.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">welcome</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="../assets/images/person_1.jpg" alt="Colorlib"> </span>&bullet;
                        <span class="mr-2"> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> </span>
                        
                      </div>
                      <h3>If you are logged in..</h3>
                      <p>
                        you can create blog at any time .
                      </p>
                    </div>
                  </a>

                </div>
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('../assets/posts/images/img_2.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Travel</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        
                      </div>
                      <h3>How to Find the Video Games of Your Youth</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                    </div>
                  </a>
                </div>
                <div>
                  <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('../assets/posts/images/img_3.jpg'); ">
                    <div class="text half-to-full">
                      <span class="category mb-5">Sports</span>
                      <div class="post-meta">
                        
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        
                      </div>
                      <h3>How to Find the Video Games of Your Youth</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                    </div>
                  </a>
                </div>
              </div>-->
              
            </div>
          </div>
          
        </div>


      </section>
      <!-- END section -->

      <section class="site-section py-sm">
        <div class="container">
          <div class="row">

            <div class="col-md-6">
              <h2 class="mb-4"><?php echo $title;?></h2>
            </div>
          </div>
          <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
              <div class="row">
                 <?php foreach ($posts as $post ):?>
                <div class="col-md-6">
                  <a href="<?php echo site_url('/posts/'.$post['slug']);?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
                    <img src="<?php echo base_url();?>images/posts/<?php echo $post['post_image'];?>" alt="Image placeholder">
                    <div class="blog-content-body">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="<?php echo base_url();?>assets/posts/images/person_1.jpg" alt="Colorlib"> Category:<?php echo $post['name'];?></span>&bullet;
                        <span class="mr-2">posted on:<?php echo $post['created_at'];?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-user"></span> </span>
                      </div>

                      <h3><?php echo $post['title'];?></h3>

                    </div>
                  </a>
                </div>
                <?php endforeach;?>
                
              </div>
               
              <div class="row mt-5">
                <div class="col-md-12 text-center">
                  <nav aria-label="Page navigation" class="text-center">
                    <ul class="pagination">
                      <li class="page-item ">
                        <?php echo $this->pagination->create_links();?>
                      </li>
                      
                    </ul>
                  </nav>
                </div>
              </div>


            </div>

            <!-- END main-content -->

            <div class="col-md-12 col-lg-4 sidebar">
              <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                  <div class="form-group">
                   
                  </div>
                </form>
              </div>
              

          </div>
        </div>
      </section>