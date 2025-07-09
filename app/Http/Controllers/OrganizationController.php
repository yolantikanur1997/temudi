<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Region;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function index(Request $request) {
        if($request->ajax()){
            $query = Organization::where('id',session('organization_id'))->orderByDesc('created_at');      
            return datatables($query)
                ->addColumn('created_at', function($row){
                    return $row->created_at->format('d M Y H:i:s');
                })
            ->rawColumns(['created_at','contact'])->make(true);
        }

        return view('organization.index');
    }

    public function edit(Organization $organization){
        $regionModel     = New Region();
        $schedule_list = Schedule::where('organization_id',$organization->id)->get()->keyBy('day');
        $province       = $regionModel->getProvince();
        $regency       = $regionModel->getRegency();
        $district       = $regionModel->getDistrict();

        return view('organization.edit',compact('organization','schedule_list','province','regency','district'));
    }


public function update(Request $request, Organization $organization)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:100',
        'email' => "required|max:100|email|unique:organizations,email,{$organization->id}",
        'phone' => 'required|max:100',
        'lat' => 'nullable|numeric|between:-90,90',
        'lng' => 'nullable|numeric|between:-180,180',
        'delivery_start' => 'nullable|date_format:H:i',
        'delivery_end' => 'nullable|date_format:H:i',
        'province' => 'required',
        'regency' => 'required',
        'district' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    DB::beginTransaction();

    try {
        // Handle file upload
        $picturePath = $organization->picture;

        if ($request->hasFile('picture')) {
            if ($organization->picture && Storage::disk('public')->exists($organization->picture)) {
                Storage::disk('public')->delete($organization->picture);
            }

            if ($request->file('picture')->isValid()) {
                $picturePath = 'organization/logo/' . $request->picture->hashName();
                Storage::disk('public')->put($picturePath, file_get_contents($request->picture));
            }
        }

        $organization->update([
            'name' => $request->name,
            'phone_number' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'logo' => $picturePath ?? '',
            'lat' => $request->lat,
            'lng' => $request->lng,
            'offers_delivery' => $request->offers_delivery ? 1 : 0,
            // 'delivery_start' => $request->offers_delivery ? $request->delivery_start : null,
            // 'delivery_end' => $request->offers_delivery ? $request->delivery_end : null,
            'delivery_note' => $request->offers_delivery ? $request->delivery_note : null,
            'has_storefront' => $request->has_storefront ? 1 : 0,
            // 'open_start' => $request->has_storefront ? $request->open_start : null,
            // 'open_end' => $request->has_storefront ? $request->open_end : null,
            'province_id' => $request->province,
            'regency_id' => $request->regency,
            'district_id' => $request->district,
        ]);

        DB::commit();
        return redirect('setting/organization')->with('success', 'Organisasi Berhasil di Simpan');

    } catch (\Exception $e) {
        Log::info($e);
        DB::rollBack();
        return redirect('setting/organization')->with('error', 'Organisasi Gagal di Simpan');
    }
}


}
