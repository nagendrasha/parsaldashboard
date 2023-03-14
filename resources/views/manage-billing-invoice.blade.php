@extends('includes.main')
@push('title')
<title>All Orders</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index.php" class="nav-link text-white" style="font-size: 20px; font-weight: bold;"> <span
            class="material-symbols-outlined">
            post_add
        </span>Finance</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <style>
        .navbar .navbar-nav .nav-link {
            color: #000000;
            font-size: 13px;
            font-weight: 400;
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

        .datepick label {
            font-size: 14px;

        }
    </style>
    <!-- Content Header (Page header) -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/not-picked">INVOICE</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/qc-faild">COD REMITTANCE</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/all-order-live">RATE CARD</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/all-order-delivered">PROFORMA INVOICE</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/all-order-returned">
                        LOST/DAMAGED SETTLEMENT</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/all-order-lost-damaged">ADJUSTMENT NOTE</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0">
                    <p>Invoice Generation Date</p>
                    <div class="row">
                        <div class="col-lg-3">
                            <form action="#" class="datepick">
                                <input type="date" id="placedate" name="date">
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn" type="button" style="background-color: #FC6A03;
                                    color: white;">Invoice Number
                                    </button>
                                </div>
                                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                                    placeholder="Type to Search">
                                <button class="btn my-2 my-sm-0 search" type="submit" style="background-color: #FC6A03;
                                color: white;">Search</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-lg-2">
                                    <a href="#" class="btn" style="background-color: #FC6A03;
                                    color: white;">ALL</a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="btn btn-outline-primary">Cleared</a>
                                </div>
                                <div class="col-lg-3">
                                    <a href="#" class="btn btn-outline-primary">Pending</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container my-3">
                        <table>
                            <tr>
                                <th>INVOICE NUMBER</th>
                                <th>DATE</th>
                                <th>ORDERS</th>
                                <th>BILL TYPE</th>
                                <th>INVOICE (₹)</th>
                                <th>CLEARED AMOUNT (₹)</th>
                                <th>ACTIONS</th>
                            </tr>
                        </table>
                        <hr>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>

@endsection
