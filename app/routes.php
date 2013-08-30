<?php
/*
|--------------------------------------------------------------------------
| For Languages
|--------------------------------------------------------------------------
*/

Route::get('/lang/{lang}', function($lang) {
    Session::put('my.locale', $lang);
    return Redirect::back();
});

if (Session::has('my.locale'))
{
    App::setLocale(Session::get('my.locale'));
} else {
	App::setLocale('en');
}


/*
|--------------------------------------------------------------------------
| For Welcome Page
|--------------------------------------------------------------------------
*/

Route::get('/login', 'WelcomeController@showWelcome');
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

Route::get('/', array('before' => 'sauth', 'MainController@index'));
Route::get('/logout', 'MainController@logout');


