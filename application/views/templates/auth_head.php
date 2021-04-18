<!DOCTYPE html>
<html lang="en">
          
                   <?php 

                     $this->form_validation->set_error_delimiters(
                       '<div class="red">','</div>'
                   );
                   ?>


<head>
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
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zipnews|Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>css/auth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/auth/css/my-login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="<?php echo base_url();?>css/auth/img/logo.jpg" alt="logo">
                    </div>
                     <?php if($this->session->flashdata('loggedout')):?>
                         <?php echo ' <p class="alert alert-danger">'.$this->session->flashdata('loggedout').' </p>';?>
                         <?php endif;?>