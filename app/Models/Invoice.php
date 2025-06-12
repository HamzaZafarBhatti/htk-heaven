<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

class Invoice extends Model implements Auditable
{
    use SoftDeletes, AuditingAuditable;
    //
    protected $fillable = [
        'invoice_number',
        'customer_id',
        'invoice_date',
        'due_date',
        'notes',
        'status',
        'total_amount',
        'tax_amount',
        'discount_amount',
        'grand_total',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id')->role('Customer');
    }

    public function items(): HasMany
    {
        return $this->hasMany(InvoiceItem::class);
    }

    protected $casts = [
        'invoice_date' => 'datetime',
        'due_date' => 'datetime',
    ];
}
