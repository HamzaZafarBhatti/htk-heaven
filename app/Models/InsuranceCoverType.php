<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class InsuranceCoverType extends Model implements Auditable
{
    use SoftDeletes, AuditingAuditable;
    //
    protected $fillable = [
        'name',
        'is_active',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
