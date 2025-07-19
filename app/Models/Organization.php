<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $guarded = ['id'];

    public function province()
    {
        return $this->belongsTo(Region::class,'province_id');
    }

    public function regency()
    {
        return $this->belongsTo(Region::class,'regency_id');
    }

    public function district()
    {
        return $this->belongsTo(Region::class,'district_id');
    }
}
