<?php
/**
 * ApplePayRequest
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
 * ApplePayRequest Class Doc Comment
 *
 * @category Class
 * @description Information needed to pay using ApplePay.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApplePayRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'apple_pay_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'email_address' => 'string',
        'phone_number' => '\OpenAPI\Client\Model\Phone',
        'decrypted_token' => '\OpenAPI\Client\Model\ApplePayDecryptedTokenData',
        'stored_credential' => '\OpenAPI\Client\Model\CardStoredCredential',
        'vault_id' => 'string',
        'attributes' => 'mixed'
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
        'email_address' => 'ppaas_common_email_address_v2',
        'phone_number' => null,
        'decrypted_token' => null,
        'stored_credential' => null,
        'vault_id' => null,
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
		'email_address' => false,
		'phone_number' => false,
		'decrypted_token' => false,
		'stored_credential' => false,
		'vault_id' => false,
		'attributes' => true
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
        'email_address' => 'email_address',
        'phone_number' => 'phone_number',
        'decrypted_token' => 'decrypted_token',
        'stored_credential' => 'stored_credential',
        'vault_id' => 'vault_id',
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
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
        'decrypted_token' => 'setDecryptedToken',
        'stored_credential' => 'setStoredCredential',
        'vault_id' => 'setVaultId',
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
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'decrypted_token' => 'getDecryptedToken',
        'stored_credential' => 'getStoredCredential',
        'vault_id' => 'getVaultId',
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
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('decrypted_token', $data ?? [], null);
        $this->setIfExists('stored_credential', $data ?? [], null);
        $this->setIfExists('vault_id', $data ?? [], null);
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

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 250)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['id']) && !preg_match("/^.*$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^.*$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 300)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) > 254)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be smaller than or equal to 254.";
        }

        if (!is_null($this->container['email_address']) && (mb_strlen($this->container['email_address']) < 3)) {
            $invalidProperties[] = "invalid value for 'email_address', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['email_address']) && !preg_match("/^.+@[^\"\\-].+$/", $this->container['email_address'])) {
            $invalidProperties[] = "invalid value for 'email_address', must be conform to the pattern /^.+@[^\"\\-].+$/.";
        }

        if (!is_null($this->container['vault_id']) && (mb_strlen($this->container['vault_id']) > 255)) {
            $invalidProperties[] = "invalid value for 'vault_id', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['vault_id']) && (mb_strlen($this->container['vault_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'vault_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['vault_id']) && !preg_match("/^[0-9a-zA-Z_-]+$/", $this->container['vault_id'])) {
            $invalidProperties[] = "invalid value for 'vault_id', must be conform to the pattern /^[0-9a-zA-Z_-]+$/.";
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
     * @param string|null $id ApplePay transaction identifier, this will be the unique identifier for this transaction provided by Apple. The pattern is defined by an external party and supports Unicode.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        if ((mb_strlen($id) > 250)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApplePayRequest., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling ApplePayRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^.*$/", $id))) {
            throw new \InvalidArgumentException("invalid value for \$id when calling ApplePayRequest., must conform to the pattern /^.*$/.");
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
     * @param string|null $name The full name representation like Mr J Smith.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 300)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ApplePayRequest., must be smaller than or equal to 300.');
        }
        if ((mb_strlen($name) < 3)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ApplePayRequest., must be bigger than or equal to 3.');
        }

        $this->container['name'] = $name;

        return $this;
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
            throw new \InvalidArgumentException('invalid length for $email_address when calling ApplePayRequest., must be smaller than or equal to 254.');
        }
        if ((mb_strlen($email_address) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling ApplePayRequest., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^.+@[^\"\\-].+$/", $email_address))) {
            throw new \InvalidArgumentException("invalid value for \$email_address when calling ApplePayRequest., must conform to the pattern /^.+@[^\"\\-].+$/.");
        }

        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return \OpenAPI\Client\Model\Phone|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param \OpenAPI\Client\Model\Phone|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets decrypted_token
     *
     * @return \OpenAPI\Client\Model\ApplePayDecryptedTokenData|null
     */
    public function getDecryptedToken()
    {
        return $this->container['decrypted_token'];
    }

    /**
     * Sets decrypted_token
     *
     * @param \OpenAPI\Client\Model\ApplePayDecryptedTokenData|null $decrypted_token decrypted_token
     *
     * @return self
     */
    public function setDecryptedToken($decrypted_token)
    {
        if (is_null($decrypted_token)) {
            throw new \InvalidArgumentException('non-nullable decrypted_token cannot be null');
        }
        $this->container['decrypted_token'] = $decrypted_token;

        return $this;
    }

    /**
     * Gets stored_credential
     *
     * @return \OpenAPI\Client\Model\CardStoredCredential|null
     */
    public function getStoredCredential()
    {
        return $this->container['stored_credential'];
    }

    /**
     * Sets stored_credential
     *
     * @param \OpenAPI\Client\Model\CardStoredCredential|null $stored_credential stored_credential
     *
     * @return self
     */
    public function setStoredCredential($stored_credential)
    {
        if (is_null($stored_credential)) {
            throw new \InvalidArgumentException('non-nullable stored_credential cannot be null');
        }
        $this->container['stored_credential'] = $stored_credential;

        return $this;
    }

    /**
     * Gets vault_id
     *
     * @return string|null
     */
    public function getVaultId()
    {
        return $this->container['vault_id'];
    }

    /**
     * Sets vault_id
     *
     * @param string|null $vault_id The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's server so the saved payment source can be used for future transactions.
     *
     * @return self
     */
    public function setVaultId($vault_id)
    {
        if (is_null($vault_id)) {
            throw new \InvalidArgumentException('non-nullable vault_id cannot be null');
        }
        if ((mb_strlen($vault_id) > 255)) {
            throw new \InvalidArgumentException('invalid length for $vault_id when calling ApplePayRequest., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($vault_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $vault_id when calling ApplePayRequest., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-zA-Z_-]+$/", $vault_id))) {
            throw new \InvalidArgumentException("invalid value for \$vault_id when calling ApplePayRequest., must conform to the pattern /^[0-9a-zA-Z_-]+$/.");
        }

        $this->container['vault_id'] = $vault_id;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return mixed|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param mixed|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        if (is_null($attributes)) {
            array_push($this->openAPINullablesSetToNull, 'attributes');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attributes', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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


