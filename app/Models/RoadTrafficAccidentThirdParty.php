<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class RoadTrafficAccidentThirdParty extends Model implements Auditable
{
    //
    use AuditingAuditable, SoftDeletes;

    protected $fillable = [
        'road_traffic_accident_id',
        'tp_title',
        'tp_first_name',
        'tp_last_name',
        'tp_address_line_1',
        'tp_address_line_2',
        'tp_city',
        'tp_postal_code',
        'tp_country',
        'tp_email',
        'tp_phone',
        'tp_vehicle_registration_number',
        'tp_vehicle_make',
        'tp_vehicle_model',
        'tp_vehicle_colour',
        'tp_vehicle_year',
        'tp_insurance_company',
        'tp_insurance_policy_number',
        'tp_insurance_company_phone',
        'tp_passengers_count',
        'tp_vehicle_speed',
        'tp_vehicle_damage',
    ];

    public function roadTrafficAccident()
    {
        return $this->belongsTo(RoadTrafficAccident::class);
    }
}
