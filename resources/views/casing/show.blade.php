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
                <h2> Show Casing</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Type</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $casing->name }}</td>
            <td>{{ $casing->manufacturer }}</td>
            <td>{{ $casing->type }}</td>
            <td>{{ $casing->supplier }}</td>
            <td>{{ $casing->warranty }}</td>
            <td>{{ $casing->price }}</td>
        </tr>

@endsection
