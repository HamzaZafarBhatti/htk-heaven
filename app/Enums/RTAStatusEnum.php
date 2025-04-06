<?php

namespace App\Enums;

enum RTAStatusEnum: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public function getLabel(): string
    {
        return match ($this) {
            self::PENDING => "Pending",
            self::IN_PROGRESS => "In Progress",
            self::COMPLETED => "Completed",
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::PENDING => "gray",
            self::IN_PROGRESS => "info",
            self::COMPLETED => "success",
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
