@extends('layout')

@section('title', 'Pelanggan')

@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Pelanggan</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('customer')}}">Pelanggan</a></li>
                <li class="breadcrumb-item active" aria-current="page">List
                </li>
            </ol>
        </nav>
    </div>
</section>

<section class="row mb-2">
    <div class="col-12 d-flex justify-content-end">
        <a href="{{url('customer/create')}}" class="btn btn-primary d-flex align-items-center">
            <i class="bi bi-plus me-1"></i> Tambah
        </a>
    </div>
</section>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<section class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="table-responsive">
            <table class="table" id="customer_table">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Nomor Handphone</td>
                        <td>Status</td>
                        <td>Tanggal Dibuat</td>
                    </tr>
                </thead>
            </table>
            </div>
           
        </div>
    </div>

    </div>
</section>
@endsection

@section('page-script')
    <script src="{{asset('assets/js_custom/index_customer.js')}}?v={{ time() }}"></script>
@endsection