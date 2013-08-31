<?php

class ProductController extends BaseController {
	public function index() {
		return View::make('product.index');
	}
}