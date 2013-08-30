<?php 

class PosController extends BaseController {
	public function __construct() {
	}

	public function index() {
		return View::make('pos.index');
	}
}