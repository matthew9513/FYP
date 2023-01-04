@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Casing</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('casing.create') }}"> Create New Product</a>
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
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($casing as $casing)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $casing->name }}</td>
            <td>{{ $casing->manufacturer }}</td>
            <td>{{ $casing->type }}</td>
            <td>{{ $casing->supplier }}</td>
            <td>{{ $casing->warranty }}</td>
            <td>{{ $casing->price }}</td>
            <td>
            <form action="{{ route('casing.destroy',$casing->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('casing.edit',$casing->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection