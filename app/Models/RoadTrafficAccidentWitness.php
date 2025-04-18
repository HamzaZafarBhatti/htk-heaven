<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class RoadTrafficAccidentWitness extends Model implements Auditable
{
    //
    use AuditingAuditable, SoftDeletes;

    protected $fillable = [
        'road_traffic_accident_id',
        'witness_title',
        'witness_first_name',
        'witness_last_name',
        'witness_address_line_1',
        'witness_address_line_2',
        'witness_city',
        'witness_postal_code',
        'witness_country',
        'witness_email',
        'witness_phone',
        'is_cctv',
    ];

    public function roadTrafficAccident(): BelongsTo
    {
        return $this->belongsTo(RoadTrafficAccident::class);
    }
}
