@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CPU</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cpu.create') }}"> Create New Product</a>
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
            <th>Number of cores</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cpu as $cpu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cpu->name }}</td>
            <td>{{ $cpu->manufacturer }}</td>
            <td>{{ $cpu->coreNumbers }}</td>
            <td>{{ $cpu->supplier }}</td>
            <td>{{ $cpu->warranty }}</td>
            <td>{{ $cpu->price }}</td>
            <td>
            <form action="{{ route('cpu.destroy',$cpu->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cpu.show',$cpu->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('cpu.edit',$cpu->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection