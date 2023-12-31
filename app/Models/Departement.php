<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'dep_code', 'dep_code');
    }
}
