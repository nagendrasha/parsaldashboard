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
            <form class="form-inline my-2 my-lg-0 " style="flex-direction: column;display: flex; color: black;">
                <h5>Placed Date</h5>
                <a href="#"><button type="button" class="btn btn-outline-secondary">3/7/2023 - 4/3/2023
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-calendar" viewBox="0 0 16 16">
                            <path
                                d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                        </svg></button>
                </a>
            </form>
        </div>
    </nav>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row">
                                <div class="col-lg-4" style="border-right: 1px solid black;">
                                    <div class="d-flex justify-content-between">
                                        <p>Balance details</p>
                                    </div>
                                    <!-- balance place holder area -->
                                    <div>

                                    </div>
                                    <img src="dist/img/wallet.svg" alt="" width="200px">
                                    <a href="#" style="text-align: center;">TERMS & CONDITIONS</a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="d-flex justify-content-between">
                                        <p>Recharge your Pickrr Wallet</p>
                                    </div>
                                    <div class="card bg-gray pt-3 pb-3">
                                        <div class="card-header border-0">
                                            <p>Enter your amount to recharge</p>
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="amountInput"
                                                        aria-describedby="amount" placeholder="₹">
                                                </div>
                                                <p>Have a coupon? Enter code to validate
                                                </p>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-success bg-light"
                                                            type="button">Validate</button>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary w-100">Recharge
                                                    Now</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <p style="color: red;"> <span class="material-symbols-outlined" style="color: red;">
                                        star_rate_half
                                    </span>Available Offers</p>
                            </div>
                            <ul>
                                <li>First Recharge Offer! Pay ₹500/- & get ₹600/- in your Parsal wallet. 20%
                                    cashback offer. *T&C Apply With code:'PARSAL100'</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <p>NEFT Payment - Bank details
                                </p>
                            </div>
                            <ul>
                            </ul>
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
