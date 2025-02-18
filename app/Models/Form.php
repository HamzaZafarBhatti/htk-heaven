<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Form extends Model implements Auditable
{
    use AuditingAuditable, SoftDeletes;
    //
    protected $fillable = [
        'title',
        'description',
    ];

    public function sections()
    {
        return $this->hasMany(FormSection::class, 'form_id');
    }

    public function fields()
    {
        return $this->hasMany(FormField::class, 'form_id');
    }
}
