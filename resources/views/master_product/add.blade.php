@extends('layout')

@section('title', 'Tambah Kategori Produk')


@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Tambah Katergori Produk</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('produk/kategori')}}">Kategori Produk</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah
                </li>
            </ol>
        </nav>
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
                    
                     <form action="{{ url('') }}" method="POST" id="form-add">
                                @csrf
                                @method('PUT')                                                     
                                    <div class="sticky-save-btn">
                                    <button type="button" class="btn btn-primary" id="btn-save"><i class="bi bi-save me-2"></i>Simpan</button>
                                </div> 
                                <!-- tipe and active -->
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" name="type" id="type">
                                                </div>
                                            </div>

                                    </div>

                                
                                </div>
                                <!-- tipe and active -->
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </section>
    @endsection

@section('page-script')
    <script src="{{asset('assets/js_custom/edit_organization.js')}}?v={{ time() }}"></script>
@endsection

