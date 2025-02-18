<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class FormSection extends Model implements Auditable
{
    use AuditingAuditable;
    //
    protected $fillable = [
        'form_id',
        'title',
        'description',
        'is_active',
        'sort_order',
    ];

    public function form_fields()
    {
        return $this->hasMany(FormField::class, 'section_id');
    }
}
