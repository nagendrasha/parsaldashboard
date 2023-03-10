@extends('includes.main')
@push('title')
<title>Orders</title>
@endpush
@push('name')
<li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link" style="font-size: 20px; font-weight: bold;"> <i class="nav-icon fas fa-home"></i> Order</a>
</li>
@endpush
@section('main-section')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <img src="/img/order.png" alt="" class="m-auto d-block pt-5">
        <h2 class="text-center my-3">Please complete your KYC to start placing orders</h2>
        <div class="col text-center">
            <button class="btn btn-primary"><a href="#" class="text-light">GO TO KYC PAGE</a></button>
        </div>
        <!-- /.container-fluid -->
    </div>

</div>
<!-- /.content-wrapper -->

@endsection
