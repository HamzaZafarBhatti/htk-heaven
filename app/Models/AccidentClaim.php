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
        'email',
        'full_name',
        'phone',
        'accident_date',
        'car_registration_number',
        'accident_fault', // my-fault, somebody-else, fifty-fifty, not-sure
        'accident_location', // england/wales, scotland, northern-ireland
        'is_car_roadworthy', // yes, no, not-sure
        'pictures',
        'privacy_policy_accepted'
    ];

    protected $casts = [
        'pictures' => 'array',
    ];
}
