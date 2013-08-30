@extends ('templates.main')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-8 col-lg-8" id="slider">
        <div id="carousel-example-generic" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="img/pic2.jpg" class="img-responsive" alt="Responsive image">
            </div>
            <div class="item">
              <img src="img/pic1.jpg" class="img-responsive" alt="Responsive image">
            </div>
          </div>
         

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="icon-next"></span>
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 col-lg-4">
        
         {{ Form::open(array('url'=>'/', 'method' => 'post', 'role'=>'form'))}}
          <fieldset>
            <legend class="text-center">{{ Lang::get('langs.welcome') }}</legend>
              <div class="form-group">
                {{ Form::label('email', 'Email Address') }}
                {{ Form::text('email', '', array('placeholder' => 'Enter Email Address', 'class' => 'form-control')) }}
              </div>
              <div class="form-group">
                {{ Form::label('password', 'Pasword') }}
                {{ Form::password('password', array('placeholder' => 'Enter Password', 'class' => 'form-control')) }}
              </div>
              {{ Form::submit('Login', array('class' => 'btn btn-magenta')) }}
          </fieldset>
        {{ Form::close() }}
      </div>
    </div>
    <hr>
  
    <div class="row">
      <div class="col-sm-4 col-md-4 right-border">
          <p class="lead"> Beautiful and Useful Software</p>
          <br>
          <p> <span class="label label-danger">MMPOS</span> is easy to setup and a joty to use, you can get started in munutes, and because it's could software, you always have the latest features, and never worry about backing up your data again </p>
      </div>
      <div class="col-sm-4 col-md-4 right-border">
          <p class="lead">Design For Any Business</p>
          <br>
          <p> <span class="label label-danger">MMPOS</span> works in any size or type of retail business, anywhere in the world. It also works on any computer or any tablets</p>
      </div>
      <div class="col-sm-4 col-md-4">
         <p class="lead"> Amazing Customer Service</p>
          <br>
          <p> <span class="label label-danger">MMPOS</span> is not you ordinary company, we pride ourselves on offering extraordinary, measurable customer support. In addition, we provide a community of trusted reselllers and advisors all over the world. </p>
      </div>
    </div>
  </div>
  <script>
    $('.carousel').carousel()
  </script>
@stop