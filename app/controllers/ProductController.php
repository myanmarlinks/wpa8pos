<?php
 
 

class ProductController extends BaseController {
	public function index() {
		return View::make('product.index');
	}

<<<<<<< HEAD
	public function addproduct(){
		 $product =new Addproducts;
				$product->product_name =\Input::get('product_name');
				$product->categories=\Input::get('categories');
				$product->suppliers =\Input::get('suppliers');
				$product->cost_price =\Input::get('cost_price');
				$product->unit_price =\Input::get('unit_price');
				$product->quantity =\Input::get('quantity');
				$product->reorder_level =\Input::get('reorder_level'); 
				$product->location =\Input::get('location');
				$product->description =\Input::get('description');
				$product->save();
					 
				 return View::make('product.index');

		 
       }

       

     
}
=======
	public function addProduct() {
		return View::make('product.addproduct');
	}
}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
