<?php
/**
 * OrderConfirmApplicationContext
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
 * OrderConfirmApplicationContext Class Doc Comment
 *
 * @category Class
 * @description Customizes the payer confirmation experience.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderConfirmApplicationContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_confirm_application_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand_name' => 'string',
        'locale' => 'string',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'stored_payment_source' => '\OpenAPI\Client\Model\StoredPaymentSource'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brand_name' => null,
        'locale' => 'ppaas_common_language_v3',
        'return_url' => 'uri',
        'cancel_url' => 'uri',
        'stored_payment_source' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'brand_name' => false,
		'locale' => false,
		'return_url' => false,
		'cancel_url' => false,
		'stored_payment_source' => false
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
        'brand_name' => 'brand_name',
        'locale' => 'locale',
        'return_url' => 'return_url',
        'cancel_url' => 'cancel_url',
        'stored_payment_source' => 'stored_payment_source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand_name' => 'setBrandName',
        'locale' => 'setLocale',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'stored_payment_source' => 'setStoredPaymentSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand_name' => 'getBrandName',
        'locale' => 'getLocale',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'stored_payment_source' => 'getStoredPaymentSource'
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
        $this->setIfExists('brand_name', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('return_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('stored_payment_source', $data ?? [], null);
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

        if (!is_null($this->container['brand_name']) && (mb_strlen($this->container['brand_name']) > 127)) {
            $invalidProperties[] = "invalid value for 'brand_name', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['brand_name']) && (mb_strlen($this->container['brand_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'brand_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) > 10)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['locale']) && (mb_strlen($this->container['locale']) < 2)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['locale']) && !preg_match("/^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/", $this->container['locale'])) {
            $invalidProperties[] = "invalid value for 'locale', must be conform to the pattern /^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/.";
        }

        if (!is_null($this->container['return_url']) && (mb_strlen($this->container['return_url']) > 4000)) {
            $invalidProperties[] = "invalid value for 'return_url', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['return_url']) && (mb_strlen($this->container['return_url']) < 10)) {
            $invalidProperties[] = "invalid value for 'return_url', the character length must be bigger than or equal to 10.";
        }

        if (!is_null($this->container['cancel_url']) && (mb_strlen($this->container['cancel_url']) > 4000)) {
            $invalidProperties[] = "invalid value for 'cancel_url', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['cancel_url']) && (mb_strlen($this->container['cancel_url']) < 10)) {
            $invalidProperties[] = "invalid value for 'cancel_url', the character length must be bigger than or equal to 10.";
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
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name Label to present to your payer as part of the PayPal hosted web experience.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        if (is_null($brand_name)) {
            throw new \InvalidArgumentException('non-nullable brand_name cannot be null');
        }
        if ((mb_strlen($brand_name) > 127)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling OrderConfirmApplicationContext., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($brand_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling OrderConfirmApplicationContext., must be bigger than or equal to 1.');
        }

        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to localize the error-related strings, such as messages, issues, and suggested actions. The tag is made up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166 alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.org/unsd/methodology/m49/).
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        if ((mb_strlen($locale) > 10)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling OrderConfirmApplicationContext., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling OrderConfirmApplicationContext., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for \$locale when calling OrderConfirmApplicationContext., must conform to the pattern /^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string|null
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string|null $return_url The URL where the customer is redirected after the customer approves the payment.
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        if (is_null($return_url)) {
            throw new \InvalidArgumentException('non-nullable return_url cannot be null');
        }
        if ((mb_strlen($return_url) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $return_url when calling OrderConfirmApplicationContext., must be smaller than or equal to 4000.');
        }
        if ((mb_strlen($return_url) < 10)) {
            throw new \InvalidArgumentException('invalid length for $return_url when calling OrderConfirmApplicationContext., must be bigger than or equal to 10.');
        }

        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url The URL where the customer is redirected after the customer cancels the payment.
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        if ((mb_strlen($cancel_url) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $cancel_url when calling OrderConfirmApplicationContext., must be smaller than or equal to 4000.');
        }
        if ((mb_strlen($cancel_url) < 10)) {
            throw new \InvalidArgumentException('invalid length for $cancel_url when calling OrderConfirmApplicationContext., must be bigger than or equal to 10.');
        }

        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets stored_payment_source
     *
     * @return \OpenAPI\Client\Model\StoredPaymentSource|null
     */
    public function getStoredPaymentSource()
    {
        return $this->container['stored_payment_source'];
    }

    /**
     * Sets stored_payment_source
     *
     * @param \OpenAPI\Client\Model\StoredPaymentSource|null $stored_payment_source stored_payment_source
     *
     * @return self
     */
    public function setStoredPaymentSource($stored_payment_source)
    {
        if (is_null($stored_payment_source)) {
            throw new \InvalidArgumentException('non-nullable stored_payment_source cannot be null');
        }
        $this->container['stored_payment_source'] = $stored_payment_source;

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

