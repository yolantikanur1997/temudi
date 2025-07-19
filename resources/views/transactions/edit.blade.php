@extends('layout')

@section('title', 'Edit Pelanggan')


@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Edit Pelanggan</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('customer')}}">Pelanggan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit
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
                    
                     <form action="{{ url('customer/'.$customer->id) }}" method="POST" id="form-edit">
                                @csrf                                                  
                                    <div class="sticky-save-btn">
                                    <button type="button" class="btn btn-primary" id="btn-save"><i class="bi bi-save me-2"></i>Simpan</button>
                                </div> 
                                <!-- name and type -->
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Nama</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control required maxlength" data-required="Nama" name="name" id="name" placeholder="Nama" value="{{ old('name', $customer->name) }}" data-maxlength="100">
                                                </div>
                                            </div>

                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Email</label>
                                                </div>
                                                <div class="col-lg-9">
                                                     <input type="email" class="form-control maxlength" data-maxlength="100" data-required="Nama" name="email" id="email" placeholder="Email" value="{{ $customer?->email??'' }}">
                                                </div>
                                            </div>

                                    </div>                                
                                </div>
                                <!-- name and type -->

                                <!-- price and notes -->
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Nomor Handphone</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control phone-format maxlength" data-required="Nomor Handphone" data-maxlength="30" name="phone_number" id="phone_number" placeholder="Nomor Handphone" value="{{ $customer?->phone_number??'' }}">
                                                </div>
                                            </div>

                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                          
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Aktif</label>
                                                </div>
                                                <div class="col-lg-9">
                                                  <div class="form-check form-switch">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            id="active"
                                                            name="active"
                                                            {{ $customer->active ? 'checked' : '' }}>
                                                        <!-- <label class="form-check-label" for="active">Aktif?</label> -->
                                                    </div>
                                                </div>
                                            </div>                                
                                        

                                    </div>                                
                                </div>
                                <!-- price and notes -->
                                                    <!-- active -->
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">   
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="notes" class="form-label mb-0">Catatan</label>
                                                </div>
                                                <div class="col-lg-9">
                                                    <textarea class="form-control maxlength" data-maxlength="500" name="notes" id="notes" rows="3" placeholder="Catatan">{{ $customer?->notes??'' }}</textarea>
                                                </div>
                                            </div>
                                    </div>              
                                </div>
                                <!-- active -->
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </section>
    @endsection

@section('page-script')
    <script src="{{asset('assets/js_custom/edit_customer.js')}}?v={{ time() }}"></script>
@endsection

