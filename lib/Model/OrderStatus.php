<?php
/**
 * OrderStatus
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
 * OrderStatus Class Doc Comment
 *
 * @category Class
 * @description The order status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrderStatus
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'CREATED';

    public const SAVED = 'SAVED';

    public const APPROVED = 'APPROVED';

    public const VOIDED = 'VOIDED';

    public const COMPLETED = 'COMPLETED';

    public const PAYER_ACTION_REQUIRED = 'PAYER_ACTION_REQUIRED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::SAVED,
            self::APPROVED,
            self::VOIDED,
            self::COMPLETED,
            self::PAYER_ACTION_REQUIRED
        ];
    }
}


