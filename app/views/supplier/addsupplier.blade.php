@extends('templates.main')

@section('content')
	<div class="container">
		<div class="row" id="main_content">
			<div class="col-sm-12 col-md-12 col-lg-12" id="supplier">
				<div class="col-sm-6 col-md-6 col-lg-6">
					{{ Form::open(array('url'=>'add-supplier', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}
        				<div class="form-group">
            				{{ Form::label('company_name', 'Company Name:', array('class' => 'col-lg-4 control-label')) }} 
            				<div class="col-lg-8">
              					{{ Form::text('company_name', '', array('placeholder' => 'company name', 'class' => 'form-control')) }}
            				</div>
          				</div>

          				<div class="form-group">
            				{{ Form::label('first_name', 'First Name:', array('class' => 'col-lg-4 control-label')) }} 
            				<div class="col-lg-8">
              					{{ Form::text('first_name', '', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
            				</div>
          				</div>

          				<div class="form-group">
            				{{ Form::label('last_name', 'Last Name:', array('class' => 'col-lg-4 control-label')) }} 
            				<div class="col-lg-8">
              					{{ Form::text('last_name', '', array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
            				</div>
          				</div>
          
          				<div class="form-group">
            				{{ Form::label('email', 'Email:', array('class' => 'col-lg-4 control-label')) }} 
            				<div class="col-lg-8">
              					{{ Form::email('email', '', array('placeholder' => 'Email', 'class' => 'form-control')) }}
            				</div>
          				</div>

			          	<div class="form-group">
			            	{{ Form::label('phone_no', 'Phone No:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('phone_no','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('address_1', 'Address 1:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			             		{{ Form::text('address_1','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('address_2', 'Address 2:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('address_2','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('city', 'City:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('city','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('state', 'State:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('state','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('zip', 'Zip:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('zip','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	{{ Form::label('country', 'Your Country:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::select('country', array(
			                		'country'  => 'Select Country',
			                		'my'        => 'Myanmar',
			                		'sig'       => 'Singapore',  
			              		), 'country', array('class' => 'form-control'))}}
			            	</div>
			          	</div>
			         
			          	<div class="form-group">
			            	{{ Form::label('comment', 'Comments:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::textarea('comment','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>
			  			
			          	<div class="form-group">
			            	{{ Form::label('account', 'Account:', array('class' => 'col-lg-4 control-label')) }} 
			            	<div class="col-lg-8">
			              		{{ Form::text('account','', array('placeholder' => '', 'class' => 'form-control')) }}
			            	</div>
			          	</div>

			          	<div class="form-group">
			            	<div class="col-lg-offset-4 col-lg-12">
			              		{{ Form::submit('Submit', array('class' => 'btn btn-magenta')) }}
			            	</div>
			          	</div>
        			{{ Form::close() }}
        		</div>
			</div>
		</div>
	</div>
@stop
