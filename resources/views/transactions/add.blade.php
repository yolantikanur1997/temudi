@extends('layout')

@section('title', 'Tambah Transaksi')

 <style>
    /* Optional: Untuk mengatur lebar legend fieldset */
    legend.float-none {
        width: auto;
        padding: 0 10px;
    }
    /* Style untuk Autocomplete */
    .ui-autocomplete {
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
        z-index: 1051; /* Pastikan di atas modal jika modal digunakan */
    }
</style>

@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Tambah Transaksi</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('customer')}}">Transaksi</a></li>
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
                    
                     <form action="{{url('transaction/store')}}" method="POST" id="form-add">
                                @csrf                                                  
                                <div class="sticky-save-btn">
                                    <button type="button" class="btn btn-success btn-save" id="btn-save-print" value="save-and-print"><i class="bi bi-printer me-2"></i>Cetak & Simpan</button>
                                    <button type="button" class="btn btn-primary btn-save" id="btn-save" value="save"><i class="bi bi-save me-2"></i>Simpan</button>
                                </div>
                                
                        <div class="row">
                        <div class="col-md-6">
                            <fieldset class="border p-3 mb-4">
                                <legend class="float-none w-auto px-2">Transaksi</legend>
                                <!-- <div class="mb-3">
                                    <h5 for="created_by" class="form-label text-end"><i class="bi bi-file-person"></i> {{auth()->user()?->name}}</h5>
                                </div> -->
                                
                                <div class="mb-3">
                                    <label for="doc_num" class="form-label">Nomor Transaksi</label>
                                    <input type="text" class="form-control" id="doc_num" name="doc_num" value="{{$doc_num}}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Tanggal Transaksi</label>
                                    <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d') }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Catatan</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Catatan" style="height: 150px;"></textarea>
                                </div>
                                
                            </fieldset>

                            
                        </div>

                        <div class="col-md-6">
                            <fieldset class="border p-3 mb-4">
                                <legend class="float-none w-auto px-2">Pelanggan</legend>
                                <div class="mb-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_option" id="existingCustomer" value="existing" checked>
                                        <label class="form-check-label" for="existingCustomer">List Pelanggan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="customer_option" id="newCustomer" value="new">
                                        <label class="form-check-label" for="newCustomer">Pelanggan Baru</label>
                                    </div>
                                </div>

                                <div id="existingCustomerFields">
                                    <div class="mb-3">
                                        <label for="customer_id" class="form-label">Nama</label>
                                        <select class="form-select select2" id="customer_id" name="customer_id" data-required="Pilih Pelanggan">
                                            <option value="">Pilih Pelanggan</option>
                                            @foreach ($customers as $customer)
                                                <option value="{{$customer->id}}" data-email="{{$customer?->email}}" data-phone="{{$customer?->phone_number}}" data-address="{{$customer?->address}}">{{$customer->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="existing_customer_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="existing_customer_email" placeholder="Email Pelanggan" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="existing_customer_phone" class="form-label">Nomor Handphone</label>
                                        <input type="text" class="form-control" id="existing_customer_phone" placeholder="Nomor Handphone pelanggan" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="existing_customer_address" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="existing_customer_address" rows="3" placeholder="Alamat Pelanggan" readonly></textarea>
                                    </div>
                                </div>

                                <div id="newCustomerFields" style="display: none;">
                                    <div class="mb-3">
                                        <label for="new_customer_name" class="form-label">Nama</label>
                                        <input type="text" class="form-control maxlength" id="new_customer_name" name="new_customer_name" placeholder="Masukan Nama Pelanggan Baru" data-required="Nama Pelanggan Baru" data-maxlength="100">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_customer_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="new_customer_email" name="new_customer_email" placeholder="Masukan Email Pelanggan Baru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_customer_phone" class="form-label">Nomor Handphone</label>
                                        <input type="text" class="form-control phone-format" id="new_customer_phone" name="new_customer_phone" placeholder="Masukan Nomor Handphone Pelanggan Baru">
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_customer_address" class="form-label">Alamat</label>
                                        <textarea class="form-control maxlength" id="new_customer_address" data-maxlength="500" name="new_customer_address" rows="3" placeholder="Masukan Alamat Pelanggan Baru"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                        <div class="col-md-12">
                            <fieldset class="border p-3 mb-4 h-100"> {{-- h-100 untuk memastikan tinggi sama --}}
                                <!-- Button Tambah Produk -->
                                <button type="button" class="btn btn-primary mt-2 mb-2" id="open-product-modal">
                                    <i class="bi bi-plus"></i> Tambah Produk
                                </button>

                                <legend class="float-none w-auto px-2">Produk</legend>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Produk</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Sub Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="product-items-table-body">
                                        </tbody>
                                    </table>
                                </div>

                                <button type="button" class="btn btn-success mt-1" id="add-product-row">
                                    <i class="bi bi-plus-circle"></i> 
                                </button>

                               <table class="table mt-3">
                                        <!-- Total Sebelum Diskon -->
                                        <tr>
                                            <td class="text-end" style="width: 60%;"><h6>Total</h6></td>
                                            <td class="text-end">
                                                <h6><span id="subtotal-display">Rp0</span></h6>
                                                <input type="hidden" name="subtotal_amount" id="subtotal-input">
                                            </td>
                                        </tr>

                                        <!-- Diskon -->
                                        <tr>
                                            <td class="text-end" style="width: 60%;"><h6>Diskon</h6></td>
                                            <td>
                                                <div class="d-flex justify-content-end gap-2">
                                                    <select id="discount-type" name="discount_type" class="form-select form-select-sm" style="width: 40%">
                                                        <option value=""></option>
                                                        <option value="amount">Rp</option>
                                                        <option value="percentage">%</option>
                                                    </select>
                                                    <input type="text" name="discount" id="discount" class="form-control price-format"
                                                        style="text-align: right; width: 60%;" placeholder="Nilai Diskon">
                                                </div>
                                            </td>
                                        </tr>

                                           <!-- Total Diskon (Nominal) -->
                                        <tr>
                                            <td class="text-end" style="width: 60%;"><h6>Total Diskon</h6></td>
                                            <td class="text-end">
                                                <h6><span id="total-discount-display">Rp0</span></h6>
                                                <input type="hidden" name="total_discount" id="total-discount-input">
                                            </td>
                                        </tr>

                                        <!-- Total Setelah Diskon -->
                                        <tr>
                                            <td class="text-end" style="width: 60%;"><h6><b>Total Bayar</b></h6></td>
                                            <td class="text-end">
                                                <h6><b><span id="total-amount-display">Rp0</span></b></h6>
                                                <input type="hidden" name="total_amount" id="total-amount-input">
                                            </td>
                                        </tr>
                                    </table>

                            </fieldset>
                        </div>
                    </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>
        </section>

        <!-- Modal Pilih Produk -->
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Pilih Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered" id="product-modal-table">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="check-all-products"></th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody id="product-modal-body">
                                <!-- Data akan dimuat via AJAX -->
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary" id="select-products-btn">Pilih</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

@section('page-script')
    <script src="{{asset('assets/js_custom/add_transaction.js')}}?v={{ time() }}"></script>
@endsection

