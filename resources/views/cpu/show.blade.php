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
                <h2> Show CPU</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Number of cores</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $cpu->name }}</td>
            <td>{{ $cpu->manufacturer }}</td>
            <td>{{ $cpu->coreNumbers }}</td>
            <td>{{ $cpu->supplier }}</td>
            <td>{{ $cpu->warranty }}</td>
            <td>{{ $cpu->price }}</td>
        </tr>

@endsection