<?php

class MainController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Main Controller
	|--------------------------------------------------------------------------
	*/

	/**
	 * Show Main Page
	 * @author Naing Win
	 **/

	public function index()
	{
		return View::make('pages.index');
	}


	/**
	 * Logout
	 * @author Naing Win
	 **/

	public function logout() 
	{
		Sentry::logout();
    	return Redirect::to('/');
	}

}

	