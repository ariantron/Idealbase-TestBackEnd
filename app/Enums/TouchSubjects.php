<?php

namespace App\Enums;

class TouchSubjects
{
    const INFORMATION_REQUEST = 'Information Request';
    const BUSINESS_PROPOSAL = 'Business Proposal';
    const JOB_OFFER = 'Job Offer';
    const GENERAL = 'General';

    public static function constants(): array
    {
        return [
            self::INFORMATION_REQUEST,
            self::BUSINESS_PROPOSAL,
            self::JOB_OFFER,
            self::GENERAL
        ];
    }
}
