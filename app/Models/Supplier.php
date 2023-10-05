<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'sup_ref';

    public $incrementing = false;

    protected $keyType = 'string';

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'sup_ref', 'sup_ref');
    }
}
