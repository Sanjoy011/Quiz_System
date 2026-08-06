<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //

    function scopeWithQuiz($query){
        return $query->join('results','records.quiz_id',"=","results.id")
        ->select('results.*','records.*','results.name');
    }
}
