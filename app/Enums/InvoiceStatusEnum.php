<?php

namespace App\Enums;

enum InvoiceStatusEnum: string
{
    case DRAFT = 'draft';
    case SENT = 'sent';
    case PAID = 'paid';
    case OVERDUE = 'overdue';
    case CANCELLED = 'cancelled';

    public function getLabel(): string
    {
        return match ($this) {
            self::DRAFT => "Draft",
            self::SENT => "Sent",
            self::PAID => "Paid",
            self::OVERDUE => "Overdue",
            self::CANCELLED => "Cancelled",
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::DRAFT => "info",
            self::SENT => "primary",
            self::PAID => "success",
            self::OVERDUE => "warning",
            self::CANCELLED => "secondary",
        };
    }

    public static function toArray(): array
    {
        return array_column(
            array_map(fn($case) => ['value' => $case->value, 'label' => $case->getLabel()], self::cases()),
            'label',
            'value'
        );
    }
}
