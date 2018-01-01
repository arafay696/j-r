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
$route['default_controller'] = 'welcome';

// ----------------------- Users Routes ------------------------//

// Get User Listing/User By Id
$route['v1/users(/:any)?'] = 'api/V1/users$1';
$route['v1/delete/user/(:num)'] = 'api/V1/deleteUser/$1';
$route['v1/save/user'] = 'api/V1/user';

// User Preference
$route['v1/user/preference(/:num)?'] = 'api/V1/userPreference$1';
$route['v1/save/user/preference/(:num)'] = 'api/V1/userPreferences/$1';

// User Vehicles
$route['v1/user/vehicles/(:num)'] = 'api/V1/userVehicles/$1';
$route['v1/save/user/vehicle'] = 'api/V1/userVehicle';

// User Rating
$route['v1/user/ratings(/:num)?'] = 'api/V1/ratings$1';
$route['v1/user/rating(/:num)?'] = 'api/V1/getUserRatingAverage$1';
$route['v1/save/user/rating'] = 'api/V1/newRating';

// Ride
$route['v1/ride(/:any)?'] = 'api/V1/ride$1';
$route['v1/save/ride'] = 'api/V1/newRide';
$route['v1/search/ride'] = 'api/V1/search';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
