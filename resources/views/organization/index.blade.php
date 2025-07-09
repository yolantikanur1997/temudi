@extends('layout')

@section('title', 'Organisasi')

@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Organisasi</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('setting/organization')}}">Organisasi</a></li>
                <li class="breadcrumb-item active" aria-current="page">List
                </li>
            </ol>
        </nav>
    </div>
</section>

<section class="row">
    <div class="card">
        <div class="card-body">
            
            <div class="table-responsive">
            <table class="table" id="organization_table">
                <thead>
                    <tr>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Nomor Handphone</td>
                        <td>Tanggal Dibuat</td>
                    </tr>
                </thead>
            </table>
            </div>
           
        </div>

    </div>
</section>

 
@endsection

@section('page-script')
    <script src="{{asset('assets/js_custom/index_organization.js')}}?v={{ time() }}"></script>
@endsection