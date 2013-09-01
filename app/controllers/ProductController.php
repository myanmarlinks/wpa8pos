<?php

class ProductController extends BaseController {
	public function index() {
		return View::make('product.index');
	}

	public function addProduct() {
		return View::make('product.addproduct');
	}
}