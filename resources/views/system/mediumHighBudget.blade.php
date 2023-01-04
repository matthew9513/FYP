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
                <h2>Medium High Budget Build</h2>
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
            <td>AMD Ryzen 5 5600X</td>
            <td>
            <form>
                    <a class="btn btn-info" href="cpu/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Motherboard</td>
            <td>GIGABYTE B550M DS3H ULTRA DURABLE</td>
            <td>
            <form>
                    <a class="btn btn-info" href="motherboard/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>RAM</td>
            <td>ADATA XPG SPECTRIX D41 RGB 3200MHZ</td>
            <td>
            <form>
                    <a class="btn btn-info" href="ram/2">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Casing</td>
            <td>1st Player Trilobite T3 Black</td>
            <td>
            <form>
                    <a class="btn btn-info" href="casing/2">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Power Supply</td>
            <td>CORSAIR PSU RM750</td>
            <td>
            <form>
                    <a class="btn btn-info" href="psu/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Storage No.1</td>
            <td>SAMSUNG 980 PRO PCIe NVMe Gen4 M.2 SSD</td>
            <td>
            <form>
                    <a class="btn btn-info" href="storage/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Storage No.2</td>
            <td>Seagate BarraCuda Desktop PC 3.5" SATA lll Internal Hard Disk Drive</td>
            <td>
            <form>
                    <a class="btn btn-info" href="storage/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Graphics Card</td>
            <td>GALAX NVIDIA GeForce RTX 3070</td>
            <td>
            <form>
                    <a class="btn btn-info" href="gpu/3">Show</a>
            </form>
            </td>
        </tr>
    </table>

  <div class = "row">
    <div>
        <h3>
            Total Price : RM 4803
        </h3>
    </div>
  </div>

      
@endsection