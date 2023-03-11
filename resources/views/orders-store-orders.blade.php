@extends('includes.main')
@push('title')
<title>All Orders</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index.php" class="nav-link text-light" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-box"></i> All Order</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <style>
        table tr th {
            padding-left: 100px;
            font-size: 14px;
        }
        .btn{
            background-color: #FC6A03;
            color: white;
        }
    </style>


    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row pt-2">
                <div class="col-lg-6">
                    <a href="#" class="btn">ALL</a>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-4">
                    <form>
                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-sm">Pickup Address</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm" placeholder="Type to Search">
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">

                </div>
                <div class="col-lg-2">
                    <a href="#" class="btn btn-primary">Scan or Paste AWBs</a>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th>ADDRESS INFO</th>
                <th>TOTAL UPLOADED</th>
                <th>PLACED</th>
                <th>MANIFESTED</th>
                <th>DISPATCHED</th>
            </tr>
        </table>
        <hr>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
