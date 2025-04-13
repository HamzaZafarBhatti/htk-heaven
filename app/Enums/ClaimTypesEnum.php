<?php

namespace App\Enums;

enum ClaimTypesEnum: string
{
    case THIRD_PARTY_INSURANCE_CLAIM = 'third_party_insurance_claim';
    case FULLY_COMPREHENSIVE_INSURANCE_CLAIM = 'fully_comprehensive_insurance_claim';
    case THIRD_PARTY_PRIVATE_CLAIM = 'third_party_private_claim';
    case CUSTOMER_PRIVATE_CLAIM = 'customer_private_claim';
    case CREDIT_HIRE_VEHICLE_CLAIM_ONLY_COURTESY_CAR = 'credit_hire_vehicle_claim_only_courtesy_car';

    public function getLabel(): string
    {
        return match ($this) {
            self::THIRD_PARTY_INSURANCE_CLAIM => "Third Party Insurance Claim",
            self::FULLY_COMPREHENSIVE_INSURANCE_CLAIM => "Fully Comprehensive Insurance Claim",
            self::THIRD_PARTY_PRIVATE_CLAIM => "Third Party Private Claim",
            self::CUSTOMER_PRIVATE_CLAIM => "Customer Private Claim",
            self::CREDIT_HIRE_VEHICLE_CLAIM_ONLY_COURTESY_CAR => "Credit Hire Vehicle Claim Only (Courtesy Car)",
        };
    }

    public function getColor(): string
    {
        return match ($this) {
            self::THIRD_PARTY_INSURANCE_CLAIM => "primary",
            self::FULLY_COMPREHENSIVE_INSURANCE_CLAIM => "secondary",
            self::THIRD_PARTY_PRIVATE_CLAIM => "warning",
            self::CUSTOMER_PRIVATE_CLAIM => "success",
            self::CREDIT_HIRE_VEHICLE_CLAIM_ONLY_COURTESY_CAR => "info",
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
