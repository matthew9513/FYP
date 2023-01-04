@extends('layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Power Supply</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('psu.create') }}"> Create New Product</a>
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
            <th>Energy Efficient</th>
            <th>Wattage</th>
            <th>Modularity</th>
            <th>Supplier</th>
            <th>Warranty</th>
            <th>Price</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($psu as $psu)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $psu->name }}</td>
            <td>{{ $psu->manufacturer }}</td>
            <td>{{ $psu->energyEfficient }}</td>
            <td>{{ $psu->wattage }}</td>
            <td>{{ $psu->modularity }}</td>
            <td>{{ $psu->supplier }}</td>
            <td>{{ $psu->warranty }}</td>
            <td>{{ $psu->price }}</td>
            <td>
            <form action="{{ route('psu.destroy',$psu->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('psu.edit',$psu->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

  

      
@endsection