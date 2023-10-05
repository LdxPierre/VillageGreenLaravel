<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'prd_ref';

    public $incrementing = false;

    protected $keyType = 'string';

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class, 'sup_ref', 'sup_ref');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id', 'cat_id');
    }

    public function cartItems(): BelongsToMany
    {
        return $this->belongsToMany(CartItem::class, 'prd_ref', 'prd_ref');
    }

    public function orderDetails(): BelongsToMany
    {
        return $this->belongsToMany(OrderDetail::class, 'prd_ref', 'prd_ref');
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_details', 'prd_ref', 'ord_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'cart_items', 'prd_ref', 'usr_id');
    }
}
