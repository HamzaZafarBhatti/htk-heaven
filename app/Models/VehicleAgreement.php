<?php

namespace App\Models;

use App\Enums\CountryEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class VehicleAgreement extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //
    protected $fillable = [
        'start_date',
        'start_time',
        'end_date',
        'end_time',
        'driver_reference',
        'title',
        'first_name',
        'middle_name',
        'last_name',
        'dob',
        'email',
        'phone',
        'address_line_1',
        'address_line_2',
        'city',
        'postal_code',
        'country',
        'license_number',
        'license_expiry_date',
        'license_issuing_country',
        'pco_badge_number',
        'pco_badge_expiry_date',
        'nin',
        'nationality',
        'vehicle_registration_number',
        'vehicle_make',
        'vehicle_model',
        'vehicle_colour',
        'customer_signature',
        'customer_signature_date',
        'company_signature',
        'company_signature_date',
        'storage',
        'daily_rent',
        'rental_term',
        'e_reference',
        'notes',
        'driving_licence_front',
        'driving_licence_back',
        'pco_badge_front',
        'pco_badge_back',
        'pco_license_paper_part',
        'proof_of_id',
        'nin_image',
        'proof_of_address1',
        'proof_of_address2',
        'company_name',
    ];

    public function getVehicleModelMakeColourAttribute()
    {
        return implode(' ', [$this->vehicle_model, $this->vehicle_make, $this->vehicle_colour]);
    }

    public function getFullNameAttribute()
    {
        return implode(' ', array_filter([$this->title, $this->first_name, $this->middle_name, $this->last_name]));
    }

    public function getFullAddressAttribute()
    {
        return implode(' ', array_filter([$this->address_line_1, $this->address_line_2, $this->city, $this->postal_code, $this->country->getLabel()]));
    }

    public function getRefNumberAttribute()
    {
        return "SAS/{$this->id}-{$this->driver_reference}-{$this->last_name}/{$this->vehicle_registration_number}";
    }

    public function getAgreementPeriodAttribute()
    {
        $start = Carbon::parse($this->start_date)->toFormattedDateString() . ' ' . Carbon::parse($this->start_time)->format('H:i A');
        $end = Carbon::parse($this->end_date)->toFormattedDateString() . ' ' . Carbon::parse($this->end_time)->format('H:i A');
        return implode(' - ', [$start, $end]);
    }

    protected $casts = [
        'country' => CountryEnum::class,
        'license_issuing_country' => CountryEnum::class,
        'dob' => 'date',
        'license_expiry_date' => 'date',
        'pco_badge_expiry_date' => 'date',
        'customer_signature_date' => 'date',
        'company_signature_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];

    protected $appends = [
        'vehicle_model_make_colour',
        'full_name'
    ];
}
