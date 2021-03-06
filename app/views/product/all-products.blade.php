@extends('templates.main')
@section('content')
	<div class="container">
    	<div class="row">
      		<div id="slider">
            <div class="panel panel-default top">
              <!-- Default panel contents -->
              <div class="panel-heading" >Products</div>
              <!-- Table -->
              @if(count($products) > 0)
             
              <table class="table">
                <tr class="page-header">
                  <th><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></th>
                  <th>No</th>
                  <th>Product Name</th>
                  <th>Categories</th>
                  <th>Suppliers</th>
                  <th>Cost Price</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                  <th>Reorder Level</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                @foreach ($products as $product)
                <tr>
                  <td><input type="checkbox" class="checkbox.inline" name="checkbox" value=""></td>
                 
                  <td>{{ $product->id }}</td>
                  <td>{{ $product->product_name }}</td>
                  <td>{{ $product->categories }}</td>
                  <td>{{ $product->suppliers }}</td>
                  <td>{{ $product->cost_price }}</td>
                  <td>{{ $product->unit_price }}</td>
                  <td>{{ $product->quantity}}</td>
                  <td>{{ $product->reorder_level }}</td>
                  <td>
                    <a href="././edit-product/{{ $product->id }}" class="show.bs.modal">edit</a>
                  </td>
                  <td><a href="././delete-product/{{ $product->id }}" class="show.bs.modal">delete</a></td>
                </tr>
                @endforeach
               </table>
              
              @else
                <h1>No Data</h1>
              @endif

            </div>
            <div class="text-center">
              {{ $products->links(); }}
             <!-- <ul class="pagination pagination-sm"> -->
                <!-- <li></li> -->
                <!-- <li><a href="#">&laquo;</a></li> -->
                <!-- <li></li> -->
                <!-- <li><a href="#">&raquo;</a></li> -->
              <!-- </ul> -->
            </div>
        	</div>
        </div>
    </div>
@stop