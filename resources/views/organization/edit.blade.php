@extends('layout')

@section('title', 'Edit Organisasi')


@section('content')

<section class="row mb-2">
    <div class="col-12 col-md-6 order-md-1 order-last">
        <h3>Edit Organisasi</h3>
        <!-- <p class="text-subtitle text-muted">Navbar will appear in top of the page.</p> -->
    </div>
    <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('setting/organization')}}">Organisasi</a></li>
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
        <div class="card">
            <div class="card-body">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="profil-tab" data-bs-toggle="tab" type="button" data-bs-target="#profil" role="tab" aria-controls="profil" aria-selected="true">Profil</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="schedule-tab" data-bs-toggle="tab" type="button" data-bs-target="#schedule" role="tab" aria-controls="schedule" aria-selected="false">Jadwal</a>
                </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content pt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="profil" role="tabpanel" aria-labelledby="profil-tab">
                        <form action="{{ url('setting/organization',$organization->id) }}" method="POST" id="form-edit" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')                                                     
                                    <div class="sticky-save-btn">
                                    <button type="button" class="btn btn-primary" id="btn-save"><i class="bi bi-save me-2"></i>Simpan</button>
                                </div> 
                                <div class="row">
                                <div class="col-lg-2 col-sm-12 mb-3">
                                    <div class="img-organization">
                                        @if (!empty($organization->logo) && file_exists('storage/'.$organization->logo))
                                            <img class="img-fluid" src="{{ asset('storage/'.$organization->logo) }}" alt="{{ basename($organization->logo) }}" style="max-width: 90%;  object-fit: contain;  display: block;" id="logo-organization"/>
                                        @else
                                            <img class="img-fluid" src="{{asset('assets/images/faces/2.jpg')}}" alt="Default image" style="max-width: 100%; object-fit: contain;  display: block;" id="logo-organization" />
                                        @endif

                                        <label for="upload" class="btn btn-sm btn-primary btn-block mt-2 mb-3" tabindex="0">
                                                <span>Ubah Logo</span>
                                                <i class="mdi mdi-tray-arrow-up"></i>
                                                <input type="file" id="upload" name="picture" class="logo-new" hidden accept="image/png, image/jpeg, image/jpg" />
                                        </label>     
                                    </div>
                                </div>
                                    <div class="col-lg-10 col-sm-12 mb-3">
                                        <!-- tipe and active -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                <div class="form-check form-switch">
                                                <input
                                                    disabled
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="active"
                                                    name="active"
                                                    value="1"
                                                    {{ $organization->active ? 'checked' : '' }}
                                                >
                                                <label class="form-check-label" for="active">Aktif</label>
                                            </div>
                                            </div>

                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                  <div class="row">
                                                        <div class="col-lg-3">
                                                            <label for="type" class="form-label mb-0">Tipe</label>
                                                        </div>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" name="type" id="type" value="{{ $organization->type }}" disabled>
                                                        </div>
                                                    </div>

                                            </div>

                                        
                                        </div>
                                        <!-- tipe and active -->
                                        
                                        <!-- nama and merek -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label for="type" class="form-label mb-0">Nama</label>
                                                </div>
                                                <div class="col-lg-9">                                                    
                                                    <input type="text" class="form-control required maxlength" name="name" id="name" placeholder="Name" data-required="Name" data-maxlength-label="Name" value="{{old('name',$organization->name??'')}}" data-maxlength="100">
                                                </div>
                                            </div>                                                
                                            </div>

                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Merek</label>
                                                    </div>
                                                    <div class="col-lg-9">   
                                                        <input type="text" class="form-control required maxlength" name="brand" id="brand" placeholder="brand" data-required="Brand" data-maxlength-label="Brand" value="{{old('name',$organization->brand??'')}}" data-maxlength="100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nama and merek -->

                                        <!-- email dan no.telepon -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Email</label>
                                                    </div>
                                                    <div class="col-lg-9">   
                                                        <input type="email" class="form-control required email-format maxlength" name="email" id="email" placeholder="Email" data-required="Email" value="{{ old('email',$organization->email??'')}}" data-maxlength-label="Email" data-maxlength="100">
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Telepon</label>
                                                    </div>
                                                    <div class="col-lg-9"> 
                                                        <input type="text" class="form-control required phone-format maxlength" name="phone" id="phone" placeholder="Handphone" data-required="Handphone" value="{{ old('phone',$organization->phone_number??'')}}" data-maxlength-label="Handphone" data-maxlength="15">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- email dan no.telepon -->

                                        <!-- lat dan lng -->
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-3">
                                                 <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Latitude</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="lat" id="lat" placeholder="Lat" value="{{ old('email',$organization->lat??'')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 mb-3">  
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Longitude</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" name="lng" id="lng" placeholder="lng" value="{{ old('email',$organization->lng??'')}}">
                                                    </div>
                                                </div>      
                                            </div>
                                        </div>
                                        <!-- lat dan lng -->

                                        <!-- province dan regency -->
                                        <div class="row">
                                           <div class="col-lg-6 col-sm-12 mb-3">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Provinsi</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2 required" data-required="Provinsi"
                                                                id="province"
                                                                name="province"
                                                                data-placeholder="Pilih Provinsi">
                                                            <option></option>
                                                            @foreach ($province as $pr)
                                                                <option value="{{ $pr['id'] }}" {{ old('province', $organization->province_id) == $pr['id'] ? 'selected' : '' }}>
                                                                    {{ $pr['name'] }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>


                                            <div class="col-lg-6 col-sm-12 mb-3">    
                                                  <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Kab/Kota</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2 required" data-required="Kab/Kota"
                                                                id="regency"
                                                                name="regency"
                                                                data-placeholder="Pilih Kab/Kota">
                                                        </select>
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>
                                         <!-- province dan regency -->

                                         <!-- district dan address -->
                                          <div class="row">
                                            <div class="col-lg-6 col-sm-12 mb-3">    
                                                  <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Kec/Daerah</label>
                                                    </div>
                                                    <div class="col-lg-9">
                                                        <select class="form-control select2 required" data-required="Kec/Daerah"
                                                                id="district"
                                                                name="district"
                                                                data-placeholder="Pilih Kec/Daerah">
                                                        </select>
                                                    </div>
                                                </div>        
                                            </div>

                                            <div class="col-lg-6 col-sm-12 mb-3">    
                                                  <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Alamat</label>
                                                    </div>
                                                    <div class="col-lg-9">                                                   
                                                    <textarea class="form-control maxlength required" name="address" id="address" placeholder="Alamat" data-maxlength-label="Alamat" data-maxlength="500" data-required="Alamat">{{old('address',$organization->address??'')}}</textarea>
                                                        </div>  
                                                    </div>  
                                          </div>
                                          </div>
                                         <!-- district dan address -->

                                        <div class="row">

                                        <div class="col-lg-6 col-sm-12 mb-3">
                                            <div class="form-check form-switch">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="has_storefront"
                                                name="has_storefront"
                                                {{ $organization->has_storefront ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="active">Toko Fisik?</label>
                                            </div>                                           
                                        
                    
                                        </div>
                                       <div class="col-lg-6 col-sm-12 mb-3">

                                        <div class="form-check form-switch mb-3">
                                            <input
                                                class="form-check-input"
                                                type="checkbox"
                                                id="offers_delivery"
                                                name="offers_delivery"
                                                {{ $organization->offers_delivery ? 'checked' : '' }}>
                                            <label class="form-check-label" for="active">Pesan Antar?</label>
                                        </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <label for="type" class="form-label mb-0">Catatan</label>
                                                    </div>
                                                    <div class="col-lg-9">                                                   
                                                        <textarea id="delivery_note" name="delivery_note" class="form-control" placeholder="Catatan Pesan Antar" data-required="Catatan Pesan Antar"
                                                        data-maxlength-label="Alamat" data-maxlength="500">{{$organization->delivery_note??''}}</textarea>
                                                        </div>  
                                                    </div>                                            
                                        
                                        </div>

                                            <!-- <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-delivery-start-sm">Buka</span>
                                                <input type="text" id="open_start" name="open_start" class="form-control" placeholder="Klik untuk memilih waktu" data-required="Jam Buka Toko"
                                                value="{{ old('delivery_start', \Carbon\Carbon::parse($organization->delivery_start)->format('H:i')) }}"
                                                >
                                            </div>  

                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-delivery-end-sm">Tutup</span>
                                                <input type="text" id="open_end" name="open_end" class="form-control" placeholder="Klik untuk memilih waktu" data-required="Jam Tutup Toko"
                                                value="{{ old('open_end', \Carbon\Carbon::parse($organization->open_end)->format('H:i')) }}">
                                            </div>   -->
                                            <!-- has_storefront -->
                                            <!-- offers_delivery -->

                                            <!-- <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-delivery-start-sm">Buka</span>
                                                <input type="text" id="delivery_start" name="delivery_start" class="form-control" placeholder="Klik untuk memilih waktu" data-required="Jam Buka Pesan Antar" value="{{ old('delivery_start', \Carbon\Carbon::parse($organization->delivery_start)->format('H:i')) }}">
                                            </div>  

                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-delivery-end-sm">Tutup</span>
                                                <input type="text" id="delivery_end" name="delivery_end" class="form-control" placeholder="Klik untuk memilih waktu" data-required="Jam Tutup Pesan Antar"  value="{{ old('delivery_end', \Carbon\Carbon::parse($organization->delivery_end)->format('H:i')) }}">
                                            </div>   -->      
                                        <!-- offers_delivery -->

                                    
                                    </div>
                                    </div>
                        
                                </div>
                        </form>
                    </div>                   

                    <!-- scheduled -->
                    <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                        @php
                            $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
                            $schedule_list = \App\Models\Schedule::where('organization_id', 1)->get()->keyBy('day');
                        @endphp


                        <form action="{{route('organization.schedule.store',$organization->id)}}" method="POST" id="form-schedule-edit">
                            @csrf

                            <div class="sticky-save-btn">
                                <button type="button" class="btn btn-primary" id="btn-save-schedule"><i class="bi bi-save me-2"></i>Simpan</button>
                            </div>


                            @foreach ($days as $index => $day)
                                @php
                                    $schedule = $schedule_list[$day] ?? null;
                                @endphp
                                <div class="border rounded p-3 mb-3">
                                    <h5>{{ $day }}</h5>
                                    <input type="hidden" name="schedules[{{ $index }}][day]" value="{{ $day }}">

                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <label for="open_start_{{ $index }}" class="form-label">Jam Buka</label>
                                            <input type="time" class="form-control"
                                                name="schedules[{{ $index }}][open_start]"
                                                id="open_start_{{ $index }}"
                                                value="{{ $schedule?->open_start }}">
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label for="open_end_{{ $index }}" class="form-label">Jam Tutup</label>
                                            <input type="time" class="form-control"
                                                name="schedules[{{ $index }}][open_end]"
                                                id="open_end_{{ $index }}"
                                                value="{{ $schedule?->open_end }}">
                                        </div>

                                        <div class="col-md-4 mb-2">
                                            <label class="form-label d-block">Status</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="schedules[{{ $index }}][open_or_closed]"
                                                    id="open_{{ $index }}" value="1"
                                                    {{ $schedule?->open_or_closed == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="open_{{ $index }}">Buka</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"
                                                    name="schedules[{{ $index }}][open_or_closed]"
                                                    id="closed_{{ $index }}" value="0"
                                                    {{ $schedule?->open_or_closed == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="closed_{{ $index }}">Tutup</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </form>

                            </div>
                            <!-- scheduled -->
                        </div>


                    </div>

                                        
            </div>
        </section>
    @endsection

@section('page-script')
    <script>
        var regencys = @json($regency);
        var districts = @json($district);
        var provinceId = @json($organization?->province_id);
        var regencyId = @json($organization?->regency_id);
        var districtId = @json($organization?->district_id);
    </script>
    <script src="{{asset('assets/js_custom/edit_organization.js')}}?v={{ time() }}"></script>
@endsection

