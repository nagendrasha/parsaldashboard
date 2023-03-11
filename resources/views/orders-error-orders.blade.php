@extends('includes.main')
@push('title')
<title>All Orders</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-home"></i> All Order</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <style>
        .navbar .navbar-nav .nav-link {
            color: black;
            font-size: 1rem;
        }
        .navbar .navbar-nav .nav-link:hover {
            color:#FC6A03;
            font-size: 1rem;
        }

        .count .count-nav #count-link:hover {
            color:#FC6A03;
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
            background-color: #FC6A03;
            width: 0%;
            content: "";
            height: 4px;
            transition: all 0.5s;
        }

        .count .count-nav .count-item:hover::after {
            width: 100%;
        }

        table tr th {
            padding-left: 100px;
            font-size: 14px;
        }

        .datepick label {
            font-size: 14px;

        }
        .search{
            background-color: #FC6A03;
            color: white;
        }
    </style>
    <!-- Content Header (Page header) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/orders-channel-orders">UNFULFILLED ORDERS</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/orders-already-fulfilled">ALREADY FULFILLED</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/orders-error-orders">ERROR ORDERS</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/orders-uploads-orders">UPLOAD ORDERS</a>
                </li>
            </ul>
            <form action="#" class="datepick">
                <label for="placed-date">Placed Date</label>
                <input type="date" id="placedate" name="date">
            </form>
        </div>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-0">
                    <div class="container">
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>ORDER TIME</th>
                                <th>ERROR</th>
                            </tr>
                        </table>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
