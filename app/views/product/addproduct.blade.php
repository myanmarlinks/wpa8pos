@extends('templates.main')

@section('content')
<div class="container">
  <div class="row" id="main_content">
    <div class="col-sm-12 col-md-12 col-lg-12" id="product">
<<<<<<< HEAD
      <div class="col-md-6 col-md-offset-3">
        {{ Form::open(array('url'=>'register', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}
=======
      <div class="col-sm-6 col-md-6 col-lg-6">
        {{ Form::open(array('url'=>'addproduct', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061

        
          <div class="form-group">
              
            {{ Form::label('product_name', 'Product Name', array('class' => 'col-lg-4 control-label')) }} 
              
            <div class="col-lg-8">
              {{ Form::text('product_name', '', array('placeholder' => 'Product Name', 'class' => 'form-control')) }}
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('categories', 'Categories', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::text('categories', '', array('placeholder' => 'Categories', 'class' => 'form-control')) }}
            </div>
          </div>
          
           <div class="form-group">
            {{ Form::label('suppliers', 'Suppliers', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::select('products', array(
                 
                $products = products::lists('products');
                
              ), 'products', array('class' => 'form-control'))}}
=======
              {{ Form::select('suppliers', array(
                'suppliers'  => 'Select Supplier',
                
              ), 'suppliers', array('class' => 'form-control'))}}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('cost_price', 'Cost Price', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::text('cost_price', '', array('placeholder' => 'Cost Price', 'class' => 'form-control')) }}
=======
              {{ Form::email('cost_price', '', array('placeholder' => 'Cost Price', 'class' => 'form-control')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('unit_price', 'Unit Price', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::text('unit_price', '', array('placeholder' => 'Unit Price', 'class' => 'form-control')) }}
=======
              {{ Form::password('unit_price', array('placeholder' => 'Unit Price', 'class' => 'form-control')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('quantity', 'Quantity', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::text('quantity', '', array('placeholder' => 'Quantity', 'class' => 'form-control')) }}
=======
              {{ Form::password('quantity', array('placeholder' => 'Quantity', 'class' => 'form-control')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('reorder_level', 'Reorder Level', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::text('reorder_level', '', array('placeholder' => 'Reorder Level', 'class' => 'form-control')) }}
=======
              {{ Form::password('reorder_level', array('placeholder' => 'Reorder Level', 'class' => 'form-control')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('location', 'Location', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
<<<<<<< HEAD
              {{ Form::text('location', '', array('placeholder' => 'Location', 'class' => 'form-control')) }}
=======
              {{ Form::password('location', array('placeholder' => 'Location', 'class' => 'form-control')) }}
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
            </div>
          </div>

          <div class="form-group">
            {{ Form::label('description', 'Description', array('class' => 'col-lg-4 control-label')) }} 
            <div class="col-lg-8">
              {{ Form::textarea('description', '', array('placeholder' => 'Description', 'class' => 'form-control','row' => '2')) }}
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
@stop
<<<<<<< HEAD
 
=======
 
>>>>>>> 75b2a2fccea5b5ee5f017e4923cbe4a311159061
