<?php
/**
 * Payer
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
 * Payer Class Doc Comment
 *
 * @category Class
 * @description The customer who approves and pays for the order. The customer is also known as the payer.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Payer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email_address' => 'string',
        'payer_id' => 'string',
        'name' => '\OpenAPI\Client\Model\Name',
        'phone' => '\OpenAPI\Client\Model\PhoneWithType',
        'birth_date' => 'string',
        'tax_info' => '\OpenAPI\Client\Model\TaxInfo',
        'address' => '\OpenAPI\Client\Model\AddressPortable'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email_address' => 'merchant_common_email_address_v2',
        'payer_id' => 'ppaas_payer_id_v3',
        'name' => null,
        'phone' => null,
        'birth_date' => 'ppaas_date_notime_v2',
        'tax_info' => null,
        'address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'email_address' => false,
		'payer_id' => false,
		'name' => false,
		'phone' => false,
		'birth_date' => false,
		'tax_info' => false,
		'address' => false
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
        'email_address' => 'email_address',
        'payer_id' => 'payer_id',
        'name' => 'name',
        'phone' => 'phone',
        'birth_date' => 'birth_date',
        'tax_info' => 'tax_info',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_address' => 'setEmailAddress',
        'payer_id' => 'setPayerId',
        'name' => 'setName',
        'phone' => 'setPhone',
        'birth_date' => 'setBirthDate',
        'tax_info' => 'setTaxInfo',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_address' => 'getEmailAddress',
        'payer_id' => 'getPayerId',
        'name' => 'getName',
        'phone' => 'getPhone',
        'birth_date' => 'getBirthDate',
        'tax_info' => 'getTaxInfo',
        'address' => 'getAddress'
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
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('payer_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('tax_info', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
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

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) < 3)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email_address']) && !preg_match("/(?:[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*|(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])/", $this->container['email_address'])) {
            $invalidProperties[] = "invalid value for 'email_address', must be conform to the pattern /(?:[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*|(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])/.";
        }

        if (!is_null($this->container['payer_id']) && (mb_strlen($this->container['payer_id']) > 13)) {
            $invalidProperties[] = "invalid value for 'payer_id', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['payer_id']) && (mb_strlen($this->container['payer_id']) < 13)) {
            $invalidProperties[] = "invalid value for 'payer_id', the character length must be bigger than or equal to 13.";
        }

        if (!is_null($this->container['payer_id']) && !preg_match("/^[2-9A-HJ-NP-Z]{13}$/", $this->container['payer_id'])) {
            $invalidProperties[] = "invalid value for 'payer_id', must be conform to the pattern /^[2-9A-HJ-NP-Z]{13}$/.";
        }

        if (!is_null($this->container['birth_date']) && (mb_strlen($this->container['birth_date']) > 10)) {
            $invalidProperties[] = "invalid value for 'birth_date', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['birth_date']) && (mb_strlen($this->container['birth_date']) < 10)) {
            $invalidProperties[] = "invalid value for 'birth_date', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['birth_date']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $this->container['birth_date'])) {
            $invalidProperties[] = "invalid value for 'birth_date', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.";
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
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted <code>@</code> sign exists.</blockquote>
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        if ((mb_strlen($email_address) > 254)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Payer., must be smaller than or equal to 254.');
        }
        if ((mb_strlen($email_address) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling Payer., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/(?:[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*|(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])/", $email_address))) {
            throw new \InvalidArgumentException("invalid value for \$email_address when calling Payer., must conform to the pattern /(?:[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*|(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?|\\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-zA-Z0-9-]*[a-zA-Z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])/.");
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets payer_id
     *
     * @return string|null
     */
    public function getPayerId()
    {
        return $this->container['payer_id'];
    }

    /**
     * Sets payer_id
     *
     * @param string|null $payer_id The account identifier for a PayPal account.
     *
     * @return self
     */
    public function setPayerId($payer_id)
    {
        if (is_null($payer_id)) {
            throw new \InvalidArgumentException('non-nullable payer_id cannot be null');
        }
        if ((mb_strlen($payer_id) > 13)) {
            throw new \InvalidArgumentException('invalid length for $payer_id when calling Payer., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($payer_id) < 13)) {
            throw new \InvalidArgumentException('invalid length for $payer_id when calling Payer., must be bigger than or equal to 13.');
        }
        if ((!preg_match("/^[2-9A-HJ-NP-Z]{13}$/", $payer_id))) {
            throw new \InvalidArgumentException("invalid value for \$payer_id when calling Payer., must conform to the pattern /^[2-9A-HJ-NP-Z]{13}$/.");
        }

        $this->container['payer_id'] = $payer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \OpenAPI\Client\Model\Name|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \OpenAPI\Client\Model\Name|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \OpenAPI\Client\Model\PhoneWithType|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \OpenAPI\Client\Model\PhoneWithType|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param string|null $birth_date The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To represent special legal values, such as a date of birth, you should use dates with no associated time or time-zone data. Whenever possible, use the standard `date_time` type. This regular expression does not validate all dates. For example, February 31 is valid and nothing is known about leap years.
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }
        if ((mb_strlen($birth_date) > 10)) {
            throw new \InvalidArgumentException('invalid length for $birth_date when calling Payer., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($birth_date) < 10)) {
            throw new \InvalidArgumentException('invalid length for $birth_date when calling Payer., must be bigger than or equal to 10.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birth_date))) {
            throw new \InvalidArgumentException("invalid value for \$birth_date when calling Payer., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/.");
        }

        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets tax_info
     *
     * @return \OpenAPI\Client\Model\TaxInfo|null
     */
    public function getTaxInfo()
    {
        return $this->container['tax_info'];
    }

    /**
     * Sets tax_info
     *
     * @param \OpenAPI\Client\Model\TaxInfo|null $tax_info tax_info
     *
     * @return self
     */
    public function setTaxInfo($tax_info)
    {
        if (is_null($tax_info)) {
            throw new \InvalidArgumentException('non-nullable tax_info cannot be null');
        }
        $this->container['tax_info'] = $tax_info;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\AddressPortable|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\AddressPortable|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

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


