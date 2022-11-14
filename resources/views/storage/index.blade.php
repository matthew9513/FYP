@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Storage</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('storage.create') }}"> Create New Product</a>
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
            <th>Form Factor</th>
            <th>Capacity</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($storage as $storage)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $storage->name }}</td>
            <td>{{ $storage->manufacturer }}</td>
            <td>{{ $storage->type }}</td>
            <td>{{ $storage->formFactor }}</td>
            <td>{{ $storage->capacity }}</td>
            <td>{{ $storage->supplier }}</td>
            <td>{{ $storage->warranty }}</td>
            <td>{{ $storage->price }}</td>
            <td>
            <form action="{{ route('storage.destroy',$storage->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('storage.show',$storage->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('storage.edit',$storage->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection