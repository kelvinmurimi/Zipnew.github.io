         
                   <?php 

                   $this->form_validation->set_error_delimiters(
                       '<div class="red">','</div>'
                   );
                   ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Zipnews|<?php echo $title;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/css/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/posts/css/style.css">
         <style>
          .red{
            color: red;
          }
        /*footer*/
#main-footer{
    padding: 2em;
    background: #000;
    color: #fff;
    text-align: center;
}
#main-footer a{
    color: #2690d4;
    text-decoration: none;
    
}
      </style>
  </head>
  <body>
     
     <?php //if($this->session->userdata('user_logged')):?>
         <?php  //echo "<h1> user data</h1>".userdata['name'];die();?>
      <?php //endif;?>
      



     <!-- flash messages-->
   <?php if($this->session->flashdata('user_logged')):?>
      <?php echo ' <p class="alert alert-primary">'.$this->session->flashdata('user_logged').' </p>';?>
  <?php endif;?>
  <?php unset($_SESSION['user_logged']);?>
  <!--post created-->
   <?php if($this->session->flashdata('post_created')):?>
      <?php echo ' <p class="alert alert-success">'.$this->session->flashdata('post_created').' </p>';?>
   <?php endif;?>
  <?php unset($_SESSION['post_created']);?>
  <!--post deleted-->
        <?php if($this->session->flashdata('post_delete')):?>
              <?php echo ' <p class="alert alert-danger">'.$this->session->flashdata('post_delete').' </p>';?>
        <?php endif;?>
      <?php unset($_SESSION['post_delete']);?>
      <!--post edited-->
        <?php if($this->session->flashdata('post_update')):?>
              <?php echo ' <p class="alert alert-success">'.$this->session->flashdata('post_update').' </p>';?>
        <?php endif;?>
      <?php unset($_SESSION['post_update']);?>
      <!--user registered-->
			 <?php if($this->session->flashdata('user_registered')):?>
              <?php echo ' <p class="alert alert-success">'.$this->session->flashdata('user_registered').' </p>';?>
        <?php endif;?>
      <?php unset($_SESSION['user_registered']);?>
      <!--end flash messages-->
    <div class="wrassets

      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a>
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="#" class="search-top-form">
                  <span class="icon fa fa-search"></span>
                  <input type="text" id="s" placeholder="Type keyword to search...">
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">zipnews</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            
           
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <?php foreach($categories as $category):?>
                <li class="nav-item">
                  <a class="nav-link " href="<?php echo base_url('categories/posts/'.$category['id']);?>"><?php echo $category['name']; //echo $category['id'];?></a>
                </li>
                <?php endforeach;?>
                    <?php if(!$this->session->userdata('logged_in')):?>
                   <li class="nav-item">
                     <a class="nav-link  active" href="<?php echo base_url();?>users/login">Login</a>
                   </li> 
                <?php endif;?>
                 <?php if($this->session->userdata('logged_in')):?>
                 <li class="nav-item">
                  <a class="nav-link  active" href="<?php echo base_url();?>posts/create">Create-Post</a>
                </li>
                 <li class="nav-item">
                
                  <a class="nav-link  active" href="<?php echo base_url();?>users/logout">Logout</a>
                
                </li
              <?php endif;?>
             
               
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END header -->
