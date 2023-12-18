<?php
/**
 * PayerInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Transaction Search
 *
 * Use the Transaction Search API to get the history of transactions for a PayPal account. To use the API on behalf of third parties, you must be part of the PayPal partner network. Reach out to your partner manager for the next steps. To enroll in the partner program, see <a href=\"https://www.paypal.com/my/webapps/mpp/partner-program/global-programs\">Partner with PayPal</a>. For more information about the API, see the <a href=\"/docs/transaction-search/\">Transaction Search API Integration Guide</a>.<blockquote><strong>Note:</strong> To use the API on behalf of third parties, you must be part of the PayPal partner network. Reach out to your partner manager for the next steps. To enroll in the partner program, see <a href=\"https://www.paypal.com/my/webapps/mpp/partner-program/global-programs\">Partner with PayPal</a>.</blockquote>
 *
 * The version of the OpenAPI document: 1.9
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
 * PayerInfo Class Doc Comment
 *
 * @category Class
 * @description The payer information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PayerInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payer_info';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'email_address' => 'string',
        'phone_number' => '\OpenAPI\Client\Model\Phone',
        'address_status' => 'string',
        'payer_status' => 'string',
        'payer_name' => '\OpenAPI\Client\Model\Name',
        'country_code' => 'string',
        'address' => '\OpenAPI\Client\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_id' => null,
        'email_address' => 'ppaas_common_email_address_v2',
        'phone_number' => null,
        'address_status' => null,
        'payer_status' => null,
        'payer_name' => null,
        'country_code' => 'ppaas_common_country_code_v2',
        'address' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'account_id' => false,
		'email_address' => false,
		'phone_number' => false,
		'address_status' => false,
		'payer_status' => false,
		'payer_name' => false,
		'country_code' => false,
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
        'account_id' => 'account_id',
        'email_address' => 'email_address',
        'phone_number' => 'phone_number',
        'address_status' => 'address_status',
        'payer_status' => 'payer_status',
        'payer_name' => 'payer_name',
        'country_code' => 'country_code',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'email_address' => 'setEmailAddress',
        'phone_number' => 'setPhoneNumber',
        'address_status' => 'setAddressStatus',
        'payer_status' => 'setPayerStatus',
        'payer_name' => 'setPayerName',
        'country_code' => 'setCountryCode',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'email_address' => 'getEmailAddress',
        'phone_number' => 'getPhoneNumber',
        'address_status' => 'getAddressStatus',
        'payer_status' => 'getPayerStatus',
        'payer_name' => 'getPayerName',
        'country_code' => 'getCountryCode',
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
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('address_status', $data ?? [], null);
        $this->setIfExists('payer_status', $data ?? [], null);
        $this->setIfExists('payer_name', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
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

        if (!is_null($this->container['account_id']) && (mb_strlen($this->container['account_id']) > 13)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['account_id']) && (mb_strlen($this->container['account_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_id']) && !preg_match("/^[a-zA-Z0-9]*$/", $this->container['account_id'])) {
            $invalidProperties[] = "invalid value for 'account_id', must be conform to the pattern /^[a-zA-Z0-9]*$/.";
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

        if (!is_null($this->container['address_status']) && (mb_strlen($this->container['address_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'address_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['address_status']) && (mb_strlen($this->container['address_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'address_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['address_status']) && !preg_match("/^[N|Y]$/", $this->container['address_status'])) {
            $invalidProperties[] = "invalid value for 'address_status', must be conform to the pattern /^[N|Y]$/.";
        }

        if (!is_null($this->container['payer_status']) && (mb_strlen($this->container['payer_status']) > 1)) {
            $invalidProperties[] = "invalid value for 'payer_status', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['payer_status']) && (mb_strlen($this->container['payer_status']) < 1)) {
            $invalidProperties[] = "invalid value for 'payer_status', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payer_status']) && !preg_match("/^[N|Y]$/", $this->container['payer_status'])) {
            $invalidProperties[] = "invalid value for 'payer_status', must be conform to the pattern /^[N|Y]$/.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be smaller than or equal to 2.";
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_code', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['country_code']) && !preg_match("/^([A-Z]{2}|C2)$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^([A-Z]{2}|C2)$/.";
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id The PayPal` customer account ID.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        if ((mb_strlen($account_id) > 13)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling PayerInfo., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($account_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling PayerInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]*$/", $account_id))) {
            throw new \InvalidArgumentException("invalid value for \$account_id when calling PayerInfo., must conform to the pattern /^[a-zA-Z0-9]*$/.");
        }

        $this->container['account_id'] = $account_id;

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
            throw new \InvalidArgumentException('invalid length for $email_address when calling PayerInfo., must be smaller than or equal to 254.');
        }
        if ((mb_strlen($email_address) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email_address when calling PayerInfo., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^.+@[^\"\\-].+$/", $email_address))) {
            throw new \InvalidArgumentException("invalid value for \$email_address when calling PayerInfo., must conform to the pattern /^.+@[^\"\\-].+$/.");
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
     * Gets address_status
     *
     * @return string|null
     */
    public function getAddressStatus()
    {
        return $this->container['address_status'];
    }

    /**
     * Sets address_status
     *
     * @param string|null $address_status The address status of the payer. Value is either:<ul><li><code>Y</code>. Verified.</li><li><code>N</code>. Not verified.</li></ul>
     *
     * @return self
     */
    public function setAddressStatus($address_status)
    {
        if (is_null($address_status)) {
            throw new \InvalidArgumentException('non-nullable address_status cannot be null');
        }
        if ((mb_strlen($address_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $address_status when calling PayerInfo., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($address_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $address_status when calling PayerInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[N|Y]$/", $address_status))) {
            throw new \InvalidArgumentException("invalid value for \$address_status when calling PayerInfo., must conform to the pattern /^[N|Y]$/.");
        }

        $this->container['address_status'] = $address_status;

        return $this;
    }

    /**
     * Gets payer_status
     *
     * @return string|null
     */
    public function getPayerStatus()
    {
        return $this->container['payer_status'];
    }

    /**
     * Sets payer_status
     *
     * @param string|null $payer_status The status of the payer. Value is `Y` or `N`.
     *
     * @return self
     */
    public function setPayerStatus($payer_status)
    {
        if (is_null($payer_status)) {
            throw new \InvalidArgumentException('non-nullable payer_status cannot be null');
        }
        if ((mb_strlen($payer_status) > 1)) {
            throw new \InvalidArgumentException('invalid length for $payer_status when calling PayerInfo., must be smaller than or equal to 1.');
        }
        if ((mb_strlen($payer_status) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payer_status when calling PayerInfo., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[N|Y]$/", $payer_status))) {
            throw new \InvalidArgumentException("invalid value for \$payer_status when calling PayerInfo., must conform to the pattern /^[N|Y]$/.");
        }

        $this->container['payer_status'] = $payer_status;

        return $this;
    }

    /**
     * Gets payer_name
     *
     * @return \OpenAPI\Client\Model\Name|null
     */
    public function getPayerName()
    {
        return $this->container['payer_name'];
    }

    /**
     * Sets payer_name
     *
     * @param \OpenAPI\Client\Model\Name|null $payer_name payer_name
     *
     * @return self
     */
    public function setPayerName($payer_name)
    {
        if (is_null($payer_name)) {
            throw new \InvalidArgumentException('non-nullable payer_name cannot be null');
        }
        $this->container['payer_name'] = $payer_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code The [two-character ISO 3166-1 code](/docs/integration/direct/rest/country-codes/) that identifies the country or region.<blockquote><strong>Note:</strong> The country code for Great Britain is <code>GB</code> and not <code>UK</code> as used in the top-level domain names for that country. Use the `C2` country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.</blockquote>
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        if ((mb_strlen($country_code) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling PayerInfo., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_code) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_code when calling PayerInfo., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^([A-Z]{2}|C2)$/", $country_code))) {
            throw new \InvalidArgumentException("invalid value for \$country_code when calling PayerInfo., must conform to the pattern /^([A-Z]{2}|C2)$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \OpenAPI\Client\Model\Address|null $address address
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

