@extends('templates.main')

@section('content')
<div class="container">
  <div class="row" id="main_content">

    <div class="row" id="staff_list_head">
      <div class="col-sm-12 col-md-12 col-lg-12">
          <a href="{{ URL::to('add-staff') }}"> <button type="button" class="btn btn-sm btn-success pull-right">Add New Staff</button> </a>
      </div> 
    </div>

    <div class="row" id="staff_list_body">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <table class="table table-bordered">
              <thead>
                <th> ID </th>
                <th> Name </th>
                <th> Email </th>
                <th> Permission </th>
                <th> Activation Status </th>
              </thead>
              <tbody>
                
              </tbody>
          </table>
        </div> 
    </div>

  </div>
</div>
@stop