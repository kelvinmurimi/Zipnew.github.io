<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Home-Zipnews</title>
           
                   <?php 

                   $this->form_validation->set_error_delimiters(
                       '<div class="red">','</div>'
                   );
                   ?>

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

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap" rel="stylesheet">

     <!--about css
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/about.css">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/default.css">
  <script  src= "<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
	<!--change colors of home page-->
	<link id="theme-style" rel="stylesheet" type="text/css" href="">
</head>
<body>