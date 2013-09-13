<?php 

class Employee extends Eloquent {
	
	public static function validate($data) {
		return Validator::make($data, static::$rules);
	}

	public static $rules = array(
		'name' 			=> 'required|min:3|max:25|unique:employees,name',
		'email'   		=> 'required|email',
		'password'   	=> 'required|confirm',
		'cfmpassword'   => 'required',
		'phone'  		=> 'required|numeric',
		'address'   	=> 'required',
	);

}


?>