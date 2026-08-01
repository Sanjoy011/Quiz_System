<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorie extends Model
{
    public function results(): HasMany
    {
        return $this->hasMany(Result::class, 'category_id');
    }
}
