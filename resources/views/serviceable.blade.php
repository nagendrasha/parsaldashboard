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

</div>



        <!-- /.content-wrapper -->

        @endsection
