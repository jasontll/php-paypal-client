<?php
/**
 * BalancesResponse
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
 * BalancesResponse Class Doc Comment
 *
 * @category Class
 * @description The balances response information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BalancesResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'balances_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balances' => '\OpenAPI\Client\Model\BalanceDetail[]',
        'account_id' => 'string',
        'as_of_time' => 'string',
        'last_refresh_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balances' => null,
        'account_id' => 'ppaas_payer_id_v3',
        'as_of_time' => 'ppaas_date_time_v3',
        'last_refresh_time' => 'ppaas_date_time_v3'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'balances' => false,
		'account_id' => false,
		'as_of_time' => false,
		'last_refresh_time' => false
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
        'balances' => 'balances',
        'account_id' => 'account_id',
        'as_of_time' => 'as_of_time',
        'last_refresh_time' => 'last_refresh_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balances' => 'setBalances',
        'account_id' => 'setAccountId',
        'as_of_time' => 'setAsOfTime',
        'last_refresh_time' => 'setLastRefreshTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balances' => 'getBalances',
        'account_id' => 'getAccountId',
        'as_of_time' => 'getAsOfTime',
        'last_refresh_time' => 'getLastRefreshTime'
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
        $this->setIfExists('balances', $data ?? [], null);
        $this->setIfExists('account_id', $data ?? [], null);
        $this->setIfExists('as_of_time', $data ?? [], null);
        $this->setIfExists('last_refresh_time', $data ?? [], null);
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

        if (!is_null($this->container['balances']) && (count($this->container['balances']) > 200)) {
            $invalidProperties[] = "invalid value for 'balances', number of items must be less than or equal to 200.";
        }

        if (!is_null($this->container['balances']) && (count($this->container['balances']) < 0)) {
            $invalidProperties[] = "invalid value for 'balances', number of items must be greater than or equal to 0.";
        }

        if (!is_null($this->container['account_id']) && (mb_strlen($this->container['account_id']) > 13)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['account_id']) && (mb_strlen($this->container['account_id']) < 13)) {
            $invalidProperties[] = "invalid value for 'account_id', the character length must be bigger than or equal to 13.";
        }

        if (!is_null($this->container['account_id']) && !preg_match("/^[2-9A-HJ-NP-Z]{13}$/", $this->container['account_id'])) {
            $invalidProperties[] = "invalid value for 'account_id', must be conform to the pattern /^[2-9A-HJ-NP-Z]{13}$/.";
        }

        if (!is_null($this->container['as_of_time']) && (mb_strlen($this->container['as_of_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'as_of_time', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['as_of_time']) && (mb_strlen($this->container['as_of_time']) < 20)) {
            $invalidProperties[] = "invalid value for 'as_of_time', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['as_of_time']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['as_of_time'])) {
            $invalidProperties[] = "invalid value for 'as_of_time', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['last_refresh_time']) && (mb_strlen($this->container['last_refresh_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_refresh_time', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_refresh_time']) && (mb_strlen($this->container['last_refresh_time']) < 20)) {
            $invalidProperties[] = "invalid value for 'last_refresh_time', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['last_refresh_time']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['last_refresh_time'])) {
            $invalidProperties[] = "invalid value for 'last_refresh_time', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
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
     * Gets balances
     *
     * @return \OpenAPI\Client\Model\BalanceDetail[]|null
     */
    public function getBalances()
    {
        return $this->container['balances'];
    }

    /**
     * Sets balances
     *
     * @param \OpenAPI\Client\Model\BalanceDetail[]|null $balances An array of balance detail objects.
     *
     * @return self
     */
    public function setBalances($balances)
    {
        if (is_null($balances)) {
            throw new \InvalidArgumentException('non-nullable balances cannot be null');
        }

        if ((count($balances) > 200)) {
            throw new \InvalidArgumentException('invalid value for $balances when calling BalancesResponse., number of items must be less than or equal to 200.');
        }
        if ((count($balances) < 0)) {
            throw new \InvalidArgumentException('invalid length for $balances when calling BalancesResponse., number of items must be greater than or equal to 0.');
        }
        $this->container['balances'] = $balances;

        return $this;
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
     * @param string|null $account_id The PayPal payer ID, which is a masked version of the PayPal account number intended for use with third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is used to encode the result.
     *
     * @return self
     */
    public function setAccountId($account_id)
    {
        if (is_null($account_id)) {
            throw new \InvalidArgumentException('non-nullable account_id cannot be null');
        }
        if ((mb_strlen($account_id) > 13)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling BalancesResponse., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($account_id) < 13)) {
            throw new \InvalidArgumentException('invalid length for $account_id when calling BalancesResponse., must be bigger than or equal to 13.');
        }
        if ((!preg_match("/^[2-9A-HJ-NP-Z]{13}$/", $account_id))) {
            throw new \InvalidArgumentException("invalid value for \$account_id when calling BalancesResponse., must conform to the pattern /^[2-9A-HJ-NP-Z]{13}$/.");
        }

        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets as_of_time
     *
     * @return string|null
     */
    public function getAsOfTime()
    {
        return $this->container['as_of_time'];
    }

    /**
     * Sets as_of_time
     *
     * @param string|null $as_of_time The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setAsOfTime($as_of_time)
    {
        if (is_null($as_of_time)) {
            throw new \InvalidArgumentException('non-nullable as_of_time cannot be null');
        }
        if ((mb_strlen($as_of_time) > 64)) {
            throw new \InvalidArgumentException('invalid length for $as_of_time when calling BalancesResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($as_of_time) < 20)) {
            throw new \InvalidArgumentException('invalid length for $as_of_time when calling BalancesResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $as_of_time))) {
            throw new \InvalidArgumentException("invalid value for \$as_of_time when calling BalancesResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['as_of_time'] = $as_of_time;

        return $this;
    }

    /**
     * Gets last_refresh_time
     *
     * @return string|null
     */
    public function getLastRefreshTime()
    {
        return $this->container['last_refresh_time'];
    }

    /**
     * Sets last_refresh_time
     *
     * @param string|null $last_refresh_time The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setLastRefreshTime($last_refresh_time)
    {
        if (is_null($last_refresh_time)) {
            throw new \InvalidArgumentException('non-nullable last_refresh_time cannot be null');
        }
        if ((mb_strlen($last_refresh_time) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_refresh_time when calling BalancesResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($last_refresh_time) < 20)) {
            throw new \InvalidArgumentException('invalid length for $last_refresh_time when calling BalancesResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $last_refresh_time))) {
            throw new \InvalidArgumentException("invalid value for \$last_refresh_time when calling BalancesResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['last_refresh_time'] = $last_refresh_time;

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


