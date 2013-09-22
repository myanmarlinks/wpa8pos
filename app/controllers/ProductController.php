<?php

class ProductController extends BaseController {
	public function index() {
		$products = Product::paginate(2);
		return View::make('product.all-products')
					->with('products', $products);

	}

	public function editProduct($id){
		$products = Product::find($id);
		if ($products == null){
			echo 'no data';
		}else{
			// dd($products->toArray());
			return View::make('product.edit-product')
							 ->with('products', $products);
		}
	}


	public function updateProduct($id){
		$products = Product::find($id);
		$products->product_name =Input::get('product_name');
		$products->categories=Input::get('categories');
		$products->suppliers =Input::get('suppliers');
		$products->cost_price =Input::get('cost_price');
		$products->unit_price =Input::get('unit_price');
		$products->quantity =Input::get('quantity');
		$products->reorder_level =Input::get('reorder_level'); 
		$products->location =Input::get('location');
		$products->description =Input::get('description');
		$products->save();
		
		return Redirect::to('all-products');
		
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

	public function deleteProduct($id){
		$product = product::find($id);
		$product->delete();	
		return Redirect::to('all-products');
	}


       
}
