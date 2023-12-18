<?php
/**
 * BlikOneClick
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
 * BlikOneClick Class Doc Comment
 *
 * @category Class
 * @description Information used to pay using BLIK one-click flow.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BlikOneClick implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'blik_one_click';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'auth_code' => 'string',
        'consumer_reference' => 'string',
        'alias_label' => 'string',
        'alias_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'auth_code' => null,
        'consumer_reference' => null,
        'alias_label' => null,
        'alias_key' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'auth_code' => false,
		'consumer_reference' => false,
		'alias_label' => false,
		'alias_key' => false
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
        'auth_code' => 'auth_code',
        'consumer_reference' => 'consumer_reference',
        'alias_label' => 'alias_label',
        'alias_key' => 'alias_key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auth_code' => 'setAuthCode',
        'consumer_reference' => 'setConsumerReference',
        'alias_label' => 'setAliasLabel',
        'alias_key' => 'setAliasKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auth_code' => 'getAuthCode',
        'consumer_reference' => 'getConsumerReference',
        'alias_label' => 'getAliasLabel',
        'alias_key' => 'getAliasKey'
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
        $this->setIfExists('auth_code', $data ?? [], null);
        $this->setIfExists('consumer_reference', $data ?? [], null);
        $this->setIfExists('alias_label', $data ?? [], null);
        $this->setIfExists('alias_key', $data ?? [], null);
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

        if (!is_null($this->container['auth_code']) && (mb_strlen($this->container['auth_code']) > 6)) {
            $invalidProperties[] = "invalid value for 'auth_code', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['auth_code']) && (mb_strlen($this->container['auth_code']) < 6)) {
            $invalidProperties[] = "invalid value for 'auth_code', the character length must be bigger than or equal to 6.";
        }

        if (!is_null($this->container['auth_code']) && !preg_match("/^[0-9]{6}$/", $this->container['auth_code'])) {
            $invalidProperties[] = "invalid value for 'auth_code', must be conform to the pattern /^[0-9]{6}$/.";
        }

        if ($this->container['consumer_reference'] === null) {
            $invalidProperties[] = "'consumer_reference' can't be null";
        }
        if ((mb_strlen($this->container['consumer_reference']) > 64)) {
            $invalidProperties[] = "invalid value for 'consumer_reference', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['consumer_reference']) < 3)) {
            $invalidProperties[] = "invalid value for 'consumer_reference', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^[ -~]{3,64}$/", $this->container['consumer_reference'])) {
            $invalidProperties[] = "invalid value for 'consumer_reference', must be conform to the pattern /^[ -~]{3,64}$/.";
        }

        if (!is_null($this->container['alias_label']) && (mb_strlen($this->container['alias_label']) > 35)) {
            $invalidProperties[] = "invalid value for 'alias_label', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['alias_label']) && (mb_strlen($this->container['alias_label']) < 8)) {
            $invalidProperties[] = "invalid value for 'alias_label', the character length must be bigger than or equal to 8.";
        }

        if (!is_null($this->container['alias_label']) && !preg_match("/^[ -~]{8,35}$/", $this->container['alias_label'])) {
            $invalidProperties[] = "invalid value for 'alias_label', must be conform to the pattern /^[ -~]{8,35}$/.";
        }

        if (!is_null($this->container['alias_key']) && (mb_strlen($this->container['alias_key']) > 19)) {
            $invalidProperties[] = "invalid value for 'alias_key', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['alias_key']) && (mb_strlen($this->container['alias_key']) < 1)) {
            $invalidProperties[] = "invalid value for 'alias_key', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['alias_key']) && !preg_match("/^[0-9]+$/", $this->container['alias_key'])) {
            $invalidProperties[] = "invalid value for 'alias_key', must be conform to the pattern /^[0-9]+$/.";
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
     * Gets auth_code
     *
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param string|null $auth_code 6-digit code used to authenticate a consumer within BLIK.
     *
     * @return self
     */
    public function setAuthCode($auth_code)
    {
        if (is_null($auth_code)) {
            throw new \InvalidArgumentException('non-nullable auth_code cannot be null');
        }
        if ((mb_strlen($auth_code) > 6)) {
            throw new \InvalidArgumentException('invalid length for $auth_code when calling BlikOneClick., must be smaller than or equal to 6.');
        }
        if ((mb_strlen($auth_code) < 6)) {
            throw new \InvalidArgumentException('invalid length for $auth_code when calling BlikOneClick., must be bigger than or equal to 6.');
        }
        if ((!preg_match("/^[0-9]{6}$/", $auth_code))) {
            throw new \InvalidArgumentException("invalid value for \$auth_code when calling BlikOneClick., must conform to the pattern /^[0-9]{6}$/.");
        }

        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets consumer_reference
     *
     * @return string
     */
    public function getConsumerReference()
    {
        return $this->container['consumer_reference'];
    }

    /**
     * Sets consumer_reference
     *
     * @param string $consumer_reference The merchant generated, unique reference serving as a primary identifier for accounts connected between Blik and a merchant.
     *
     * @return self
     */
    public function setConsumerReference($consumer_reference)
    {
        if (is_null($consumer_reference)) {
            throw new \InvalidArgumentException('non-nullable consumer_reference cannot be null');
        }
        if ((mb_strlen($consumer_reference) > 64)) {
            throw new \InvalidArgumentException('invalid length for $consumer_reference when calling BlikOneClick., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($consumer_reference) < 3)) {
            throw new \InvalidArgumentException('invalid length for $consumer_reference when calling BlikOneClick., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[ -~]{3,64}$/", $consumer_reference))) {
            throw new \InvalidArgumentException("invalid value for \$consumer_reference when calling BlikOneClick., must conform to the pattern /^[ -~]{3,64}$/.");
        }

        $this->container['consumer_reference'] = $consumer_reference;

        return $this;
    }

    /**
     * Gets alias_label
     *
     * @return string|null
     */
    public function getAliasLabel()
    {
        return $this->container['alias_label'];
    }

    /**
     * Sets alias_label
     *
     * @param string|null $alias_label A bank defined identifier used as a display name to allow the payer to differentiate between multiple registered bank accounts.
     *
     * @return self
     */
    public function setAliasLabel($alias_label)
    {
        if (is_null($alias_label)) {
            throw new \InvalidArgumentException('non-nullable alias_label cannot be null');
        }
        if ((mb_strlen($alias_label) > 35)) {
            throw new \InvalidArgumentException('invalid length for $alias_label when calling BlikOneClick., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($alias_label) < 8)) {
            throw new \InvalidArgumentException('invalid length for $alias_label when calling BlikOneClick., must be bigger than or equal to 8.');
        }
        if ((!preg_match("/^[ -~]{8,35}$/", $alias_label))) {
            throw new \InvalidArgumentException("invalid value for \$alias_label when calling BlikOneClick., must conform to the pattern /^[ -~]{8,35}$/.");
        }

        $this->container['alias_label'] = $alias_label;

        return $this;
    }

    /**
     * Gets alias_key
     *
     * @return string|null
     */
    public function getAliasKey()
    {
        return $this->container['alias_key'];
    }

    /**
     * Sets alias_key
     *
     * @param string|null $alias_key A Blik-defined identifier for a specific Blik-enabled bank account that is associated with a given merchant. Used only in conjunction with a Consumer Reference.
     *
     * @return self
     */
    public function setAliasKey($alias_key)
    {
        if (is_null($alias_key)) {
            throw new \InvalidArgumentException('non-nullable alias_key cannot be null');
        }
        if ((mb_strlen($alias_key) > 19)) {
            throw new \InvalidArgumentException('invalid length for $alias_key when calling BlikOneClick., must be smaller than or equal to 19.');
        }
        if ((mb_strlen($alias_key) < 1)) {
            throw new \InvalidArgumentException('invalid length for $alias_key when calling BlikOneClick., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9]+$/", $alias_key))) {
            throw new \InvalidArgumentException("invalid value for \$alias_key when calling BlikOneClick., must conform to the pattern /^[0-9]+$/.");
        }

        $this->container['alias_key'] = $alias_key;

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


