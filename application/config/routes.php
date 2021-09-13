<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']['post'] = 'HomeController/login';
$route['daftar']['post'] = 'HomeController/daftar';
$route['register']['get'] = 'HomeController/register';
$route['forgotpwd']['get'] = 'HomeController/forgot';
$route['forgot']['post'] = 'HomeController/forgotPassword';
$route['logout']['get'] = 'HomeController/logout';