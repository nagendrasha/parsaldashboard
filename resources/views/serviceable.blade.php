@extends('includes.main')

@push('title')
<title>Tools</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-home"></i> Tools</a>
</li>
@endpush

@section('main-section')
<!-- Content Wrapper. Contains page content -->

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
<div class="content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light  count">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 count-nav">
                <li class="nav-item count-item active">
                    <a class="nav-link count-link" href="/dashboard"> Rate Calculator</a>
                </li>
                <li class="nav-item count-item">
                    <a class="nav-link count-link" href="/revenue">Serviceable Pincode</a>
                </li>
            </ul>

        </div>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7">
                <div class="col-sm m-2" style="padding: 0rem 1.1rem;">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between ">
                            <div class="col-lg ">
                                <span>
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;"><span
                                            style="color:orange;">*</span> Shipment Type</p>
                                </span>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option style="color:black; font-weight: bold;">Forward</option>
                                        <option style="color:black; font-weight: bold;">Reverse</option>
                                        <option style="color:black; font-weight: bold;">Reverse with quality check
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;"><span
                                            style="color:orange;">*</span>Dimensions(cm)</p>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                                    class="glyphicon glyphicon-minus">-</span></button>
                                        </div>
                                        <input type="text" id="myNumber" class="form-control input-number" value="1" />
                                        <div class="input-group-btn">
                                            <button id="up" class="btn btn-default" onclick="up('100')"><span
                                                    class="glyphicon glyphicon-plus">+</span></button>
                                        </div>
                                    </div>
                                </div>
                                <span>
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;">Delivery Mode </p>
                                </span>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option style="color:black; font-weight: bold;">Express</option>
                                        <option style="color:black; font-weight: bold;">Heavy surface</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;">Dimensions(cm)</p>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button id="down" class="btn btn-default" onclick=" down('0')"><span
                                                    class="glyphicon glyphicon-minus">-</span></button>
                                        </div>
                                        <input type="text" id="myNumber" class="form-control input-number" value="0" />
                                        <div class="input-group-btn">
                                            <button id="up" class="btn btn-default" onclick="up('100')"><span
                                                    class="glyphicon glyphicon-plus">+</span></button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;">Dangerous Goods
                                    </p>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>

                                </div>


                            </div>
                            <div class="col-lg ">
                                <span>
                                    <p style="font-size:0.8rem; color:darkblue; font-weight: bold;"><span
                                            style="color:orange;">*</span>Pickup Pincode</p>
                                </span>
                                <input type="text" class="form-control" placeholder="123456">
                                </span>
                                <span>
                                    <p style="font-size:0.8rem; color:darkblue; font-weight: bold; margin-top: 16px;">
                                        <span style="color:orange;">*</span>Weight kg</p>
                                </span>
                                <input type="text" class="form-control" placeholder="0.5">
                                </span>
                                <span>
                                    <p style="font-size:0.8rem; color:darkblue; font-weight: bold; margin-top: 16px;">
                                        <span style="color:orange;">*</span>Product Name</p>
                                </span>
                                <input type="text" class="form-control" placeholder="Enter your product Name">
                                </span>
                                <p style="font-size:0.8rem; color: darkblue; font-weight: bold; margin-top: 100px;">Is
                                    multi package service? </p>

                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg ">
                                <span>
                                    <p style="font-size:0.8rem;  color:darkblue; font-weight: bold;"><span
                                            style="color:orange;">*</span>Destination Pincode </p>
                                </span>
                                <input type="text" class="form-control" placeholder="123456">
                                <span>
                                    <p style="font-size:0.8rem; color: darkblue; font-weight: bold;  margin-top: 16px;">
                                        Delivery Mode </p>
                                </span>
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option style="color:black; font-weight: bold;">Cod </option>
                                        <option style="color:black; font-weight: bold;">Prepaid</option>
                                    </select>
                                </div>
                                <span>
                                    <p style="font-size:0.8rem; color:darkblue; font-weight: bold; margin-top: 16px;">
                                        <span style="color:orange;">*</span>Invoice Value</p>
                                </span sty>
                                <input type="text" class="form-control" placeholder="Enter your Invoice value">
                                </span>
                                <p style="font-size:0.8rem; color: darkblue; font-weight: bold; margin-top: 100px;">Is
                                    document? </p>

                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio1" value="option1">
                                        <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                            id="inlineRadio2" value="option2">
                                        <label class="form-check-label" for="inlineRadio2">No</label>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <hr>
                        <div class="row" style="margin: 1rem 0 5.4rem 0;">
                            <div class="col-2">

                            </div>
                            <div class="col-2">

                            </div>
                            <div class="col-3 " style="margin-left: 6rem;">
                                <button type="button" class="btn btn btn-lg"
                                    style="border:1px solid black; margin-left: 5rem; font-size: 1rem;">Reset</button>

                            </div>
                            <div class="col-3">
                                <button type="button" class="btn btn-primary btn-lg" style="margin-right: -2rem; font-size: 1rem;">Calculate</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

   

        <!-- /.content-wrapper -->

        @endsection