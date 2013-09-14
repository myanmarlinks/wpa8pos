<?php

class ProductController extends BaseController {
	public function index() {
		$products = Product::paginate(2);
		return View::make('product.all-products')
					->with('products', $products);

	}
	
 	public function addProduct()
	{
		return View::make('product.addproduct');
	}

	public function createProduct()
	{
		 $product =new product;
				$product->product_name =Input::get('product_name');
				$product->categories=Input::get('categories');
				$product->suppliers =Input::get('suppliers');
				$product->cost_price =Input::get('cost_price');
				$product->unit_price =Input::get('unit_price');
				$product->quantity =Input::get('quantity');
				$product->reorder_level =Input::get('reorder_level'); 
				$product->location =Input::get('location');
				$product->description =Input::get('description');
				$product->save();
					 
				 return View::make('product.index');
       }

   public function products()
	{
		return View::make('product.products');
	}


       
}
