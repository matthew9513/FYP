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
                <h2>VALORANT Build</h2>
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
            <td>AMD Ryzen 5 3600</td>
            <td>
            <form>
                    <a class="btn btn-info" href="cpu/5">Show</a>
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
            <td>Storage</td>
            <td>SAMSUNG 980 PRO PCIe NVMe Gen4 M.2 SSD</td>
            <td>
            <form>
                    <a class="btn btn-info" href="storage/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Graphics Card</td>
            <td>ASUS TUF Gaming GeForce® GTX 1660 Ti EVO OC Edition</td>
            <td>
            <form>
                    <a class="btn btn-info" href="gpu/6">Show</a>
            </form>
            </td>
        </tr>
    </table>

  <div class = "row">
    <div>
        <h3>
            Total Price : RM 3158
        </h3>
    </div>
  </div>

      
@endsection