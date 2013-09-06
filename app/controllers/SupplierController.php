<?php 
class SupplierController extends BaseController {
	public function index() {
		return View::make('suppliers.index');
	}

	public function suppliersbyname(){
		  $users = User::all();

     }
     public function addsuppliers(){
		 $suppliers =new Addsuppliers;
				$suppliers->company_name =\Input::get('company_name');
				$suppliers->first_name=\Input::get('first_name');
				$suppliers->last_name =\Input::get('last_name');
				$suppliers->email =\Input::get('email');
				$suppliers->phone_no =\Input::get('phone_no');
				$suppliers->address_1 =\Input::get('address_1');
				$suppliers->address_2 =\Input::get('address_2'); 
				$suppliers->city =\Input::get('city');
				$suppliers->state =\Input::get('state');
				$suppliers->zip =\Input::get('zip');
				$suppliers->country =\Input::get('country');
				$suppliers->comment =\Input::get('comment');
				$suppliers->account =\Input::get('account');
				$suppliers->save();
					 
				 return View::make('supplier.index');

		 
       }
}