<?php

	/**
	 * User Controlling System
	 * Develop with cartlyst sentry2
	 * @author Naing Win
	 **/

class UserController extends BaseController {
	public function index() {
		return View::make('users.addstaff');
	}

	public function addUser() {

	}
}