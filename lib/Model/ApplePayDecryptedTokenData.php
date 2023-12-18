<?php
/**
 * ApplePayDecryptedTokenData
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ApplePayDecryptedTokenData Class Doc Comment
 *
 * @category Class
 * @description Information about the Payment data obtained by decrypting Apple Pay token.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplePayDecryptedTokenData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'apple_pay_decrypted_token_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_amount' => '\OpenAPI\Client\Model\Money2',
        'tokenized_card' => '\OpenAPI\Client\Model\Card',
        'device_manufacturer_id' => 'string',
        'payment_data_type' => 'string',
        'payment_data' => '\OpenAPI\Client\Model\ApplePayPaymentData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_amount' => null,
        'tokenized_card' => null,
        'device_manufacturer_id' => null,
        'payment_data_type' => null,
        'payment_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_amount' => false,
		'tokenized_card' => false,
		'device_manufacturer_id' => false,
		'payment_data_type' => false,
		'payment_data' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'transaction_amount' => 'transaction_amount',
        'tokenized_card' => 'tokenized_card',
        'device_manufacturer_id' => 'device_manufacturer_id',
        'payment_data_type' => 'payment_data_type',
        'payment_data' => 'payment_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_amount' => 'setTransactionAmount',
        'tokenized_card' => 'setTokenizedCard',
        'device_manufacturer_id' => 'setDeviceManufacturerId',
        'payment_data_type' => 'setPaymentDataType',
        'payment_data' => 'setPaymentData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_amount' => 'getTransactionAmount',
        'tokenized_card' => 'getTokenizedCard',
        'device_manufacturer_id' => 'getDeviceManufacturerId',
        'payment_data_type' => 'getPaymentDataType',
        'payment_data' => 'getPaymentData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const PAYMENT_DATA_TYPE__3_DSECURE = '3DSECURE';
    public const PAYMENT_DATA_TYPE_EMV = 'EMV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentDataTypeAllowableValues()
    {
        return [
            self::PAYMENT_DATA_TYPE__3_DSECURE,
            self::PAYMENT_DATA_TYPE_EMV,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('transaction_amount', $data ?? [], null);
        $this->setIfExists('tokenized_card', $data ?? [], null);
        $this->setIfExists('device_manufacturer_id', $data ?? [], null);
        $this->setIfExists('payment_data_type', $data ?? [], null);
        $this->setIfExists('payment_data', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tokenized_card'] === null) {
            $invalidProperties[] = "'tokenized_card' can't be null";
        }
        if (!is_null($this->container['device_manufacturer_id']) && (mb_strlen($this->container['device_manufacturer_id']) > 2000)) {
            $invalidProperties[] = "invalid value for 'device_manufacturer_id', the character length must be smaller than or equal to 2000.";
        }

        if (!is_null($this->container['device_manufacturer_id']) && (mb_strlen($this->container['device_manufacturer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'device_manufacturer_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['device_manufacturer_id']) && !preg_match("/^.*$/", $this->container['device_manufacturer_id'])) {
            $invalidProperties[] = "invalid value for 'device_manufacturer_id', must be conform to the pattern /^.*$/.";
        }

        $allowedValues = $this->getPaymentDataTypeAllowableValues();
        if (!is_null($this->container['payment_data_type']) && !in_array($this->container['payment_data_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_data_type', must be one of '%s'",
                $this->container['payment_data_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payment_data_type']) && (mb_strlen($this->container['payment_data_type']) > 16)) {
            $invalidProperties[] = "invalid value for 'payment_data_type', the character length must be smaller than or equal to 16.";
        }

        if (!is_null($this->container['payment_data_type']) && (mb_strlen($this->container['payment_data_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_data_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payment_data_type']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['payment_data_type'])) {
            $invalidProperties[] = "invalid value for 'payment_data_type', must be conform to the pattern /^[0-9A-Z_]+$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets transaction_amount
     *
     * @return \OpenAPI\Client\Model\Money2|null
     */
    public function getTransactionAmount()
    {
        return $this->container['transaction_amount'];
    }

    /**
     * Sets transaction_amount
     *
     * @param \OpenAPI\Client\Model\Money2|null $transaction_amount transaction_amount
     *
     * @return self
     */
    public function setTransactionAmount($transaction_amount)
    {
        if (is_null($transaction_amount)) {
            throw new \InvalidArgumentException('non-nullable transaction_amount cannot be null');
        }
        $this->container['transaction_amount'] = $transaction_amount;

        return $this;
    }

    /**
     * Gets tokenized_card
     *
     * @return \OpenAPI\Client\Model\Card
     */
    public function getTokenizedCard()
    {
        return $this->container['tokenized_card'];
    }

    /**
     * Sets tokenized_card
     *
     * @param \OpenAPI\Client\Model\Card $tokenized_card tokenized_card
     *
     * @return self
     */
    public function setTokenizedCard($tokenized_card)
    {
        if (is_null($tokenized_card)) {
            throw new \InvalidArgumentException('non-nullable tokenized_card cannot be null');
        }
        $this->container['tokenized_card'] = $tokenized_card;

        return $this;
    }

    /**
     * Gets device_manufacturer_id
     *
     * @return string|null
     */
    public function getDeviceManufacturerId()
    {
        return $this->container['device_manufacturer_id'];
    }

    /**
     * Sets device_manufacturer_id
     *
     * @param string|null $device_manufacturer_id Apple Pay Hex-encoded device manufacturer identifier. The pattern is defined by an external party and supports Unicode.
     *
     * @return self
     */
    public function setDeviceManufacturerId($device_manufacturer_id)
    {
        if (is_null($device_manufacturer_id)) {
            throw new \InvalidArgumentException('non-nullable device_manufacturer_id cannot be null');
        }
        if ((mb_strlen($device_manufacturer_id) > 2000)) {
            throw new \InvalidArgumentException('invalid length for $device_manufacturer_id when calling ApplePayDecryptedTokenData., must be smaller than or equal to 2000.');
        }
        if ((mb_strlen($device_manufacturer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $device_manufacturer_id when calling ApplePayDecryptedTokenData., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^.*$/", $device_manufacturer_id))) {
            throw new \InvalidArgumentException("invalid value for \$device_manufacturer_id when calling ApplePayDecryptedTokenData., must conform to the pattern /^.*$/.");
        }

        $this->container['device_manufacturer_id'] = $device_manufacturer_id;

        return $this;
    }

    /**
     * Gets payment_data_type
     *
     * @return string|null
     */
    public function getPaymentDataType()
    {
        return $this->container['payment_data_type'];
    }

    /**
     * Sets payment_data_type
     *
     * @param string|null $payment_data_type Indicates the type of payment data passed, in case of Non China the payment data is 3DSECURE and for China it is EMV.
     *
     * @return self
     */
    public function setPaymentDataType($payment_data_type)
    {
        if (is_null($payment_data_type)) {
            throw new \InvalidArgumentException('non-nullable payment_data_type cannot be null');
        }
        $allowedValues = $this->getPaymentDataTypeAllowableValues();
        if (!in_array($payment_data_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_data_type', must be one of '%s'",
                    $payment_data_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($payment_data_type) > 16)) {
            throw new \InvalidArgumentException('invalid length for $payment_data_type when calling ApplePayDecryptedTokenData., must be smaller than or equal to 16.');
        }
        if ((mb_strlen($payment_data_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_data_type when calling ApplePayDecryptedTokenData., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $payment_data_type))) {
            throw new \InvalidArgumentException("invalid value for \$payment_data_type when calling ApplePayDecryptedTokenData., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['payment_data_type'] = $payment_data_type;

        return $this;
    }

    /**
     * Gets payment_data
     *
     * @return \OpenAPI\Client\Model\ApplePayPaymentData|null
     */
    public function getPaymentData()
    {
        return $this->container['payment_data'];
    }

    /**
     * Sets payment_data
     *
     * @param \OpenAPI\Client\Model\ApplePayPaymentData|null $payment_data payment_data
     *
     * @return self
     */
    public function setPaymentData($payment_data)
    {
        if (is_null($payment_data)) {
            throw new \InvalidArgumentException('non-nullable payment_data cannot be null');
        }
        $this->container['payment_data'] = $payment_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


