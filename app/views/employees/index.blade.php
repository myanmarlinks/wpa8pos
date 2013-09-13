@extends ('templates.main')

@section('content')
	<div class="row" id="main_content">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<h3>Employees</h3>
			<span type="button" class="btn btn-primary">{{ HTML::link(URL::route('create-employee'), 'Add New Employee') }}</span>

			<div class="table-responsive" id="employee">
				<table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>id</th>
			            <th>First Name</th>
			            <th>Last Name</th>
			            <th>Email</th>
			            <th>Username</th>
			            <th>Phone Number</th>
			            <th>Address1</th>
			            <th>Address2</th>
			            <th>City</th>
			            <th>State</th>
			            <th>Zip</th>
			            <th>Country</th>
			            <th>Comment</th>
			            <th>Action</th>
			          </tr>
			        </thead>
			        <tbody>
				        @foreach($employees as $employee)
				        <ul>
				         	<li>
					          <tr>
					          
					            <td>{{ $employee->id }}</td>
					            <td>{{ $employee->first_name }}</td>
					            <td>{{ $employee->last_name }}</td>
					            <td>{{ $employee->email }}</td>
					            <td>{{ $employee->username }}</td>
					            <td>{{ $employee->phone_number }}</td>
					            <td>{{ $employee->address1 }}</td>
					            <td>{{ $employee->address2 }}</td>
					            <td>{{ $employee->city }}</td>
					            <td>{{ $employee->state }}</td>
					            <td>{{ $employee->zip }}</td>
					            <td>{{ $employee->country }}</td>
					            <td>{{ $employee->comment }}</td>
					            <td>
					            	<div class="btn-group btn-group-sm">
									  <button type="button" class="btn btn-default">{{ HTML::link(URL::route('destroy-employee', $employee->id), 'Delete') }}</button>
									  <button type="button" class="btn btn-default">{{ HTML::link(URL::route('edit-employee', $employee->id), 'Edit') }}</button>
									  <button type="button" class="btn btn-default">{{ HTML::link(URL::route('show-employee', $employee->id), 'Read') }}</button>
									</div>
					            </td>
							  </tr>
				          	</li>
				         </ul>
				         @endforeach
			         </tbody>
			      </table>
		    </div>
				
			
		</div>
	</div>
@stop