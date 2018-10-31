<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'user/home';
$route['user'] = 'user/home';
//$route['user/members'] = 'user/index';
$route['admin'] = 'admin/login';
$route['music'] = 'music/index';
$route['music/insert'] = 'music/insert';
$route['music/edit'] = 'music/edit';
$route['music/delete'] = 'music/delete';
$route['videos'] = 'videos/index';
$route['videos/insert'] = 'videos/insert';
$route['videos/delete'] = 'videos/delete';
$route['artists'] = 'artists/index';
$route['artists/insert'] = 'artists/insert';
$route['artists/delete'] = 'artists/delete';
$route['music/(:any)'] = 'admin/music/view/$1';
$route['videos/(:any)'] = 'admin/videos/view/$1';
$route['artists/(:any)'] = 'admin/artists/view/$1';
$route['reviews'] = 'reviews/index';
$route['reviews/(:any)'] = 'user/reviews/view/$1';
$route['videos'] = 'user/videos/index';
$route['videos/(:any)'] = 'user/videos/view/$1';
$route['artists'] = 'user/artists/index';
$route['artists/(:any)'] = 'user/artists/view/$1';
$route['members'] = 'members/index';
$route['members/(:any)'] = 'user/members/view/$1';
$route['members/edit'] = 'user/members/edit';
$route['friends'] = 'friends/index';
$route['friends/(:any)'] = 'user/friends/view/$1';
$route['chat'] = 'user/chat/index';
$route['chat/(:any)'] = 'user/chat/index/$1';
$route['chats'] = 'user/chats/index';
$route['chats/(:any)'] = 'user/chats/index/$1';
$route['mp3'] ='admin/mp3/index';
$route['mp3/insert'] = 'mp3/insert';
$route['mp3/edit'] = 'mp3/edit';
$route['mp3/delete'] = 'mp3/delete';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$config['uri_protocol']    = 'REQUEST_URI';
//$route['folder'] = "admin/home";