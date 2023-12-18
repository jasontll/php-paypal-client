<?php
/**
 * Card
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
 * Card Class Doc Comment
 *
 * @category Class
 * @description The payment card to use to fund a payment. Can be a credit or debit card.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Card implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'number' => 'string',
        'expiry' => 'string',
        'security_code' => 'string',
        'last_digits' => 'string',
        'card_type' => '\OpenAPI\Client\Model\CardBrand',
        'type' => '\OpenAPI\Client\Model\CardType',
        'brand' => '\OpenAPI\Client\Model\CardBrand',
        'billing_address' => '\OpenAPI\Client\Model\AddressPortable',
        'attributes' => '\OpenAPI\Client\Model\CardAttributes'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'number' => null,
        'expiry' => null,
        'security_code' => null,
        'last_digits' => null,
        'card_type' => null,
        'type' => null,
        'brand' => null,
        'billing_address' => null,
        'attributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'name' => false,
		'number' => false,
		'expiry' => false,
		'security_code' => false,
		'last_digits' => false,
		'card_type' => false,
		'type' => false,
		'brand' => false,
		'billing_address' => false,
		'attributes' => false
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
        'id' => 'id',
        'name' => 'name',
        'number' => 'number',
        'expiry' => 'expiry',
        'security_code' => 'security_code',
        'last_digits' => 'last_digits',
        'card_type' => 'card_type',
        'type' => 'type',
        'brand' => 'brand',
        'billing_address' => 'billing_address',
        'attributes' => 'attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'number' => 'setNumber',
        'expiry' => 'setExpiry',
        'security_code' => 'setSecurityCode',
        'last_digits' => 'setLastDigits',
        'card_type' => 'setCardType',
        'type' => 'setType',
        'brand' => 'setBrand',
        'billing_address' => 'setBillingAddress',
        'attributes' => 'setAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'number' => 'getNumber',
        'expiry' => 'getExpiry',
        'security_code' => 'getSecurityCode',
        'last_digits' => 'getLastDigits',
        'card_type' => 'getCardType',
        'type' => 'getType',
        'brand' => 'getBrand',
        'billing_address' => 'getBillingAddress',
        'attributes' => 'getAttributes'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('expiry', $data ?? [], null);
        $this->setIfExists('security_code', $data ?? [], null);
        $this->setIfExists('last_digits', $data ?? [], null);
        $this->setIfExists('card_type', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('attributes', $data ?? [], null);
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

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 256)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id']) && !preg_match("/^[A-Za-z0-9-_.+=]+$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[A-Za-z0-9-_.+=]+$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 300)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['name']) && !preg_match("/^.{1,300}$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^.{1,300}$/.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 19)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 13)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 13.";
        }

        if (!is_null($this->container['number']) && !preg_match("/^[0-9]{13,19}$/", $this->container['number'])) {
            $invalidProperties[] = "invalid value for 'number', must be conform to the pattern /^[0-9]{13,19}$/.";
        }

        if (!is_null($this->container['expiry']) && (mb_strlen($this->container['expiry']) > 7)) {
            $invalidProperties[] = "invalid value for 'expiry', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['expiry']) && (mb_strlen($this->container['expiry']) < 7)) {
            $invalidProperties[] = "invalid value for 'expiry', the character length must be bigger than or equal to 7.";
        }

        if (!is_null($this->container['expiry']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])$/", $this->container['expiry'])) {
            $invalidProperties[] = "invalid value for 'expiry', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])$/.";
        }

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) > 4)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['security_code']) && (mb_strlen($this->container['security_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'security_code', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['security_code']) && !preg_match("/^[0-9]{3,4}$/", $this->container['security_code'])) {
            $invalidProperties[] = "invalid value for 'security_code', must be conform to the pattern /^[0-9]{3,4}$/.";
        }

        if (!is_null($this->container['last_digits']) && (mb_strlen($this->container['last_digits']) > 4)) {
            $invalidProperties[] = "invalid value for 'last_digits', the character length must be smaller than or equal to 4.";
        }

        if (!is_null($this->container['last_digits']) && (mb_strlen($this->container['last_digits']) < 2)) {
            $invalidProperties[] = "invalid value for 'last_digits', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['last_digits']) && !preg_match("/^[0-9]{2,4}$/", $this->container['last_digits'])) {
            $invalidProperties[] = "invalid value for 'last_digits', must be conform to the pattern /^[0-9]{2,4}$/.";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The identifier of the instrument.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if ((mb_strlen($id) > 256)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Card., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling Card., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-_.+=]+$/", $id))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling Card., must conform to the pattern /^[A-Za-z0-9-_.+=]+$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The card holder's name as it appears on the card.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Card., must be smaller than or equal to 300.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Card., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^.{1,300}$/", $name))) {
            throw new \InvalidArgumentException("invalid value for \$name when calling Card., must conform to the pattern /^.{1,300}$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number The primary account number (PAN) for the payment card.
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        if ((mb_strlen($number) > 19)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Card., must be smaller than or equal to 19.');
        }
        if ((mb_strlen($number) < 13)) {
            throw new \InvalidArgumentException('invalid length for $number when calling Card., must be bigger than or equal to 13.');
        }
        if ((!preg_match("/^[0-9]{13,19}$/", $number))) {
            throw new \InvalidArgumentException("invalid value for \$number when calling Card., must conform to the pattern /^[0-9]{13,19}$/.");
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return string|null
     */
    public function getExpiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param string|null $expiry The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @return self
     */
    public function setExpiry($expiry)
    {
        if (is_null($expiry)) {
            throw new \InvalidArgumentException('non-nullable expiry cannot be null');
        }
        if ((mb_strlen($expiry) > 7)) {
            throw new \InvalidArgumentException('invalid length for $expiry when calling Card., must be smaller than or equal to 7.');
        }
        if ((mb_strlen($expiry) < 7)) {
            throw new \InvalidArgumentException('invalid length for $expiry when calling Card., must be bigger than or equal to 7.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])$/", $expiry))) {
            throw new \InvalidArgumentException("invalid value for \$expiry when calling Card., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])$/.");
        }

        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets security_code
     *
     * @return string|null
     */
    public function getSecurityCode()
    {
        return $this->container['security_code'];
    }

    /**
     * Sets security_code
     *
     * @param string|null $security_code The three- or four-digit security code of the card. Also known as the CVV, CVC, CVN, CVE, or CID. This parameter cannot be present in the request when `payment_initiator=MERCHANT`.
     *
     * @return self
     */
    public function setSecurityCode($security_code)
    {
        if (is_null($security_code)) {
            throw new \InvalidArgumentException('non-nullable security_code cannot be null');
        }
        if ((mb_strlen($security_code) > 4)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling Card., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($security_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $security_code when calling Card., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9]{3,4}$/", $security_code))) {
            throw new \InvalidArgumentException("invalid value for \$security_code when calling Card., must conform to the pattern /^[0-9]{3,4}$/.");
        }

        $this->container['security_code'] = $security_code;

        return $this;
    }

    /**
     * Gets last_digits
     *
     * @return string|null
     */
    public function getLastDigits()
    {
        return $this->container['last_digits'];
    }

    /**
     * Sets last_digits
     *
     * @param string|null $last_digits The last digits of the payment card.
     *
     * @return self
     */
    public function setLastDigits($last_digits)
    {
        if (is_null($last_digits)) {
            throw new \InvalidArgumentException('non-nullable last_digits cannot be null');
        }
        if ((mb_strlen($last_digits) > 4)) {
            throw new \InvalidArgumentException('invalid length for $last_digits when calling Card., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($last_digits) < 2)) {
            throw new \InvalidArgumentException('invalid length for $last_digits when calling Card., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[0-9]{2,4}$/", $last_digits))) {
            throw new \InvalidArgumentException("invalid value for \$last_digits when calling Card., must conform to the pattern /^[0-9]{2,4}$/.");
        }

        $this->container['last_digits'] = $last_digits;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return \OpenAPI\Client\Model\CardBrand|null
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param \OpenAPI\Client\Model\CardBrand|null $card_type card_type
     *
     * @return self
     */
    public function setCardType($card_type)
    {
        if (is_null($card_type)) {
            throw new \InvalidArgumentException('non-nullable card_type cannot be null');
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\CardType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\CardType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return \OpenAPI\Client\Model\CardBrand|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param \OpenAPI\Client\Model\CardBrand|null $brand brand
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \OpenAPI\Client\Model\AddressPortable|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \OpenAPI\Client\Model\AddressPortable|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            throw new \InvalidArgumentException('non-nullable billing_address cannot be null');
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \OpenAPI\Client\Model\CardAttributes|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \OpenAPI\Client\Model\CardAttributes|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            throw new \InvalidArgumentException('non-nullable attributes cannot be null');
        }
        $this->container['attributes'] = $attributes;

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


