@extends('layouts\app')

@section('content')
<style>
        .row{
            margin-left: 5px;
        }
    </style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Low Budget Build</h2>
                <button onclick="history.back()">Go Back</button>
            </div>
        </div>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th width = "300px">Parts</th>
            <th width = "300px">Name</th>
            <th width = "100px">Action</th>

        </tr>
        <tr>
            <td>Processor</td>
            <td>AMD RYZEN 3 3200G</td>
            <td>
            <form>
                    <a class="btn btn-info" href="cpu/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Motherboard</td>
            <td>ASRock A320M-DVS R4.0</td>
            <td>
            <form>
                    <a class="btn btn-info" href="motherboard/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>RAM</td>
            <td>Kingston Fury Beast 8GB</td>
            <td>
            <form>
                    <a class="btn btn-info" href="ram/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Casing</td>
            <td>Gaming Freak S92G-Prism Premium Middle Tower Case</td>
            <td>
            <form>
                    <a class="btn btn-info" href="casing/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Power Supply</td>
            <td>Silverstone Strider Essential 500w</td>
            <td>
            <form>
                    <a class="btn btn-info" href="psu/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Storage</td>
            <td>Seagate BarraCuda Desktop PC 3.5" SATA lll Internal Hard Disk Drive</td>
            <td>
            <form>
                    <a class="btn btn-info" href="storage/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Graphics Card</td>
            <td>Asus GeForce GT1030 2GB GDDR5 Graphics Card</td>
            <td>
            <form>
                    <a class="btn btn-info" href="gpu/1">Show</a>
            </form>
            </td>
        </tr>
    </table>

  <div class = "row">
    <div>
        <h3>
            Total Price : RM 1559
        </h3>
    </div>
  </div>

      
@endsection