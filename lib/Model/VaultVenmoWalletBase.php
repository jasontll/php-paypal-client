<?php
/**
 * VaultVenmoWalletBase
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
 * VaultVenmoWalletBase Class Doc Comment
 *
 * @category Class
 * @description Resource consolidating common request and response attirbutes for vaulting Venmo Wallet.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VaultVenmoWalletBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vault_venmo_wallet_base';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'store_in_vault' => '\OpenAPI\Client\Model\StoreInVaultInstruction',
        'description' => 'string',
        'usage_pattern' => 'string',
        'usage_type' => 'string',
        'customer_type' => 'string',
        'permit_multiple_payment_tokens' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'store_in_vault' => null,
        'description' => null,
        'usage_pattern' => null,
        'usage_type' => null,
        'customer_type' => null,
        'permit_multiple_payment_tokens' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'store_in_vault' => false,
		'description' => false,
		'usage_pattern' => false,
		'usage_type' => false,
		'customer_type' => false,
		'permit_multiple_payment_tokens' => false
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
        'store_in_vault' => 'store_in_vault',
        'description' => 'description',
        'usage_pattern' => 'usage_pattern',
        'usage_type' => 'usage_type',
        'customer_type' => 'customer_type',
        'permit_multiple_payment_tokens' => 'permit_multiple_payment_tokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'store_in_vault' => 'setStoreInVault',
        'description' => 'setDescription',
        'usage_pattern' => 'setUsagePattern',
        'usage_type' => 'setUsageType',
        'customer_type' => 'setCustomerType',
        'permit_multiple_payment_tokens' => 'setPermitMultiplePaymentTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'store_in_vault' => 'getStoreInVault',
        'description' => 'getDescription',
        'usage_pattern' => 'getUsagePattern',
        'usage_type' => 'getUsageType',
        'customer_type' => 'getCustomerType',
        'permit_multiple_payment_tokens' => 'getPermitMultiplePaymentTokens'
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

    public const USAGE_PATTERN_IMMEDIATE = 'IMMEDIATE';
    public const USAGE_PATTERN_DEFERRED = 'DEFERRED';
    public const USAGE_PATTERN_RECURRING_PREPAID = 'RECURRING_PREPAID';
    public const USAGE_PATTERN_RECURRING_POSTPAID = 'RECURRING_POSTPAID';
    public const USAGE_PATTERN_THRESHOLD_PREPAID = 'THRESHOLD_PREPAID';
    public const USAGE_PATTERN_THRESHOLD_POSTPAID = 'THRESHOLD_POSTPAID';
    public const USAGE_TYPE_MERCHANT = 'MERCHANT';
    public const USAGE_TYPE_PLATFORM = 'PLATFORM';
    public const CUSTOMER_TYPE_CONSUMER = 'CONSUMER';
    public const CUSTOMER_TYPE_BUSINESS = 'BUSINESS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsagePatternAllowableValues()
    {
        return [
            self::USAGE_PATTERN_IMMEDIATE,
            self::USAGE_PATTERN_DEFERRED,
            self::USAGE_PATTERN_RECURRING_PREPAID,
            self::USAGE_PATTERN_RECURRING_POSTPAID,
            self::USAGE_PATTERN_THRESHOLD_PREPAID,
            self::USAGE_PATTERN_THRESHOLD_POSTPAID,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUsageTypeAllowableValues()
    {
        return [
            self::USAGE_TYPE_MERCHANT,
            self::USAGE_TYPE_PLATFORM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCustomerTypeAllowableValues()
    {
        return [
            self::CUSTOMER_TYPE_CONSUMER,
            self::CUSTOMER_TYPE_BUSINESS,
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
        $this->setIfExists('store_in_vault', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('usage_pattern', $data ?? [], null);
        $this->setIfExists('usage_type', $data ?? [], null);
        $this->setIfExists('customer_type', $data ?? [], 'CONSUMER');
        $this->setIfExists('permit_multiple_payment_tokens', $data ?? [], false);
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

        if ($this->container['store_in_vault'] === null) {
            $invalidProperties[] = "'store_in_vault' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && !preg_match("/^[a-zA-Z0-9_'\\-., :;\\!?\"]*$/", $this->container['description'])) {
            $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[a-zA-Z0-9_'\\-., :;\\!?\"]*$/.";
        }

        $allowedValues = $this->getUsagePatternAllowableValues();
        if (!is_null($this->container['usage_pattern']) && !in_array($this->container['usage_pattern'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'usage_pattern', must be one of '%s'",
                $this->container['usage_pattern'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['usage_pattern']) && (mb_strlen($this->container['usage_pattern']) > 30)) {
            $invalidProperties[] = "invalid value for 'usage_pattern', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['usage_pattern']) && (mb_strlen($this->container['usage_pattern']) < 1)) {
            $invalidProperties[] = "invalid value for 'usage_pattern', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['usage_pattern']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['usage_pattern'])) {
            $invalidProperties[] = "invalid value for 'usage_pattern', must be conform to the pattern /^[0-9A-Z_]+$/.";
        }

        if ($this->container['usage_type'] === null) {
            $invalidProperties[] = "'usage_type' can't be null";
        }
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($this->container['usage_type']) && !in_array($this->container['usage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'usage_type', must be one of '%s'",
                $this->container['usage_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['usage_type']) > 255)) {
            $invalidProperties[] = "invalid value for 'usage_type', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['usage_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'usage_type', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[0-9A-Z_]+$/", $this->container['usage_type'])) {
            $invalidProperties[] = "invalid value for 'usage_type', must be conform to the pattern /^[0-9A-Z_]+$/.";
        }

        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!is_null($this->container['customer_type']) && !in_array($this->container['customer_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'customer_type', must be one of '%s'",
                $this->container['customer_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['customer_type']) && (mb_strlen($this->container['customer_type']) > 255)) {
            $invalidProperties[] = "invalid value for 'customer_type', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['customer_type']) && (mb_strlen($this->container['customer_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'customer_type', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['customer_type']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['customer_type'])) {
            $invalidProperties[] = "invalid value for 'customer_type', must be conform to the pattern /^[0-9A-Z_]+$/.";
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
     * Gets store_in_vault
     *
     * @return \OpenAPI\Client\Model\StoreInVaultInstruction
     */
    public function getStoreInVault()
    {
        return $this->container['store_in_vault'];
    }

    /**
     * Sets store_in_vault
     *
     * @param \OpenAPI\Client\Model\StoreInVaultInstruction $store_in_vault store_in_vault
     *
     * @return self
     */
    public function setStoreInVault($store_in_vault)
    {
        if (is_null($store_in_vault)) {
            throw new \InvalidArgumentException('non-nullable store_in_vault cannot be null');
        }
        $this->container['store_in_vault'] = $store_in_vault;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description displayed to Venmo consumer on the approval flow for Venmo, as well as on the Venmo payment token management experience on Venmo.com.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 128)) {
            throw new \InvalidArgumentException('invalid length for $description when calling VaultVenmoWalletBase., must be smaller than or equal to 128.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling VaultVenmoWalletBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9_'\\-., :;\\!?\"]*$/", $description))) {
            throw new \InvalidArgumentException("invalid value for \$description when calling VaultVenmoWalletBase., must conform to the pattern /^[a-zA-Z0-9_'\\-., :;\\!?\"]*$/.");
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets usage_pattern
     *
     * @return string|null
     */
    public function getUsagePattern()
    {
        return $this->container['usage_pattern'];
    }

    /**
     * Sets usage_pattern
     *
     * @param string|null $usage_pattern Expected business/pricing model for the billing agreement.
     *
     * @return self
     */
    public function setUsagePattern($usage_pattern)
    {
        if (is_null($usage_pattern)) {
            throw new \InvalidArgumentException('non-nullable usage_pattern cannot be null');
        }
        $allowedValues = $this->getUsagePatternAllowableValues();
        if (!in_array($usage_pattern, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'usage_pattern', must be one of '%s'",
                    $usage_pattern,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($usage_pattern) > 30)) {
            throw new \InvalidArgumentException('invalid length for $usage_pattern when calling VaultVenmoWalletBase., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($usage_pattern) < 1)) {
            throw new \InvalidArgumentException('invalid length for $usage_pattern when calling VaultVenmoWalletBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $usage_pattern))) {
            throw new \InvalidArgumentException("invalid value for \$usage_pattern when calling VaultVenmoWalletBase., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['usage_pattern'] = $usage_pattern;

        return $this;
    }

    /**
     * Gets usage_type
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     *
     * @param string $usage_type The usage type associated with the Venmo payment token.
     *
     * @return self
     */
    public function setUsageType($usage_type)
    {
        if (is_null($usage_type)) {
            throw new \InvalidArgumentException('non-nullable usage_type cannot be null');
        }
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!in_array($usage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'usage_type', must be one of '%s'",
                    $usage_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($usage_type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $usage_type when calling VaultVenmoWalletBase., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($usage_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $usage_type when calling VaultVenmoWalletBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $usage_type))) {
            throw new \InvalidArgumentException("invalid value for \$usage_type when calling VaultVenmoWalletBase., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets customer_type
     *
     * @return string|null
     */
    public function getCustomerType()
    {
        return $this->container['customer_type'];
    }

    /**
     * Sets customer_type
     *
     * @param string|null $customer_type The customer type associated with the Venmo payment token. This is to indicate whether the customer acting on the merchant / platform is either a business or a consumer.
     *
     * @return self
     */
    public function setCustomerType($customer_type)
    {
        if (is_null($customer_type)) {
            throw new \InvalidArgumentException('non-nullable customer_type cannot be null');
        }
        $allowedValues = $this->getCustomerTypeAllowableValues();
        if (!in_array($customer_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'customer_type', must be one of '%s'",
                    $customer_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($customer_type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $customer_type when calling VaultVenmoWalletBase., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($customer_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $customer_type when calling VaultVenmoWalletBase., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $customer_type))) {
            throw new \InvalidArgumentException("invalid value for \$customer_type when calling VaultVenmoWalletBase., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['customer_type'] = $customer_type;

        return $this;
    }

    /**
     * Gets permit_multiple_payment_tokens
     *
     * @return bool|null
     */
    public function getPermitMultiplePaymentTokens()
    {
        return $this->container['permit_multiple_payment_tokens'];
    }

    /**
     * Sets permit_multiple_payment_tokens
     *
     * @param bool|null $permit_multiple_payment_tokens Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the customer has not logged in at merchant/platform. The payment token thus generated, can then also be used to create the customer account at merchant/platform. Use this also when multiple payment tokens are required for the same payer, different customer at merchant/platform. This helps to identify customers distinctly even though they may share the same Venmo account.
     *
     * @return self
     */
    public function setPermitMultiplePaymentTokens($permit_multiple_payment_tokens)
    {
        if (is_null($permit_multiple_payment_tokens)) {
            throw new \InvalidArgumentException('non-nullable permit_multiple_payment_tokens cannot be null');
        }
        $this->container['permit_multiple_payment_tokens'] = $permit_multiple_payment_tokens;

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


