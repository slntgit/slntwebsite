<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/home';
$route['pages/testimonials'] = 'pages/testimonials';
$route['pages/testimonials/(:any)'] = 'pages/testimonials/$1';
$route['pages/testimonials/(:any)/(:any)'] = 'pages/testimonials/$1/$1';
$route['pages/testimonials/(:any)/(:any)/(:any)'] = 'pages/testimonials/$1/$1/$1';

$route['404_override'] = 'pages/error404';
$route['translate_uri_dashes'] = FALSE;

$route['success-flash'] = 'MyFlashController/success';
$route['error-flash'] = 'MyFlashController/error';
$route['warning-flash'] = 'MyFlashController/warning';
$route['info-flash'] = 'MyFlashController/info';


$route['slider/add-slider'] = 'MyController';

$route['slider/create'] = 'MyController/Create';
$route['slider/view-slider'] = 'MyController/view';
$route['slider/delete/(:num)'] = 'MyController/delete/$1';


