<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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

//////////////////////Home Controller//////
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'HomeController/about';
$route['products'] = 'HomeController/products';
$route['product/(:num)'] = 'HomeController/product/$1';
$route['contact'] = 'HomeController/contact';
$route['blog'] = 'HomeController/blog';
$route['faq'] = 'HomeController/faq';
$route['contact-enquiry'] = 'HomeController/contact_enquiry';

$route['training'] = 'HomeController/training';
$route['contact-insert'] = 'HomeController/create_contact';
$route['training-detail/(:num)'] = 'HomeController/training_detail/$1';
$route['blogs'] = 'HomeController/blogs';
$route['blog-detail/(:num)'] = 'HomeController/blog_detail/$1';
//////////Home Controller//////

///////admin////////
$route['admin/login'] = 'Admin/Login/index';
$route['admin/do_login'] = 'Admin/Login/do_login';
$route['admin/logout'] = 'Admin/Login/logout';

$route['admin/dashboard'] = 'Admin/dashboard/index';


$route['admin/product'] = 'Admin/Product/index';
$route['admin/product/create'] = 'Admin/Product/create';
$route['admin/product/store'] = 'Admin/Product/store';
$route['admin/product/edit/(:num)'] = 'Admin/Product/edit/$1';
$route['admin/product/update/(:num)'] = 'Admin/Product/update/$1';
$route['admin/product/delete/(:num)'] = 'Admin/Product/delete/$1';

$route['admin/product/image/(:num)'] = 'Admin/ProductImage/index/$1';
$route['admin/product/image/create/(:num)'] = 'Admin/ProductImage/create/$1';
$route['admin/product/image/store'] = 'Admin/ProductImage/store';
$route['admin/product/image/edit/(:num)'] = 'Admin/ProductImage/edit/$1';
$route['admin/product/image/update/(:num)'] = 'Admin/ProductImage/update/$1';
$route['admin/product/image/delete/(:num)'] = 'Admin/ProductImage/delete/$1';

$route['admin/banner'] = 'Admin/banner/index';
$route['admin/banner/add'] = 'Admin/banner/add';
$route['admin/banner/create'] = 'Admin/banner/create';
$route['admin/banner/edit/(:num)'] = 'Admin/banner/edit/$1';
$route['admin/banner/update/(:num)'] = 'Admin/banner/update/$1';
$route['admin/banner/delete/(:num)'] = 'Admin/banner/delete/$1';

$route['admin/blog'] = 'Admin/Blog/index'; // List all blog posts
$route['admin/blog/create'] = 'Admin/Blog/create'; // Create a new blog post
$route['admin/blog/edit/(:num)'] = 'Admin/Blog/edit/$1'; // Edit a blog post
$route['admin/blog/update/(:num)'] = 'Admin/Blog/update/$1'; // Update a blog post
$route['admin/blog/delete/(:num)'] = 'Admin/Blog/delete/$1'; // Delete a blog post
$route['admin/blog/(:num)'] = 'Admin/Blog/view/$1'; // View a single blog post


$route['admin/faq'] = 'Admin/FAQ/index';
$route['admin/faq/add'] = 'Admin/FAQ/add';
$route['admin/faq/create'] = 'Admin/FAQ/create';
$route['admin/faq/edit/(:num)'] = 'Admin/faq/edit/$1'; // General FAQ edit
$route['admin/faq/edit/(:num)/(:num)'] = 'Admin/faq/edit/$1/$2'; // Service FAQ edit
$route['admin/faq/update/(:num)'] = 'Admin/FAQ/update/$1';
$route['admin/faq/delete/(:num)'] = 'Admin/FAQ/delete/$1';
$route['admin/faq/delete/(:num)/(:num)'] = 'Admin/FAQ/delete/$1/$2';


$route['admin/gallery'] = 'Admin/Gallery/index';
$route['admin/gallery/add'] = 'Admin/Gallery/add';
$route['admin/gallery/create'] = 'Admin/Gallery/create';
$route['admin/gallery/edit/(:num)'] = 'Admin/Gallery/edit/$1';
$route['admin/gallery/update/(:num)'] = 'Admin/Gallery/update/$1';
$route['admin/gallery/delete/(:num)'] = 'Admin/Gallery/delete/$1';


$route['admin/testimonials'] = 'Admin/Testimonials/index';
$route['admin/testimonials/add'] = 'Admin/Testimonials/add';
$route['admin/testimonials/create'] = 'Admin/Testimonials/create';
$route['admin/testimonials/edit/(:num)'] = 'Admin/Testimonials/edit/$1';
$route['admin/testimonials/update/(:num)'] = 'Admin/Testimonials/update/$1';
$route['admin/testimonials/delete/(:num)'] = 'Admin/Testimonials/delete/$1';


$route['admin/contact'] = 'Admin/Contact';
$route['admin/contact/add'] = 'Admin/Contact/add';
$route['admin/contact/create'] = 'Admin/Contact/create';
$route['admin/contact/edit/(:num)'] = 'Admin/Contact/edit/$1';
$route['admin/contact/update/(:num)'] = 'Admin/Contact/update/$1';
$route['admin/contact/delete/(:num)'] = 'Admin/Contact/delete/$1';

$route['admin/address'] = 'Admin/address/index';
$route['admin/address/add'] = 'Admin/address/add';
$route['admin/address/create'] = 'Admin/address/create';
$route['admin/address/edit/(:num)'] = 'Admin/address/edit/$1';
$route['admin/address/update/(:num)'] = 'Admin/address/update/$1';
$route['admin/address/delete/(:num)'] = 'Admin/address/delete/$1';

$route['admin/social_media'] = 'Admin/social_media/index'; // List all social media data
$route['admin/social_media/add'] = 'Admin/social_media/add'; // Add social media data
$route['admin/social_media/create'] = 'Admin/social_media/create'; // Handle social media data creation
$route['admin/social_media/edit/(:num)'] = 'Admin/social_media/edit/$1'; // Edit social media data by ID
$route['admin/social_media/update/(:num)'] = 'Admin/social_media/update/$1'; // Handle social media data update by ID
$route['admin/social_media/delete/(:num)'] = 'Admin/social_media/delete/$1'; // Delete social media data by ID
$route['admin/social_media/create_or_update'] = 'admin/social_media/create_or_update_social_media';
