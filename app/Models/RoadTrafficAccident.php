<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoadTrafficAccident extends Model
{
    //

    public function cover_type()
    {
        return $this->belongsTo(InsuranceCoverType::class, 'cover_type_id');
    }
}
