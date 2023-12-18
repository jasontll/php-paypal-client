<?php
/**
 * EciFlag
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
 * EciFlag Class Doc Comment
 *
 * @category Class
 * @description Electronic Commerce Indicator (ECI). The ECI value is part of the 2 data elements that indicate the transaction was processed electronically. This should be passed on the authorization transaction to the Gateway/Processor.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EciFlag
{
    /**
     * Possible values of this enum
     */
    public const MASTERCARD_NON_3_D_SECURE_TRANSACTION = 'MASTERCARD_NON_3D_SECURE_TRANSACTION';

    public const MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION = 'MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION = 'MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION';

    public const FULLY_AUTHENTICATED_TRANSACTION = 'FULLY_AUTHENTICATED_TRANSACTION';

    public const ATTEMPTED_AUTHENTICATION_TRANSACTION = 'ATTEMPTED_AUTHENTICATION_TRANSACTION';

    public const NON_3_D_SECURE_TRANSACTION = 'NON_3D_SECURE_TRANSACTION';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MASTERCARD_NON_3_D_SECURE_TRANSACTION,
            self::MASTERCARD_ATTEMPTED_AUTHENTICATION_TRANSACTION,
            self::MASTERCARD_FULLY_AUTHENTICATED_TRANSACTION,
            self::FULLY_AUTHENTICATED_TRANSACTION,
            self::ATTEMPTED_AUTHENTICATION_TRANSACTION,
            self::NON_3_D_SECURE_TRANSACTION
        ];
    }
}


