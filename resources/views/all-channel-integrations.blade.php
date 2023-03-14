@extends('includes.main')
@push('title')
<title>Dashboard</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
    <a href="#" class="nav-link text-light" style="font-size: 20px; font-weight: bold;"> <i
            class="nav-icon fas fa-link"></i> Integrations</a>
</li>
@endpush
@section('main-section')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <a href="#" class="btn my-3 mr-3" style="background-color: #FC6A03; color: white; float: right;">Add New Channel</a>
        <br>
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="container">
                                <h3 class="text-center">Integrate your channel to sync all orders</h3>
                                <img src="/img/all-channel.png" alt="" class="m-auto d-block">
                                <h5 class="text-center"><a href="#" class="text-dark">Click here to add a new channel!</a></h5>
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
