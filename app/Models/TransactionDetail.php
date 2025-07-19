<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionDetail extends Model
{
    protected $guarded = ['id'];

    public function header(): BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
    public function product(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
