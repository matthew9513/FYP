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
                <h2> Show Graphics Card</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Memory</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $gpu->name }}</td>
            <td>{{ $gpu->manufacturer }}</td>
            <td>{{ $gpu->memory }}</td>
            <td>{{ $gpu->supplier }}</td>
            <td>{{ $gpu->warranty }}</td>
            <td>{{ $gpu->price }}</td>
        </tr>

@endsection
