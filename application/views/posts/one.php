 <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Category: <?php echo $title;?></</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">
               
               <?php if($posts):?>
                <?php  foreach ($posts as $post ):?>
               
                <div class="post-entry-horzontal">
                  <a href="<?php echo base_url('/posts/'.$post['slug']);?>">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(<?php echo base_url();?>images/posts/<?php echo $post['post_image'];?>);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2"><?php echo $post['created_at'];?> </span> &bullet;
                        <span class="mr-2"><?php echo $title?></span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> </span>
                      </div>
                      <h2><?php echo $post['title'];?></h2>
                    </span>
                  </a>
                </div>
                
              <?php endforeach;?>
               <?php else:?>
                  <h2>no posts in this category add post <a href="<?php echo base_url();?>posts/create">add post</a></h2>
                <?php endif;?>
            
                <!-- END post -->

            

              


              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item">
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
                  <span class="icon fa fa-search"></span>
                
                </div>
              </form>
            </div>
      

           

        </div>
      </div>
    </section>
  