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
                <h2> Show Power Supply</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Energy Efficient</th>
                <th>Wattage</th>
                <th>Modularity</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $psu->name }}</td>
            <td>{{ $psu->manufacturer }}</td>
            <td>{{ $psu->energyEfficient }}</td>
            <td>{{ $psu->wattage }}</td>
            <td>{{ $psu->modularity }}</td>
            <td>{{ $psu->supplier }}</td>
            <td>{{ $psu->warranty }}</td>
            <td>{{ $psu->price }}</td>
        </tr>

@endsection

