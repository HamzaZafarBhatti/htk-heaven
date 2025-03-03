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

    public function getLabel(): string
    {
        return match ($this) {
            self::MagnifyingGlass => 'Magnifying Glass',
            self::RightArrow => 'Right Arrow',
            self::UpArrow => 'Up Arrow',
            self::DownArrow => 'Down Arrow',
            self::Cashback => 'Cashback',
            self::Insurance => 'Insurance',
            self::House => 'House',
            self::Family => 'Family',
            self::Drive => 'Drive',
            self::Home => 'Home',
            self::HeartBeat => 'Heart Beat',
            self::Fire => 'Fire',
            self::Briefcase => 'Briefcase',
            self::Ring => 'Ring',
            self::Plane => 'Plane',
            self::EasyToUse => 'Easy To Use',
            self::Policy => 'Policy',
            self::Contract => 'Contract',
            self::Fund => 'Fund',
            self::Group => 'Group',
            self::Insurance1 => 'Insurance 1',
            self::Success => 'Success',
            self::LifeInsurance => 'Life Insurance',
            self::Folder => 'Folder',
            self::Telephone => 'Telephone',
            self::Email => 'Email',
            self::TelephoneCall => 'Telephone Call',
            self::Pin => 'Pin',
            self::CashFlow => 'Cash Flow',
            self::Profits => 'Profits',
            self::Insurance2 => 'Insurance 2',
            self::Select => 'Select',
            self::Meeting => 'Meeting',
            self::Agreement => 'Agreement',
            self::InsuranceAgent => 'Insurance Agent',
            self::Tick => 'Tick',
            self::MoneyBack => 'Money Back',
            self::Employees => 'Employees',
            self::Mission => 'Mission',
            self::Computer => 'Computer',
            self::Chat => 'Chat',
            self::File => 'File',
            self::Plus => 'Plus',
            self::Shield => 'Shield',
        };
    }

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value', 'name');
    }
}
