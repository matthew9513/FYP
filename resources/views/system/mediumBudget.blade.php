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
                <h2>Medium Budget Build</h2>
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
            <td>INTEL CORE I5 10400F</td>
            <td>
            <form>
                    <a class="btn btn-info" href="cpu/2">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Motherboard</td>
            <td>MSI H510M Bomber</td>
            <td>
            <form>
                    <a class="btn btn-info" href="motherboard/2">Show</a>
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
            <td>Gaming Freak S92G-Prism Premium Middle Tower Case</td>
            <td>
            <form>
                    <a class="btn btn-info" href="casing/1">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Power Supply</td>
            <td>CORSAIR PSU CV650</td>
            <td>
            <form>
                    <a class="btn btn-info" href="psu/2">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Storage No.1</td>
            <td>SAMSUNG SSD M.2 980</td>
            <td>
            <form>
                    <a class="btn btn-info" href="storage/2">Show</a>
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
            <td>Gigabyte NVIDIA GeForce RTX3060 GAMING OC 12GB</td>
            <td>
            <form>
                    <a class="btn btn-info" href="gpu/2">Show</a>
            </form>
            </td>
        </tr>
    </table>

  <div class = "row">
    <div>
        <h3>
            Total Price : RM 3492
        </h3>
    </div>
  </div>

      
@endsection