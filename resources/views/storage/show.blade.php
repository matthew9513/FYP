@extends('layouts\app')
  
  @section('content')
  
      <style>
          .row{
              margin-left: 5px;
          }
      </style>
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left" >
                  <h2> Show Storage</h2>
              </div>
              <button onclick="history.back()">Go Back</button>
          </div>
      </div>
     
      <table class="table table-bordered">
          <tr>
                  <th>Name</th>
                  <th>Manufacturer</th>
                  <th>Type</th>
                  <th>Form Factor</th>
                  <th>Capacity</th>
                  <th>Supplier</th>
                  <th>Warranty</th>
                  <th>Price</th>
          </tr>
          <tr>
              <td>{{ $storage->name }}</td>
              <td>{{ $storage->manufacturer }}</td>
              <td>{{ $storage->type }}</td>
              <td>{{ $storage->formFactor }}</td>
              <td>{{ $storage->capacity }}</td>
              <td>{{ $storage->supplier }}</td>
              <td>{{ $storage->warranty }}</td>
              <td>{{ $storage->price }}</td>
          </tr>
  
  @endsection
  