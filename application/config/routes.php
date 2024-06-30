<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'pages';
$route['(:any)'] = "pages/$1";
$route['blog/(:any)'] = "pages/blog/$1";
$route['review/(:any)'] = "pages/review/$1";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
