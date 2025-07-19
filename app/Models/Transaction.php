<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    protected $guarded = ['id'];

    public function details(): HasMany{
        return $this->hasMany(TransactionDetail::class);
    }
    public function organization(): BelongsTo{
        return $this->belongsTo(Organization::class);
    }
    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }
}
