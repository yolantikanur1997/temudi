<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $guarded = ['id'];

    public function getProvince($where = null){

        // cara memanggil

        // array
        //     $provinces = $regionModel->getProvince([
        //         'status' => 1,
        //         'country_id' => 100,
        //     ]);       

        // closude
        // $provinces = $regionModel->getProvince(function ($query) {
        //     $query->where('status', 1)
        //         ->orWhere('name', 'like', '%Kalimantan%');
        // });

        // raw sql
        // $provinces = $regionModel->getProvince("status = 1 AND LENGTH(name) > 5");



        $province = $this->where('type','province');

        if ($where) {
            if (is_array($where)) {
                $province->where($where);
            } elseif ($where instanceof \Closure) {
                $province->where($where);
            } else {
                $province->whereRaw($where);
            }
        }

        return $province->get();

    }

    public function getRegency($where = null){

        // cara memanggil

        // array
        //     $provinces = $regionModel->getRegency([
        //         'status' => 1,
        //         'country_id' => 100,
        //     ]);       

        // closude
        // $provinces = $regionModel->getRegency(function ($query) {
        //     $query->where('status', 1)
        //         ->orWhere('name', 'like', '%Kalimantan%');
        // });

        // raw sql
        // $provinces = $regionModel->getRegency("status = 1 AND LENGTH(name) > 5");



        $province = $this->where('type','regencys');

        if ($where) {
            if (is_array($where)) {
                $province->where($where);
            } elseif ($where instanceof \Closure) {
                $province->where($where);
            } else {
                $province->whereRaw($where);
            }
        }

        return $province->get();

    }

    public function getDistrict($where = null){

        // cara memanggil

        // array
        //     $provinces = $regionModel->getDistrict([
        //         'status' => 1,
        //         'country_id' => 100,
        //     ]);       

        // closude
        // $provinces = $regionModel->getDistrict(function ($query) {
        //     $query->where('status', 1)
        //         ->orWhere('name', 'like', '%Kalimantan%');
        // });

        // raw sql
        // $provinces = $regionModel->getDistrict("status = 1 AND LENGTH(name) > 5");



        $province = $this->where('type','sub_district');

        if ($where) {
            if (is_array($where)) {
                $province->where($where);
            } elseif ($where instanceof \Closure) {
                $province->where($where);
            } else {
                $province->whereRaw($where);
            }
        }

        return $province->get();

    }
}
