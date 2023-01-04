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
                <h2>High Budget Build</h2>
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
            <td>INTEL CORE I7 10700K</td>
            <td>
            <form>
                    <a class="btn btn-info" href="cpu/4">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Motherboard</td>
            <td>ASROCK Z590 STEEL LEGEND</td>
            <td>
            <form>
                    <a class="btn btn-info" href="motherboard/4">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>RAM</td>
            <td>ADATA XPG SPECTRIX D41 RGB 3200MHZ</td>
            <td>
            <form>
                    <a class="btn btn-info" href="ram/3">Show</a>
            </form>
            </td>
        </tr>
        <tr>
            <td>Casing</td>
            <td>AIGO DarkFlash LEO Tempered Glass Casing</td>
            <td>
            <form>
                    <a class="btn btn-info" href="casing/3">Show</a>
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
            <td>ASUS TUF RTX 3070 O8G V2 GAMING</td>
            <td>
            <form>
                    <a class="btn btn-info" href="gpu/4">Show</a>
            </form>
            </td>
        </tr>
    </table>

  <div class = "row">
    <div>
        <h3>
            Total Price : RM 6084
        </h3>
    </div>
  </div>

      
@endsection