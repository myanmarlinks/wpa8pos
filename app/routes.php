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


Route::post('/add-product', array('before' => 'admincheck', 'uses' => 'ProductController@createProduct'));
Route::get('/add-product', array('before' => 'admincheck', 'uses' => 'ProductController@addProduct'));

/*
|--------------------------------------------------------------------------
| For Product
|--------------------------------------------------------------------------
*/
 
Route::get('/all-products', array('before' => 'admincheck', 'uses' => 'ProductController@index'));

Route::get('/products', array('before' => 'admincheck', 'uses' => 'ProductController@products'));

/*
|--------------------------------------------------------------------------
| For Customer
|--------------------------------------------------------------------------
*/

Route::get('/add-customer', 'CustomerController@addCustomer');
Route::post('/add-customer', 'CustomerController@createCustomer');
Route::get('/all-customers', 'CustomerController@allCustomers');

/*
|--------------------------------------------------------------------------
| For Supplier
|--------------------------------------------------------------------------
*/

Route::get('/add-supplier', array('before' => 'admincheck', 'uses' => 'SupplierController@addSupplier'));
Route::post('/add-supplier', array('before' => 'admincheck', 'uses' =>  'SupplierController@createSupplier'));
Route::get('/all-suppliers', array('before' => 'admincheck', 'uses' => 'SupplierController@allSuppliers'));

/*
|--------------------------------------------------------------------------
| For User Management
|--------------------------------------------------------------------------
*/

Route::get('/all-staffs', array('before' => 'admincheck', 'uses' => 'UserController@allStaffs'));

Route::get('/add-staff', array('before' => 'admincheck', 'uses' => 'UserController@staff'));
Route::post('/add-staff', array('before' => 'admincheck', 'uses' => 'UserController@addStaff'));

Route::get('/add-staff', array('before' => 'admincheck', 'uses' => 'UserController@index'));
Route::post('/add-staff', array('before' => 'admincheck', 'uses' => 'UserController@addUser'));

