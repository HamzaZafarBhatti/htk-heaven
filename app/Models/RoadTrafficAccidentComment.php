<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class RoadTrafficAccidentComment extends Model implements Auditable
{
    use SoftDeletes, AuditingAuditable;
    //
    protected $fillable = [
        'message',
        'road_traffic_accident_id',
        'is_hidden',
        'created_by'
    ];

    public function road_traffic_accident()
    {
        return $this->belongsTo(RoadTrafficAccident::class);
    }

    public function commenter()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function scopeNotHidden($query)
    {
        return $query->where('is_hidden', false);
    }
}
