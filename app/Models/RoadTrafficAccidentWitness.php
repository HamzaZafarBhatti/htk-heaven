<?php

namespace App\Models;

use App\Enums\CountryEnum;
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

    public function getFullNameAttribute(): string
    {
        return implode(' ', array_filter([$this->witness_title, $this->witness_first_name, $this->witness_last_name]));
    }

    public function getFullAddressAttribute(): string
    {
        return implode(', ', array_filter([
            $this->witness_address_line_1,
            $this->witness_address_line_2,
            $this->witness_city,
            $this->witness_postal_code,
            $this->witness_country->getLabel()
        ]));
    }

    protected $casts = [
        'witness_country' => CountryEnum::class,
    ];

    protected $appends = [
        'full_name',
        'full_address',
    ];
}
