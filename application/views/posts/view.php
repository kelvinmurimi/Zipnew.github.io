<style>
   .red{
            color: red;
          }
          .green{
            color: green;
          }
</style>
<p class="red"><?php echo Validation_errors();?></p>
 <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            <img src="<?php echo base_url() ;?>images/posts/<?php echo $post['post_image'];?>" alt="Image" class="img-fluid mb-5">
             <div class="post-meta">
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
                        <span class="mr-2"><?php echo $post['created_at'];?> </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> </span>
                      </div>
            <h1 class="mb-4"><?php echo htmlentities($post['title']);?></h1>
           <!-- <a class="category mb-5" href="<?php //echo base_url();?>posts/edit/<?php// echo$post['slug']; ?>">Edit</a> 
            <?php  //echo form_open('/posts/delete/'.$post['id']);?>
              <input type="submit" name="delete" value="delete" class="btn-danger">
              </form>-->
           
            <div class="post-content-body">
              <p>
                <?php echo $post['body'];?>
              </p>
            <div class="row mb-5">
            
              </div>
            </div>
           
          
                   
            
                <div class="pt-5">
				                <p>Categories:
													       	  <?php foreach($categories as $category):?>
													       	     <a href=" <?php echo base_url('categories/posts/'.$category['id']);?>">
																											<?php echo $category['name']; //echo $category['id'];?>
																										</a>|
													       			<?php endforeach;?>			
													       	</p>
                 </div>


            <div class="pt-5">
              <h3 class="mb-5"> Comments</h3>
              <ul class="comment-list">
                <?php if($comments):?>
                  <?php foreach ($comments as $comment ) :?>
                <li class="comment">
                  <div class="vcard">
                    <img src="<?php echo base_url();?>assets/posts/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3><?php echo htmlentities($comment['name']);?></h3>
                    <div class="meta"><?php echo $comment['created_at'];?></div>
                    <p>
                      <?php echo htmlentities($comment['body']);?>
                    </p>
                    <p><a href="<?php echo base_url();?>posts/create" class="reply rounded">Create post</a></p>
                  </div>
                </li>
                <?php endforeach ;?>
                <?php else:?>
                  <p class="green">thank you for reading, be first to comment</p>
                <?php endif;?>
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                 <div class="bg-light"><?php echo form_open('comments/create/'.$post['id']);?></div>
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name"  class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                   
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <input type="hidden" name="slug" value="<?php echo $post['slug'];?>">
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>
                   
                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
             <!-- <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>-->
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
             <!-- <div class="bio text-center">
                <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2>Craig David</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>-->
            <!-- END sidebar-box -->  
            <div class="sidebar-box">
             <!-- <h3 class="heading">Popular Posts</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <?php //foreach ($comments as $comment ) :?>
               
                  <li>
                    <a href="">
                      <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                        <div class="post-meta">
                          <span class="mr-2">March 15, 2018 </span>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php //endforeach ;?>
                </ul>
              </div>
            </div>-->
            <!-- END sidebar-box 

            <div class="sidebar-box">
              <h3 class="heading">Categories</h3>
              <ul class="categories">
                 <?php //foreach ($categories as $category ) :?>
                <li><a href="#">Food <span>(12)</span></a></li>
                <?php //endforeach ;?>
              </ul>
            </div>-->
            <!-- END sidebar-box -->

            <div class="sidebar-box">
             <!-- <h3 class="heading">Tags</h3>
              <ul class="tags">
                <li><a href="">Travel</a></li>
                <li><a href="">Adventure</a></li>
               </ul>-->
            </div>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

   <!-- <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Check this</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_2.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_3.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>
    <!-- END section -->
  