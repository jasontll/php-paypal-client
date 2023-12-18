<?php
/**
 * StoredPaymentSource
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
 * StoredPaymentSource Class Doc Comment
 *
 * @category Class
 * @description Provides additional details to process a payment using a &#x60;payment_source&#x60; that has been stored or is intended to be stored (also referred to as stored_credential or card-on-file).&lt;br/&gt;Parameter compatibility:&lt;br/&gt;&lt;ul&gt;&lt;li&gt;&#x60;payment_type&#x3D;ONE_TIME&#x60; is compatible only with &#x60;payment_initiator&#x3D;CUSTOMER&#x60;.&lt;/li&gt;&lt;li&gt;&#x60;usage&#x3D;FIRST&#x60; is compatible only with &#x60;payment_initiator&#x3D;CUSTOMER&#x60;.&lt;/li&gt;&lt;li&gt;&#x60;previous_transaction_reference&#x60; or &#x60;previous_network_transaction_reference&#x60; is compatible only with &#x60;payment_initiator&#x3D;MERCHANT&#x60;.&lt;/li&gt;&lt;li&gt;Only one of the parameters - &#x60;previous_transaction_reference&#x60; and &#x60;previous_network_transaction_reference&#x60; - can be present in the request.&lt;/li&gt;&lt;/ul&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoredPaymentSource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'stored_payment_source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_initiator' => '\OpenAPI\Client\Model\PaymentInitiator',
        'payment_type' => '\OpenAPI\Client\Model\StoredPaymentSourcePaymentType',
        'usage' => '\OpenAPI\Client\Model\StoredPaymentSourceUsageType',
        'previous_network_transaction_reference' => '\OpenAPI\Client\Model\NetworkTransactionReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_initiator' => null,
        'payment_type' => null,
        'usage' => null,
        'previous_network_transaction_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_initiator' => false,
		'payment_type' => false,
		'usage' => false,
		'previous_network_transaction_reference' => false
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
        'payment_initiator' => 'payment_initiator',
        'payment_type' => 'payment_type',
        'usage' => 'usage',
        'previous_network_transaction_reference' => 'previous_network_transaction_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_initiator' => 'setPaymentInitiator',
        'payment_type' => 'setPaymentType',
        'usage' => 'setUsage',
        'previous_network_transaction_reference' => 'setPreviousNetworkTransactionReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_initiator' => 'getPaymentInitiator',
        'payment_type' => 'getPaymentType',
        'usage' => 'getUsage',
        'previous_network_transaction_reference' => 'getPreviousNetworkTransactionReference'
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
        $this->setIfExists('payment_initiator', $data ?? [], null);
        $this->setIfExists('payment_type', $data ?? [], null);
        $this->setIfExists('usage', $data ?? [], null);
        $this->setIfExists('previous_network_transaction_reference', $data ?? [], null);
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

        if ($this->container['payment_initiator'] === null) {
            $invalidProperties[] = "'payment_initiator' can't be null";
        }
        if ($this->container['payment_type'] === null) {
            $invalidProperties[] = "'payment_type' can't be null";
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
     * Gets payment_initiator
     *
     * @return \OpenAPI\Client\Model\PaymentInitiator
     */
    public function getPaymentInitiator()
    {
        return $this->container['payment_initiator'];
    }

    /**
     * Sets payment_initiator
     *
     * @param \OpenAPI\Client\Model\PaymentInitiator $payment_initiator payment_initiator
     *
     * @return self
     */
    public function setPaymentInitiator($payment_initiator)
    {
        if (is_null($payment_initiator)) {
            throw new \InvalidArgumentException('non-nullable payment_initiator cannot be null');
        }
        $this->container['payment_initiator'] = $payment_initiator;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return \OpenAPI\Client\Model\StoredPaymentSourcePaymentType
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param \OpenAPI\Client\Model\StoredPaymentSourcePaymentType $payment_type payment_type
     *
     * @return self
     */
    public function setPaymentType($payment_type)
    {
        if (is_null($payment_type)) {
            throw new \InvalidArgumentException('non-nullable payment_type cannot be null');
        }
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return \OpenAPI\Client\Model\StoredPaymentSourceUsageType|null
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param \OpenAPI\Client\Model\StoredPaymentSourceUsageType|null $usage usage
     *
     * @return self
     */
    public function setUsage($usage)
    {
        if (is_null($usage)) {
            throw new \InvalidArgumentException('non-nullable usage cannot be null');
        }
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets previous_network_transaction_reference
     *
     * @return \OpenAPI\Client\Model\NetworkTransactionReference|null
     */
    public function getPreviousNetworkTransactionReference()
    {
        return $this->container['previous_network_transaction_reference'];
    }

    /**
     * Sets previous_network_transaction_reference
     *
     * @param \OpenAPI\Client\Model\NetworkTransactionReference|null $previous_network_transaction_reference previous_network_transaction_reference
     *
     * @return self
     */
    public function setPreviousNetworkTransactionReference($previous_network_transaction_reference)
    {
        if (is_null($previous_network_transaction_reference)) {
            throw new \InvalidArgumentException('non-nullable previous_network_transaction_reference cannot be null');
        }
        $this->container['previous_network_transaction_reference'] = $previous_network_transaction_reference;

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


