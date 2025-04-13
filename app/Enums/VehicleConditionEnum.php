<?php

namespace App\Enums;

enum VehicleConditionEnum: int
{
    case REPAIRABLE = 1;
    case TOTAL_LOSS = 0;

    public function getLabel(): string
    {
        return match ($this) {
            self::REPAIRABLE => "Repairable",
            self::TOTAL_LOSS => "Total Loss",
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::REPAIRABLE => "success",
            self::TOTAL_LOSS => "danger",
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
