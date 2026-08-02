<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mcq extends Model
{
    public function Result(): BelongsTo
    {
        return $this->belongsTo(Result::class, 'quiz_id');
    }
}
