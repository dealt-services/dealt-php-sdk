<?php

namespace Dealt\DealtSDK\GraphQL\Types\Object;

use Dealt\DealtSDK\GraphQL\Types\Enum\OfferAvailabilityQueryFailureReason;

/**
 * @property string $reason
 */
class OfferAvailabilityQueryFailure extends AbstractObjectType
{
    public static $objectName       = 'OfferAvailabilityQuery_Failure';
    public static $objectDefinition =  [
        'reason'  => [
            'objectType'  => 'OfferAvailabilityQuery_FailureReason!',
            'objectClass' => OfferAvailabilityQueryFailureReason::class,
            'isEnum'      => true,
        ],
    ];

    public static function fromJson($json): OfferAvailabilityQueryFailure
    {
        return parent::fromJson($json);
    }
}
