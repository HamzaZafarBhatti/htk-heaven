<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class AccidentManagementAction extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;

    protected $fillable = [
        'accident_management_form_id',
        'date',
        'notes',
        'user_id',
    ];

    public function accident_management_form(): BelongsTo
    {
        return $this->belongsTo(AccidentManagementForm::class, 'accident_management_form_id');
    }
}
