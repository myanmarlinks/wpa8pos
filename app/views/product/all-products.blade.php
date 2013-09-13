@extends('templates.main')
@section('content')
	<div class="container">
    	<div class="row">
      		<div id="slider">
         
      			<div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Products</div>
              <!-- Table -->
              @if(count($products) > 0)
              <table class="table">
                <tr class="page-header">
                  <th><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></th>
                  <th>Product Name</th>
                  <th>Categories</th>
                  <th>Suppliers</th>
                  <th>Cost Price</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                  <th>Reorder Level</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                <tr>
                  <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Super Coffeemix</td>
                  <td>Coffee</td>
                  <td>Super</td>
                  <td>2500</td>
                  <td>2800</td>
                  <td>300</td>
                  <td><span class="label label-success">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Premiere</td>
                  <td>Coffee</td>
                  <td>Premiere</td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>20</td>
                  <td><span class="label label-warning">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                  <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Premiere</td>
                  <td>Coffee</td>
                  <td>Premiere</td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>20</td>
                  <td><span class="label label-warning">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                   <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Premiere</td>
                  <td>Coffee</td>
                  <td>Premiere</td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>20</td>
                  <td><span class="label label-warning">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                   <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Premiere</td>
                  <td>Coffee</td>
                  <td>Premiere</td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>20</td>
                  <td><span class="label label-warning">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                   <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Super Coffeemix</td>
                  <td>Coffee</td>
                  <td>Super</td>
                  <td>2500</td>
                  <td>2800</td>
                  <td>300</td>
                  <td><span class="label label-success">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                   <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Super Coffeemix</td>
                  <td>Coffee</td>
                  <td>Super</td>
                  <td>2500</td>
                  <td>2800</td>
                  <td>300</td>
                  <td><span class="label label-success">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
                <tr>
                   <td><input type="checkbox" class="checkbox.inline" name="vehicle" value=""></td>
                  <td>Premiere</td>
                  <td>Coffee</td>
                  <td>Premiere</td>
                  <td>2700</td>
                  <td>2900</td>
                  <td>20</td>
                  <td><span class="label label-warning">50</span></td>
                  <td>Puzundaung</td>
                  <td>popular</td>
                  <td><a href="#" class="show.bs.modal">edit</a></td>
                  <td><a href="#" class="show.bs.modal">delete</a></td>
                </tr>
              </table>
              @else
                <h1>No Data</h1>
              @endif
            </div>
            <div class="text-center">
              <ul class="pagination pagination-sm text-center">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
        	</div>
        </div>
    </div>
@stop