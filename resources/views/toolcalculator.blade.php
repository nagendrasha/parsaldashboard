@extends('includes.main')

@push('title')
<title>dashboard</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-home"></i> dashboard</a>
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

    <div class="row">
        <div class="col-7">
            <div class="col-sm m-2" style="padding: 0rem 1.1rem;">
                <div class="card">
                    <div class="card-body d-flex justify-content-between text-center ">
                        <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                            <span>
                                <p style="font-size:1.1rem; ">* Package/Shipment Type</p>
                            </span>
                            
                        </div>
                        <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                            <span>
                                <p style="font-size:1.1rem; ">Not Picked</p>
                            </span>



                        </div>
                        <div class="col-lg " style="border-right: 1px solid #a8a1a1;">
                            <span>
                                <p style="font-size:1.1rem; ">Live</p>
                            </span>
                            


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <h2>hello </h2>
        </div>

    </div>

</div>


<!-- /.content-wrapper -->

@endsection