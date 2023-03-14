@extends('includes.main')
@push('title')
<title>Dashboard</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link text-light" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-wallet"></i> Wallet</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <style>
        .navbar .navbar-nav .nav-link {
            color: #000000;
            font-size: 1.1em;
        }

        .count .count-nav #count-link:hover {
            color: #000000;
        }

        .count .count-nav .count-item {
            position: relative;
        }

        .count .count-nav .count-item::after {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            background-color: #000000;
            width: 0%;
            content: "";
            height: 4px;
            transition: all 0.5s;
        }

        .count .count-nav .count-item:hover::after {
            width: 100%;
        }
        table tr th {
            padding-left: 50px;
            font-size: 14px;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                <li class="nav-item count-item active">
                    <a class="nav-link count-link" href="/wallet-overview">RECHARGE</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/revenue">DEDUCATION HISTORY</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link " href="/orderstatus">TRANSITION HISTORY</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="container">
                                <table>
                                    <tr>
                                        <th>TRANSACTION AMOUNT (₹)</th>
                                        <th>TRANSACTION TYPE</th>
                                        <th>DATE</th>
                                        <th>REMARKS</th>
                                        <th>TRANSACTION ID</th>
                                        <th>TRANSACTION STATUS</th>
                                    </tr>
                                </table>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->

@endsection
