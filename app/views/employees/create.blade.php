@extends('templates.main')

@section('content')
<div class="container">
  <div class="row" id="main_content">
    <div class="col-sm-12 col-md-12 col-lg-12">

  
        <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        
       {{ Form::open(array('url'=>'employees/store', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}
      
          <ul class="form-group errors">
            @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
            @endforeach
          </ul>

          <div class="form-group form-inline">   
            {{ Form::label('first_name', 'First Name', array('class' => 'col-lg-4 control-label must-fill')) }}
              
            <div class="col-lg-8">
              {{ Form::text('first_name', '', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('last_name', 'Last Name', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::text('last_name', '', array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::text('email', '', array('placeholder' => 'Email', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('username', 'Username', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::text('username', '', array('placeholder' => 'Username', 'class' => 'form-control')) }}
            </div>
          </div>
          
           <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::password('password_confirmation', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('phone_number', 'Phone Number', array('class' => 'col-lg-4 control-label must-fill')) }} 
            <div class="col-lg-8">
              {{ Form::text('phone_number', '', array('placeholder' => 'Your Phone Number', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('address1', 'Address 1', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('address1', '', array('placeholder' => 'Address 1', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('address2', 'Address 2', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('address2', '', array('placeholder' => 'Address 2', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('city', 'Your City', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('city', '', array('placeholder' => 'Your City', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('state', 'Your State', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('state', '', array('placeholder' => 'Your State', 'class' => 'form-control')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('zip', 'Zip Code', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('zip', '', array('placeholder' => 'Zip Code', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('country', 'Your Country', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('country', '', array('placeholder' => 'Your Country', 'class' => 'form-control')) }}
            </div>
          </div>
          
          <div class="form-group">
            {{ Form::label('group', 'Group', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::select('group', array(
                'select'    => 'Select Group',
                'admin'     => 'Admin',
                'reporter'  => 'Reporter',
                'product'   => 'Product Manager',
                'sale'      => 'Sale Stall',  
              ), 'select', array('class' => 'form-control'))}}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('comment', 'Add Your Comment', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('comment', '', array('placeholder' => 'Add Your Comment', 'class' => 'form-control','row' => '2')) }}
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-offset-4 col-lg-12">
              {{ Form::submit('Create', array('class' => 'btn btn-magenta')) }}
              <a href="#"> <button type="button" class="btn btn-danger">Cancel</button> </a>
            </div>
          </div>
        {{ Form::close() }}
    </div>
  </div>
</div>
@stop