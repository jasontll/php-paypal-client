<?php
/**
 * CardRequestAllOf
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
 * CardRequestAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CardRequestAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'card_request_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vault_id' => 'string',
        'stored_credential' => '\OpenAPI\Client\Model\CardStoredCredential',
        'network_token' => '\OpenAPI\Client\Model\NetworkTokenRequest',
        'experience_context' => '\OpenAPI\Client\Model\CardExperienceContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vault_id' => null,
        'stored_credential' => null,
        'network_token' => null,
        'experience_context' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vault_id' => false,
		'stored_credential' => false,
		'network_token' => false,
		'experience_context' => false
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
        'vault_id' => 'vault_id',
        'stored_credential' => 'stored_credential',
        'network_token' => 'network_token',
        'experience_context' => 'experience_context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vault_id' => 'setVaultId',
        'stored_credential' => 'setStoredCredential',
        'network_token' => 'setNetworkToken',
        'experience_context' => 'setExperienceContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vault_id' => 'getVaultId',
        'stored_credential' => 'getStoredCredential',
        'network_token' => 'getNetworkToken',
        'experience_context' => 'getExperienceContext'
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
        $this->setIfExists('vault_id', $data ?? [], null);
        $this->setIfExists('stored_credential', $data ?? [], null);
        $this->setIfExists('network_token', $data ?? [], null);
        $this->setIfExists('experience_context', $data ?? [], null);
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
            throw new \InvalidArgumentException('invalid length for $vault_id when calling CardRequestAllOf., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($vault_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $vault_id when calling CardRequestAllOf., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-zA-Z_-]+$/", $vault_id))) {
            throw new \InvalidArgumentException("invalid value for \$vault_id when calling CardRequestAllOf., must conform to the pattern /^[0-9a-zA-Z_-]+$/.");
        }

        $this->container['vault_id'] = $vault_id;

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
     * Gets network_token
     *
     * @return \OpenAPI\Client\Model\NetworkTokenRequest|null
     */
    public function getNetworkToken()
    {
        return $this->container['network_token'];
    }

    /**
     * Sets network_token
     *
     * @param \OpenAPI\Client\Model\NetworkTokenRequest|null $network_token network_token
     *
     * @return self
     */
    public function setNetworkToken($network_token)
    {
        if (is_null($network_token)) {
            throw new \InvalidArgumentException('non-nullable network_token cannot be null');
        }
        $this->container['network_token'] = $network_token;

        return $this;
    }

    /**
     * Gets experience_context
     *
     * @return \OpenAPI\Client\Model\CardExperienceContext|null
     */
    public function getExperienceContext()
    {
        return $this->container['experience_context'];
    }

    /**
     * Sets experience_context
     *
     * @param \OpenAPI\Client\Model\CardExperienceContext|null $experience_context experience_context
     *
     * @return self
     */
    public function setExperienceContext($experience_context)
    {
        if (is_null($experience_context)) {
            throw new \InvalidArgumentException('non-nullable experience_context cannot be null');
        }
        $this->container['experience_context'] = $experience_context;

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


