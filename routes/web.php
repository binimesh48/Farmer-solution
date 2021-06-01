<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/soli-health-card', 'user.un-cat.soil')->name('soli-health-card');
Route::view('/about', 'user.un-cat.about')->name('about');
Route::view('/Terms-of-Use', 'user.un-cat.Terms-of-Use')->name('Terms-of-Use');
Route::view('/Privacy-Policy', 'user.un-cat.Privacy-Policy')->name('Privacy-Policy');

// Contact 
Route::get('/contact', 'ContactController@create')->name('contact.create');
Route::post('/contact', 'ContactController@store')->name('contact.store');

Route::get('/upload-pan', 'ContactController@panGet')->name('pan.create');
Route::post('/upload-pan', 'ContactController@panStore')->name('pan.store');


Route::get('/scheme', 'GovtSchemeController@userIndex')->name('scheme');
Route::get('/scheme/{id}', 'GovtSchemeController@show')->name('scheme.user.show');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/create', 'BlogController@store')->name('blog.store');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
Route::get('/blog/{id}/delete', 'BlogController@destroy')->name('user.blog.delete');
      
Route::get('/weather', 'WeatherController@index')
      ->name('weather');
Route::get('/weather/{id}', 'WeatherController@show')
        ->name('weather.show');  
Route::get('/weather/{id}/delete', 'WeatherController@destroy')
        ->name('weather.delete');   
      
Route::get('mandi', 'MandiController@index')
        ->name('mandi');
      
Route::get('mandi/{id}', 'MandiController@show')
        ->name('mandi.show');

Route::get('/market', 'ProductController@index')
      ->name('marketplace');

Route::get('/market/create', 'ProductController@create')
      ->name('marketplace.create')->middleware('is.pan.card');   
Route::post('/market/create', 'ProductController@store')
      ->name('marketplace.store')->middleware('is.pan.card'); 

Route::get('/market/{id}', 'ProductController@show')
      ->name('marketplace.show');

Route::get('/market/{id}/delete', 'ProductController@destroy')
      ->name('marketplace.delete');


Route::redirect('/admin', '/admin/area')
      ->middleware('is.admin')
      ->name('admin');

Route::get('admin/contact', 'ContactController@index')->name('admin.contact');
      
Route::get('admin/mandi', 'MandiController@adminIndex')
      ->name('admin.mandi');
      
Route::get('admin/mandi/{id}', 'MandiController@create')
      ->name('admin.mandi.create');
      
Route::post('admin/mandi/{id}', 'MandiController@store')
      ->name('admin.mandi.store');
      
Route::get('admin/weather', 'WeatherController@adminIndex')
      ->name('admin.weather');

Route::get('admin/weather/create', 'WeatherController@create')
      ->name('admin.weather.create');
Route::post('admin/weather/create', 'WeatherController@store')
        ->name('admin.weather.store');

Route::get('admin/weather/{id}', 'WeatherController@edit')
        ->name('admin.weather.edit');   
Route::post('admin/weather/{id}', 'WeatherController@update')
        ->name('admin.weather.update');   

Route::get('admin/weather/{id}/delete', 'WeatherController@destroy')
        ->name('admin.weather.delete');   


Route::get('/admin/area', 'AreaController@index')
      ->middleware('is.admin')
      ->name('admin.area');

Route::get('/admin/area/{type}', 'AreaController@create')
      ->middleware('is.admin')
      ->name('admin.area.create');

Route::post('/admin/area/{type}', 'AreaController@store')
      ->middleware('is.admin')
      ->name('admin.area.store');
        
Route::get('/admin/scheme', 'GovtSchemeController@index')
      ->middleware('is.admin')
      ->name('admin.scheme');
        
Route::get('/admin/scheme/add', 'GovtSchemeController@create')
      ->middleware('is.admin')
      ->name('admin.scheme.add');
        
Route::post('/admin/scheme/add', 'GovtSchemeController@store')
      ->middleware('is.admin')
      ->name('admin.scheme.store');

Route::delete('/admin/scheme/{id}', 'GovtSchemeController@destroy')
      ->middleware('is.admin')
      ->name('admin.scheme.destroy');

Auth::routes();

Route::redirect('/home', '/blog')->name('home');
