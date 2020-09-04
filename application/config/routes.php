<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'users';

$route['usuarios'] = "users";
$route['nuevo_usuario'] = "users";
$route['guardar_usuario'] = "users/save_user";

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
