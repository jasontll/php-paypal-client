<?php
/**
 * ShipmentTrackingNumberType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Orders
 *
 * An order represents a payment between two or more parties. Use the Orders API to create, update, retrieve, authorize, and capture orders.
 *
 * The version of the OpenAPI document: 2.13
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ShipmentTrackingNumberType Class Doc Comment
 *
 * @category Class
 * @description The tracking number type.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentTrackingNumberType
{
    /**
     * Possible values of this enum
     */
    public const CARRIER_PROVIDED = 'CARRIER_PROVIDED';

    public const E2_E_PARTNER_PROVIDED = 'E2E_PARTNER_PROVIDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRIER_PROVIDED,
            self::E2_E_PARTNER_PROVIDED
        ];
    }
}


