<?php 

class SupplierController extends BaseController {
	public function addSupplier()
	{
		return View::make('supplier.addsupplier');
	}

	public function createSupplier() 
	{	

		$rule =  array(
			'first_name' => 'required',
			'email'		 => 'email|required'
			);
		$cust = Input::all();
		$valid = Validator::make($cust, $rule);
		if($valid->fails()) {
			return Redirect::to('add-supplier');
		} else {
			$supplier = new Supplier;
			$supplier->company_name =Input::get('company_name');
			$supplier->first_name= Input::get('first_name');
			$supplier->last_name = Input::get('last_name');
			$supplier->email = Input::get('email');
			$supplier->phone_no = Input::get('phone_no');
			$supplier->address_1 = Input::get('address_1');
			$supplier->address_2 = Input::get('address_2'); 
			$supplier->city = Input::get('city');
			$supplier->state = Input::get('state');
			$supplier->zip = Input::get('zip');
			$supplier->country = Input::get('country');
			$supplier->comment = Input::get('comment');
			$supplier->account = Input::get('account');
			$supplier->save();

			return Redirect::to('all-suppliers');	
		}
		
	}

	public function allSuppliers()
	{
		$suppliers = Supplier::all()->toArray();
		var_dump($suppliers);
	}
}
