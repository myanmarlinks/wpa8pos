<?php 

class PosController extends BaseController {
	public function __construct() {
		$lang=Input::get('lang');
		if($lang!=null) {
			App::setLocale($lang);
		}
	}

	public function index() {
		return View::make('templates.main');
	}
}