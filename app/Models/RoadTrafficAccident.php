<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class RoadTrafficAccident extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //

    public function cover_type()
    {
        return $this->belongsTo(InsuranceCoverType::class, 'cover_type_id');
    }
}
