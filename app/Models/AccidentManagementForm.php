<?php

namespace App\Models;

use App\Enums\AccidentManagementStatusEnum;
use App\Enums\ClaimTypesEnum;
use App\Enums\FileStatusEnum;
use App\Enums\VehicleConditionEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class AccidentManagementForm extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //
    protected $fillable = [
        'road_traffic_accident_id',
        'last_update_date',
        'next_update_date',
        'claim_type',
        'file_status',
        'current_position',
        'status',
        'claim_handler',
        'tp_claim_reference',
        'tp_insurance_company_email',
        'notes',
        'settlement_amount',
        'vehicle_condition',
        'images',
        'actions',
        'events'
    ];

    public function road_traffic_accident(): BelongsTo
    {
        return $this->belongsTo(RoadTrafficAccident::class, 'road_traffic_accident_id');
    }

    public function getRefNumberAttribute(): string
    {
        return "SASAM" . str_pad($this->id, 7, "0", STR_PAD_LEFT);
    }

    protected $casts = [
        'images' => 'array',
        'actions' => 'array',
        'events' => 'array',
        'claim_type' => ClaimTypesEnum::class,
        'file_status' => FileStatusEnum::class,
        'status' => AccidentManagementStatusEnum::class,
        'vehicle_condition' => VehicleConditionEnum::class,
    ];

    protected $appends = [
        'ref_number',
    ];
}
