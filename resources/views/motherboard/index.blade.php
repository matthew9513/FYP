@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Motherboard</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('motherboard.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Manufacturer</th>
            <th>Socket Type</th>
            <th>Form Factor</th>
            <th>Max Memory</th>
            <th>Memory Slots</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($motherboard as $motherboard)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $motherboard->name }}</td>
            <td>{{ $motherboard->manufacturer }}</td>
            <td>{{ $motherboard->socketType }}</td>
            <td>{{ $motherboard->formFactor }}</td>
            <td>{{ $motherboard->memoryMax }}</td>
            <td>{{ $motherboard->memorySlots }}</td>
            <td>{{ $motherboard->supplier }}</td>
            <td>{{ $motherboard->warranty }}</td>
            <td>{{ $motherboard->price }}</td>
            <td>
            <form action="{{ route('motherboard.destroy',$motherboard->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('motherboard.show',$motherboard->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('motherboard.edit',$motherboard->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection