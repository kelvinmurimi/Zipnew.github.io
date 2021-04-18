<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//index pages
//pagination route
$route['posts/index']='posts/index';
$route['categories']='categories/index';
$route['posts']='posts/index';

$route['default_controller'] = 'pages/view';
//my routes
$route['(:any)']='Pages/View/$1';
//cetegories
$route['categories']='categories/index';
$route['categories/posts/(:any)']='categories/posts/$1';
$route['categories/create']='categories/create';
//routes for posts


$route['posts/update']='posts/update';
$route['posts/create']='posts/create';
$route['posts/(:any)']='posts/view/$1';

//  ,</routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
