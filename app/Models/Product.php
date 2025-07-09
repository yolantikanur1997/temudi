<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }

    public function masterProduct()
    {
        return $this->belongsTo(MasterProduct::class, 'master_product_id');
    }
}
