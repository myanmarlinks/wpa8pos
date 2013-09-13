<?php 
class EmployeeController extends BaseController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Employee::all();
		return View::make('employees.index')
			->with('employees', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('employees.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		// $validation = Employee::validate(Input::all());
		$input = Input::all();
		$rules = array(
			'first_name' 		=> 'required|max:20',
		 	'last_name'   		=> 'required|max:20',
		 	'email'   			=> 'required|email|unique:employees,email',
		 	'username'  		=> 'required|unique:employees,username',
		 	'password'  		=> 'required|confirmed',
		 	'password_confirmation'   	=> 'required',
		 	'phone_number'   	=> 'required|numeric',
		 );

		$validation = Validator::make($input, $rules);

		if($validation->passes()){

			$employee = new Employee;
			$employee->first_name = Input::get('first_name');
			$employee->last_name  = Input::get('last_name');
			$employee->email 	  = Input::get('email');
			$employee->username   = Input::get('username');
			$employee->password   = Hash::make(Input::get('password'));
			$employee->phone_number = Input::get('phone_number');
			$employee->address1   = Input::get('address1');
			$employee->address2   = Input::get('address2');
			$employee->city       = Input::get('city');
			$employee->state 	  = Input::get('state');
			$employee->zip 		  = Input::get('zip');
			$employee->country 	  = Input::get('country');
			$employee->comment    = Input::get('comment');
			$employee->save();

			// return "Success";
			Session::flash('success', 'A new employee has been created');
	        return Redirect::to('/employees');

		}else{
			return Redirect::to('/employees/create')->withErrors($validation)->withInput();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = Employee::find($id);

		return View::make('employees.show')
			->with('employee', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('employees.edit')
			->with('employee', Employee::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$id = Input::get('employee_id');
		$input = Input::all();
		$rules = array(
			'first_name' 		=> 'required|max:20',
		 	'last_name'   		=> 'required|max:20',
		 	'email'   			=> 'required|email',
		 	'username'  		=> 'required',
		 	'password'  		=> 'required|confirmed',
		 	'password_confirmation'   	=> 'required',
		 	'phone_number'   	=> 'required|numeric',
		 );

		$validation = Validator::make($input, $rules);

		if($validation->passes()){
			$employee = Employee::find($id);
			$employee->first_name = Input::get('first_name');
			$employee->last_name  = Input::get('last_name');
			$employee->email 	  = Input::get('email');
			$employee->username   = Input::get('username');
			$employee->password   = Hash::make(Input::get('password'));
			$employee->phone_number = Input::get('phone_number');
			$employee->address1   = Input::get('address1');
			$employee->address2   = Input::get('address2');
			$employee->city       = Input::get('city');
			$employee->state 	  = Input::get('state');
			$employee->zip 		  = Input::get('zip');
			$employee->country 	  = Input::get('country');
			$employee->comment    = Input::get('comment');
			$employee->save();
			
			Session::flash('success', 'Your data has been changed');
			return Redirect::to('/employees');
			
	        // return Redirect::to('/employees');

		} else{
			// return "Fail";
			return Redirect::route('edit-employee', $id)->withErrors($validation)->withInput();
		}

		// $employee = Employee::find($id);
		// var_dump($employee);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$employee = Employee::find($id);
		$employee->destroy($id);

		Session::flash('success', 'Successfully Deleted');
	    return Redirect::to('/employees');
	}

}






?>