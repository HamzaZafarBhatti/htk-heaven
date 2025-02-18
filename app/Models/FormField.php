<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class FormField extends Model implements Auditable
{
    use AuditingAuditable;
    //
    protected $fillable = [
        'form_id',
        'section_id',
        'title',
        'description',
        'type',
        'options',
        'is_required',
        'is_active',
        'sort_order',
    ];
}
