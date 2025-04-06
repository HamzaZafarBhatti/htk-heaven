<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class AccidentClaim extends Model implements Auditable
{
    use SoftDeletes, AuditingAuditable;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'accident_date',
        'car_registration_number',
        'accident_fault', // my-fault, somebody-else, fifty-fifty, not-sure
        'accident_location', // england/wales, scotland, northern-ireland
        'accident_postcode',
        'is_car_roadworthy', // yes, no, not-sure
        'pictures',
        'user_id',
        'privacy_policy_accepted'
    ];

    protected $casts = [
        'pictures' => 'array',
        'accident_date' => 'date',
    ];
}
