<?php
/**
 * StoredPaymentSourceUsageType
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
 * StoredPaymentSourceUsageType Class Doc Comment
 *
 * @category Class
 * @description Indicates if this is a &#x60;first&#x60; or &#x60;subsequent&#x60; payment using a stored payment source (also referred to as stored credential or card on file).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StoredPaymentSourceUsageType
{
    /**
     * Possible values of this enum
     */
    public const FIRST = 'FIRST';

    public const SUBSEQUENT = 'SUBSEQUENT';

    public const DERIVED = 'DERIVED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRST,
            self::SUBSEQUENT,
            self::DERIVED
        ];
    }
}


