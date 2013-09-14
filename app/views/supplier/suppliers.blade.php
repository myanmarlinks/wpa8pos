@extends('templates.main')
@section('content')
	<div class="container">
    	<div class="row">
      		<div id="slider">
            <div class="panel panel-default top">
              <!-- Default panel contents -->
              <div class="panel-heading" >Suppliers</div>
              <!-- Table -->
              @if(count($suppliers) > 0)
             
              <table class="table">
                <tr class="page-header">
                  <th><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></th>
                  <th>No</th>
                  <th>Company Name</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Address 1</th>
                  <th>Address 2</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                @foreach ($suppliers as $supplier)
                <tr>
                  <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                 
                  <td>{{ $supplier->id }}</td>
                  <td>{{ $supplier->company_name }}</td>
                  <td>{{ $supplier->first_name }}</td>
                  <td>{{ $supplier->last_name }}</td>
                  <td>{{ $supplier->email }}</td>
                  <td>{{ $supplier->phone_number }}</td>
                  <td>{{ $supplier->address_1}}</td>
                  <td>{{ $supplier->address_2 }}</td>
                  <td><a href={{ $supplier->id }} class="show.bs.modal">edit</a></td>
                  <td><a href={{ $supplier->id }} class="show.bs.modal">delete</a></td>
                </tr>
                @endforeach
               </table>
               
              @else
                <h1>No Data</h1>
              @endif
            </div>
            <div class="text-center">
              {{ $suppliers->links(); }}
            </div>
        	</div>
        </div>
    </div>
@stop