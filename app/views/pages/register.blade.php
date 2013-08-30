@extends ('templates.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="alert alert-warning">
          <p class="text-warning lead"><i class="icon-warning-sign"></i> You can use our Application for 60 days free trial.</p>
        </div>
      </div>

      <div class="col-sm-6 col-md-6 col-lg-6">
        {{ Form::open(array('url'=>'register', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}

        
          <div class="form-group">
            {{ Form::label('first_name', 'First Name', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('first_name', '', array('placeholder' => 'First Name', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('last_name', 'Last Name', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
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
            {{ Form::label('country', 'Your Country', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::select('country', array(
                'country'  => 'Select Country',
                'my'        => 'Myanmar',
                'sig'       => 'Singapore',  
              ), 'country', array('class' => 'form-control'))}}
            </div>
          </div>
         
          <div class="form-group">
            {{ Form::label('currency', 'Your Currency', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::select('currency', array(
                'currency'  => 'Select Currency',
                'kyat'      => 'Kyats',
                'dollar'    => 'US Dollar',  
              ), 'currency', array('class' => 'form-control'))}}
            </div>
          </div>
  

          <div class="form-group">
            <div class="col-lg-offset-4 col-lg-12">
              {{ Form::submit('Create My Shop', array('class' => 'btn btn-magenta')) }}
            </div>
          </div>
        {{ Form::close() }}

      </div>     
    </div>
  </div>
@stop