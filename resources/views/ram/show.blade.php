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
                <h2> Show RAM</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Type</th>
                <th>Speed</th>
                <th>Capacity</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $ram->name }}</td>
            <td>{{ $ram->manufacturer }}</td>
            <td>{{ $ram->type }}</td>
            <td>{{ $ram->speed }}</td>
            <td>{{ $ram->capacity }}</td>
            <td>{{ $ram->supplier }}</td>
            <td>{{ $ram->warranty }}</td>
            <td>{{ $ram->price }}</td>
        </tr>

@endsection

