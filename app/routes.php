<?php
/*
|--------------------------------------------------------------------------
| For Languages
|--------------------------------------------------------------------------
*/

if (Session::has('my.locale'))
{
	App::setLocale(Session::get('my.locale'));
} else {
	App::setLocale('en');
}

Route::get('/lang/{lang}', function($lang) {
    Session::put('my.locale', $lang);
    return Redirect::back();
});

/*
|--------------------------------------------------------------------------
| For Welcome Page
|--------------------------------------------------------------------------
*/

Route::get('/login', array('before' => 'logincheck', 'uses' => 'WelcomeController@showWelcome'));
Route::post('/login', 'WelcomeController@login');

Route::get('/register', function() {
	return View::make('pages.register');
});
Route::post('/register', 'WelcomeController@register');

/*
|--------------------------------------------------------------------------
| For Main
|--------------------------------------------------------------------------
*/

Route::get('/', array('before' => 'sauth', 'uses' => 'MainController@index'));
Route::get('/logout', 'MainController@logout');

Route::get('/all-products', array('before' => 'admincheck', 'uses' => 'ProductController@index'));
