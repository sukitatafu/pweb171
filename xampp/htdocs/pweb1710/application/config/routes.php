<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home'] = 'home';
$route['pelangi'] = 'home/pelangi';
$route['cicak'] = 'home/cicak';
$route['kebun'] = 'home/kebun';
$route['balon'] = 'home/balon';
$route['baby'] = 'home/baby';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
