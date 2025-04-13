<?php

namespace App\Enums;

enum FileStatusEnum: int
{
    case FILE_OPENED = 1;
    case FILE_CLOSED = 0;

    public function getLabel(): string
    {
        return match ($this) {
            self::FILE_OPENED => "File Opened",
            self::FILE_CLOSED => "File Closed",
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::FILE_OPENED => "success",
            self::FILE_CLOSED => "danger",
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
