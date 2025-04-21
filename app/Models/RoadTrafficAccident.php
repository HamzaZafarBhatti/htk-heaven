<?php

namespace App\Models;

use App\Enums\CountryEnum;
use App\Enums\RTAStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class RoadTrafficAccident extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //

    protected $fillable =
    [
        'status',
        'accident_reporting_date',
        'driver_reference',
        'agreement_reference',
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'occupation',
        'address_line_1',
        'address_line_2',
        'city',
        'postal_code',
        'country',
        'nin',
        'injury_type',
        'insurance_company',
        'insurance_policy_number',
        'insurance_company_phone',
        'cover_type_id',
        'is_police_reported',
        'cad_reference_number',
        'vehicle_registration_number',
        'vehicle_make',
        'vehicle_model',
        'vehicle_colour',
        'vehicle_year',
        'is_vehicle_road_worthy',
        'passengers_count',
        'is_passenger_injured',
        'passenger_injury_type',
        'accident_date',
        'accident_time',
        'accident_location',
        'journey_purpose',
        'was_driver_wearing_seat_belt',
        'weather_condition',
        'road_condition',
        'vehicle_speed',
        'vehicle_damage',
        'police_reference_number',
        'circumstances',
        'notes',
        'pictures',
        'insurance_certificate',
        'contract',
        'id_proof',
        'others',
        'signature',
        'signature_date',
        'user_id',
        'accident_claim_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function accident_claim(): BelongsTo
    {
        return $this->belongsTo(AccidentClaim::class, 'accident_claim_id');
    }

    public function accident_management_form(): HasOne
    {
        return $this->hasOne(AccidentManagementForm::class, 'road_traffic_accident_id');
    }

    public function cover_type(): BelongsTo
    {
        return $this->belongsTo(InsuranceCoverType::class, 'cover_type_id');
    }

    public function third_party(): HasOne
    {
        return $this->hasOne(RoadTrafficAccidentThirdParty::class, 'road_traffic_accident_id');
    }

    public function witness(): HasOne
    {
        return $this->hasOne(RoadTrafficAccidentWitness::class, 'road_traffic_accident_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(RoadTrafficAccidentComment::class, 'road_traffic_accident_id');
    }

    public function getFullNameAttribute(): string
    {
        return implode(' ', [$this->title, $this->first_name, $this->last_name]);
    }
    public function getFullAddressAttribute(): string
    {
        return implode(', ', array_filter([
            $this->address_line_1,
            $this->address_line_2,
            $this->city,
            $this->postal_code,
            $this->country->getLabel()
        ]));
    }
    public function getDriverWearingSeatBeltAttribute(): string
    {
        return $this->was_driver_wearing_seat_belt ? 'Yes' : 'No';
    }
    public function getRtaNumberAttribute(): string
    {
        return "SASRTA" . str_pad($this->id, 7, "0", STR_PAD_LEFT);
    }

    protected $casts = [
        'status' => RTAStatusEnum::class,
        'pictures' => 'array',
        'others' => 'array',
        'country' => CountryEnum::class,
        'accident_reporting_date' => 'date',
        'dob' => 'date',
        'accident_date' => 'date',
        'signature_date' => 'date',
        'accident_time' => 'datetime',
    ];

    protected $appends = [
        'full_name',
        'full_address',
        'driver_wearing_seat_belt',
        'rta_number',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($rtaRecord) {
            $data = request()->all();

            $updates = $data['components'][0]['updates'];


            $modifiedUpdates = array_combine(
                array_map(fn($key) => str_replace('data.', '', $key), array_keys($updates)),
                $updates
            );

            $rta_third_party = new RoadTrafficAccidentThirdParty();
            $rta_third_party_fillable_keys = $rta_third_party->getFillable();

            $tp_keys = array_intersect_key(array_flip($rta_third_party_fillable_keys), $modifiedUpdates);

            $rta_witness = new RoadTrafficAccidentWitness();
            $rta_witness_fillable_keys = $rta_witness->getFillable();

            $witness_keys = array_intersect_key(array_flip($rta_witness_fillable_keys), $modifiedUpdates);

            if (count($tp_keys) > 0) {
                $rtaRecord->third_party()->updateOrCreate(
                    ['road_traffic_accident_id' => $rtaRecord->id],
                    $modifiedUpdates
                );
            }

            if (count($witness_keys) > 0) {
                $rtaRecord->witness()->updateOrCreate(
                    ['road_traffic_accident_id' => $rtaRecord->id],
                    $modifiedUpdates
                );
            }
        });
    }

    protected static function extractId($rta_number): ?int
    {
        if (preg_match('/(\d+)$/', $rta_number, $matches)) {
            return (int) $matches[1];
        }

        return null;
    }
}
