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
Route::get('/addproducts', array('before' => 'admincheck', 'uses' => 'ProductController@addProduct'));


Route::post('/add-product', array('before' => 'admincheck', 'uses' => 'ProductController@createProduct'));
Route::get('/add-product', array('before' => 'admincheck', 'uses' => 'ProductController@addProduct'));

Route::get('/addproducts', array('before' => 'admincheck', 'uses' => 'ProductController@addProduct'));

/*
|--------------------------------------------------------------------------
| For Product
|--------------------------------------------------------------------------
*/
 
Route::get('/all-products', array('before' => 'admincheck', 'uses' => 'ProductController@index'));

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

/*
|--------------------------------------------------------------------------
| For Employee
|--------------------------------------------------------------------------
*/
Route::get('/employees', array('as' => 'employees', 'uses' => 'EmployeeController@index'));
Route::get('/employees/create', array('as' => 'create-employee', 'uses' => 'EmployeeController@create'));
Route::get('/employees/{id}/destroy', array('as' => 'destroy-employee', 'uses' => 'EmployeeController@destroy'));
Route::get('/employees/{id}/edit', array('as' => 'edit-employee', 'uses' => 'EmployeeController@edit'));
Route::get('/employees/{id}', array('as' => 'show-employee', 'uses' => 'EmployeeController@show'));
Route::post('/employees/store','EmployeeController@store');
Route::put('/employees/update','EmployeeController@update');

