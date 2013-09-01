@extends('templates.main')

@section('content')
<div class="container">
  <div class="row" id="main_content">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        {{ Form::open(array('url'=>'add-staff', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}

        
          <div class="form-group form-inline">   
            {{ Form::label('display_name', 'Display Name', array('class' => 'col-lg-4 control-label')) }} 
              
            <div class="col-lg-4">
              {{ Form::text('first_name', '', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
            </div>
            <div class="col-lg-4">
              {{ Form::text('last_name', '', array('placeholder' => 'Last Name', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('email', 'Email', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::email('email', '', array('placeholder' => 'Email', 'class' => 'form-control')) }}
            </div>
          </div>
          
           <div class="form-group">
            {{ Form::label('password', 'Password', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::password('password', array('placeholder' => 'Password', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('cfmpassword', 'Confirm Password', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::password('cfmpassword', array('placeholder' => 'Confirm Password', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('biography', 'Biography', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('biography', '', array('placeholder' => 'Description', 'class' => 'form-control','row' => '2')) }}
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