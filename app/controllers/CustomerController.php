<?php 

/* 
Author: Chan Myae Aung
*/
class CustomerController extends BaseController {
	public function addCustomer()
	{
		return View::make('customers.addcustomer');
	}

	public function createCustomer() 
	{	

		// $dbcustomer = new Customer($customer);
		$rule =  array(
			'first_name' => 'required',
			'email'		 => 'email|required'
			);
		$cust = Input::all();
		$valid = Validator::make($cust, $rule);
		if($valid->fails()) {
			return Redirect::to('add-customer');
		} else {
			$customer = new Customer;
			$customer->first_name= Input::get('first_name');
			$customer->last_name = Input::get('last_name');
			$customer->email = Input::get('email');
			$customer->phone_number = Input::get('phone_number');
			$customer->address_1 = Input::get('address_1');
			$customer->address_2 = Input::get('address_2'); 
			$customer->city = Input::get('city');
			$customer->state = Input::get('state');
			$customer->zip = Input::get('zip');
			$customer->country = Input::get('country');
			$customer->comment = Input::get('comment');
			$customer->account = Input::get('account');
			$customer->save();

			return Redirect::to('all-customers');	
		}
		
	}

	public function allCustomers()
	{
		$customers = Customer::all()->toArray();
		var_dump($customers);
	}
}