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
                <h2> Show Motherboard</h2>
            </div>
            <button onclick="history.back()">Go Back</button>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Socket Type</th>
                <th>Form Factor</th>
                <th>Max Memory</th>
                <th>Memory Slots</th>
                <th>Supplier</th>
                <th>Warranty</th>
                <th>Price</th>
        </tr>
        <tr>
            <td>{{ $motherboard->name }}</td>
            <td>{{ $motherboard->manufacturer }}</td>
            <td>{{ $motherboard->socketType }}</td>
            <td>{{ $motherboard->formFactor }}</td>
            <td>{{ $motherboard->memoryMax }}</td>
            <td>{{ $motherboard->memorySlots }}</td>
            <td>{{ $motherboard->supplier }}</td>
            <td>{{ $motherboard->warranty }}</td>
            <td>{{ $motherboard->price }}</td>
        </tr>

@endsection


    