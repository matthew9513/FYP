@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>RAM</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ram.create') }}"> Create New Product</a>
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
            <th>Type</th>
            <th>Speed</th>
            <th>Capacity</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($ram as $ram)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ram->name }}</td>
            <td>{{ $ram->manufacturer }}</td>
            <td>{{ $ram->type }}</td>
            <td>{{ $ram->speed }}</td>
            <td>{{ $ram->capacity }}</td>
            <td>{{ $ram->supplier }}</td>
            <td>{{ $ram->warranty }}</td>
            <td>{{ $ram->price }}</td>
            <td>
            <form action="{{ route('ram.destroy',$ram->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('ram.edit',$ram->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection