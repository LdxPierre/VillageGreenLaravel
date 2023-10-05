<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function mainCategory(): BelongsTo
    {
        return $this->belongsTo(MainCategory::class, 'mct_id', 'mct_id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'cat_id', 'cat_id');
    }
}
