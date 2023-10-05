<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'ord_id', 'ord_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'prd_ref', 'prd_ref');
    }
}
