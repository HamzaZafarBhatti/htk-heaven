<?php

namespace App\Enums;

enum AccidentManagementStatusEnum: string
{
    case SETTLED = 'settled';
    case CASE_SUBMITTED = 'case_submitted';
    case NEED_TO_SUBMIT = 'need_to_submit';
    case FILE_CLOSED = 'file_closed';
    case CHASE_THE_CASE = 'chase_the_case';
    case ON_GOING = 'on_going';
    case DISPUTED = 'disputed';
    case CASE_WITH_SOLICITOR = 'Case_with_solicitor';
    case WAITING_FOR_PAYMENT = 'waiting_for_payment';
    case WAITING_FOR_FURTHER_INFORMATION = 'waiting_for_further_information';
    case DUPLICATE_FILE = 'duplicate_file';
    case DO_NOT_WISH_TO_PROCEED = 'do_not_wish_to_proceed';
    case NO_FURTHER_ACTION = 'no_further_action';
    case NO_RESPONSE_FROM_THIRD_PARTY = 'no_response_from_third_party';

    public function getLabel(): string
    {
        return match ($this) {
            self::SETTLED => "Settled",
            self::CASE_SUBMITTED => "Case Submitted",
            self::NEED_TO_SUBMIT => "Need to Submit",
            self::FILE_CLOSED => "File Closed",
            self::CHASE_THE_CASE => "Chase the Case",
            self::ON_GOING => "On going",
            self::DISPUTED => "Disputed",
            self::CASE_WITH_SOLICITOR => "Case with Solicitor",
            self::WAITING_FOR_PAYMENT => "Waiting for Payment",
            self::WAITING_FOR_FURTHER_INFORMATION => "Waiting for Further Information",
            self::DUPLICATE_FILE => "Duplicate File",
            self::DO_NOT_WISH_TO_PROCEED => "Do Not Wish to Proceed",
            self::NO_FURTHER_ACTION => "No Further Action",
            self::NO_RESPONSE_FROM_THIRD_PARTY => "No Response from Third Party",
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
