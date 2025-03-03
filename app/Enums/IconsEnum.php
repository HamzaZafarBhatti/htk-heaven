<?php

namespace App\Enums;

enum IconsEnum: string
{
    case MagnifyingGlass = 'Magnifying Glass';
    case RightArrow = 'Right Arrow';
    case UpArrow = 'Up Arrow';
    case DownArrow = 'Down Arrow';
    case Cashback = 'Cashback';
    case Insurance = 'Insurance';
    case House = 'House';
    case Family = 'Family';
    case Drive = 'Drive';
    case Home = 'Home';
    case HeartBeat = 'Heart Beat';
    case Fire = 'Fire';
    case Briefcase = 'Briefcase';
    case Ring = 'Ring';
    case Plane = 'Plane';
    case EasyToUse = 'Easy To Use';
    case Policy = 'Policy';
    case Contract = 'Contract';
    case Fund = 'Fund';
    case Group = 'Group';
    case Insurance1 = 'Insurance 1';
    case Success = 'Success';
    case LifeInsurance = 'Life Insurance';
    case Folder = 'Folder';
    case Telephone = 'Telephone';
    case Email = 'Email';
    case TelephoneCall = 'Telephone Call';
    case Pin = 'Pin';
    case CashFlow = 'Cash Flow';
    case Profits = 'Profits';
    case Insurance2 = 'Insurance 2';
    case Select = 'Select';
    case Meeting = 'Meeting';
    case Agreement = 'Agreement';
    case InsuranceAgent = 'Insurance Agent';
    case Tick = 'Tick';
    case MoneyBack = 'Money Back';
    case Employees = 'Employees';
    case Mission = 'Mission';
    case Computer = 'Computer';
    case Chat = 'Chat';
    case File = 'File';
    case Plus = 'Plus';
    case Shield = 'Shield';

    public static function toArray(): array
    {
        $result = [];
        foreach (self::cases() as $case) {
            $result[self::stringToIconClass($case->name)] = $case->value;
        }
        return $result;
    }

    public static function stringToIconClass($input): string
    {
        // Insert a hyphen before uppercase letters and convert to lowercase
        $input = strtolower(preg_replace('/([A-Z])/', '-$1', $input));

        return 'icon' . $input;
    }
}
