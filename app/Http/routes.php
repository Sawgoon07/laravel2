<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('download-bill/{id}','Frontend\BookingController@downloadBill')->name('download-bill');

Route::group(['namespace'=>'Frontend','middleware'=>'guest','middleware'=>'web'], function(){
	Route::get('/','HomeController@index')->name('home');
	Route::get('index','HomeController@index')->name('frontend.index');
	Route::get('about','HomeController@about')->name('frontend.about');
	Route::get('booking-list','HomeController@Bookingbylist')->name('frontend.booking-list');
	Route::get('mennu-list','HomeController@menubylist')->name('frontend.mennu-list');
	Route::get('contact','HomeController@contact')->name('frontend.contact');
	Route::post('sendcontact','HomeController@savecontact')->name('frontend.savecontact');

	Route::get('menu1','HomeController@menulist')->name('frontend.menu1');
	Route::get('menuA','HomeController@menu')->name('frontend.menuA');
	Route::get('menuB','HomeController@menumenu')->name('frontend.menuB');
	
Route::group(['middleware'=>'auth'], function(){

	

	/*Route::get('/','BookingController@index')->name('booking.index');*/
	Route::resource('booking','BookingController');
	Route::get('profile','BookingController@bookings')->name('header.profile');
	Route::get('booking/{id}/delete', 'BookingController@destroy')->name('booking.delete');

	Route::post('booking/get-menu-by-category-group', 'BookingController@getMenuByCategoryGroup')->name('get-menu-by-category-group');
	Route::post('booking/get-items-by-menu', 'BookingController@getItemsByMenu')->name('get-items-by-menu');
	Route::post('booking/get-hall-by-shift', 'BookingController@getHallByShift')->name('get-hall-by-shift');

	Route::get('booking/{id}/details', 'BookingController@view')->name('booking.details');
	Route::get('feedback','HeaderController@feedback')->name('header.feedback');
	Route::post('sendfeedback','HeaderController@savefeedback')->name('header.savefeedback');
	/*Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));*/
	Route::get('bill','HeaderController@bill')->name('header.bill');
	Route::get('download-bill/{id}','BookingController@downloadBill')->name('download-bill');

	
	
	
	});


});

Route::group(['namespace'=>'Backend', 'middleware'=>'auth'], function(){

	Route::group(['prefix'=>'admin', 'middleware'=>'role', ], function(){
			Route::get('/','DashboardController@index')->name('admin.admin');
			Route::get('index','DashboardController@index')->name('admin.index');

			Route::resource('book','BookController');
			Route::get('book/{id}/show', 'BookController@show')->name('book.show');
			Route::get('book/{id}/delete', 'BookController@destroy')->name('book.delete');
			Route::resource('category','CategoryController');
			Route::get('category/{id}/delete', 'CategoryController@destroy')->name('category.delete');
			
			Route::resource('group','itemGroupController');
			Route::get('group/{id}/delete', 'itemGroupController@destroy')->name('group.delete');
			Route::resource('menu','MenuController');
			Route::get('admin/menu/{id}/delete', 'MenuController@destroy')->name('menu.delete');
			Route::resource('item','ItemController');
			Route::get('admin/item/{id}/delete', 'ItemController@destroy')->name('item.delete');
			Route::resource('hall','HallController');
			Route::get('admin/hall/{id}/delete', 'HallController@destroy')->name('hall.delete');
			Route::resource('shift','ShiftController');
			Route::get('admin/shift/{id}/delete', 'ShiftController@destroy')->name('shift.delete');

		
		});

	});


Route::group(['namespace' => 'Auth'], function () {
       
	Route::group(['middleware' => 'guest', 'middleware' => 'web'], function () {

		Route::get('login', 'AuthController@showLoginForm')->name('auth.login');
		Route::post('login', 'AuthController@login');
		Route::get('register', 'AuthController@showRegistrationForm')->name('auth.register');
		Route::post('register', 'AuthController@register');	   
		Route::get('logout', 'AuthController@logout')->name('auth.logout');     

        Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('auth.password.reset');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');

	});

});







