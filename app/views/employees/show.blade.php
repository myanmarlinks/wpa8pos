@extends ('templates.main')

@section('content')
	<div class="row" id="main_content">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<ul>
				<h2>{{ $employee->first_name.' '.$employee->last_name }}</h2>
				<li><strong>First Name: </strong> {{ $employee->first_name }}</li>
				<li><strong>Last Name: </strong> {{ $employee->last_name }}</li>
				<li><strong>Email:</strong> {{ $employee->email }}</li>
				<li><strong>Username:</strong> {{ $employee->username }}</li>
				<li><strong>Password:</strong> {{ $employee->password }}</li>
				<li><strong>Phone Number:</strong> {{ $employee->phone_number }}</li>
				<li><strong>Address1:</strong> {{ $employee->address1 }}</li>
				<li><strong>Address2:</strong> {{ $employee->address2 }}</li>
				<li><strong>City:</strong> {{ $employee->city }}</li>
				<li><strong>State:</strong> {{ $employee->state }}</li>
				<li><strong>Zip:</strong> {{ $employee->zip }}</li>
				<li><strong>Country:</strong> {{ $employee->country }}</li>
				<li><strong>Comment:</strong> {{ $employee->comment }}</li>

			</ul>
		</div>
	</div>
@stop