<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/****************************************
* WEB ROUTES
*****************************************/
$template = 'template';
Route::get('/', function() use ($template)
{
	View::name($template, 'web.home');
	$layout = View::of('web.home', array('activenav' => 'home'));
	return $layout->nest('content', 'web.home');
});

Route::post('/', 'SubscribeController@subscribeEmail');

Route::get('/ourpublications', 'OurPublicationsController@show');
Route::get('/ourpublications/{article?}', 'OurPublicationsController@ishow');

Route::get('/featuredarticle','ArticlesController@show');
Route::get('/articles/{name?}','ArticlesController@show');

Route::get('/whoarewe', function() use ($template)
{
	View::name($template, 'web.whoarewe');
	$layout = View::of('web.whoarewe', array('activenav' => 'whoarewe'));
	return $layout->nest('content', 'web.whoarewe');
});

Route::get('/contactus', function() use ($template)
{
	View::name($template, 'web.contactus');
	$layout = View::of('web.contactus', array('activenav' => 'contactus'));
	return $layout->nest('content', 'web.contactus');
});
Route::post('/contactus', 'ContactUsController@sendEmail');

Route::get('/partners', 'PartnersController@show');

Route::get('/sponsors', 'SponsorsController@show');

Route::get('/getpdf/{file}', 'ArticlesController@downloadPdf');

Route::get('/privacy', function() use ($template)
{
	View::name($template, 'web.privacypolicy');
	$layout = View::of('web.privacypolicy', array('activenav' => ''));
	return $layout->nest('content', 'web.privacypolicy');
});

Route::get('/careers', function() use ($template)
{
	View::name($template, 'web.careers');
	$layout = View::of('web.careers', array('activenav' => ''));
	return $layout->nest('content', 'web.careers');
});
