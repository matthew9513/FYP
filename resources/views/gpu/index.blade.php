@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Graphics Card</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('gpu.create') }}"> Create New Product</a>
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
            <th>Memory</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($gpu as $gpu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $gpu->name }}</td>
            <td>{{ $gpu->manufacturer }}</td>
            <td>{{ $gpu->memory }}</td>
            <td>{{ $gpu->supplier }}</td>
            <td>{{ $gpu->warranty }}</td>
            <td>{{ $gpu->price }}</td>
            <td>
            <form action="{{ route('gpu.destroy',$gpu->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('gpu.edit',$gpu->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection