<?php

	/**
	 * User Controlling System
	 * Develop with cartlyst sentry2
	 * @author Naing Win
	 **/

class UserController extends BaseController {

	public function allStaffs() {

		return View::make('staff.allstaffs');
					
	}


	public function staff() {
		return View::make('staff.addstaff');
	}

	public function addStaff() {

	}
}