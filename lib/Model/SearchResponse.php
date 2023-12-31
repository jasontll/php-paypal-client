<?php
/**
 * SearchResponse
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
 * SearchResponse Class Doc Comment
 *
 * @category Class
 * @description The search response information.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SearchResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'search_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_details' => '\OpenAPI\Client\Model\TransactionDetail[]',
        'account_number' => 'string',
        'start_date' => 'string',
        'end_date' => 'string',
        'last_refreshed_datetime' => 'string',
        'page' => 'int',
        'total_items' => 'int',
        'total_pages' => 'int',
        'links' => '\OpenAPI\Client\Model\LinkDescription[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_details' => null,
        'account_number' => null,
        'start_date' => 'ppaas_date_time_v3',
        'end_date' => 'ppaas_date_time_v3',
        'last_refreshed_datetime' => 'ppaas_date_time_v3',
        'page' => null,
        'total_items' => null,
        'total_pages' => null,
        'links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'transaction_details' => false,
		'account_number' => false,
		'start_date' => false,
		'end_date' => false,
		'last_refreshed_datetime' => false,
		'page' => false,
		'total_items' => false,
		'total_pages' => false,
		'links' => false
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
        'transaction_details' => 'transaction_details',
        'account_number' => 'account_number',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'last_refreshed_datetime' => 'last_refreshed_datetime',
        'page' => 'page',
        'total_items' => 'total_items',
        'total_pages' => 'total_pages',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_details' => 'setTransactionDetails',
        'account_number' => 'setAccountNumber',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'last_refreshed_datetime' => 'setLastRefreshedDatetime',
        'page' => 'setPage',
        'total_items' => 'setTotalItems',
        'total_pages' => 'setTotalPages',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_details' => 'getTransactionDetails',
        'account_number' => 'getAccountNumber',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'last_refreshed_datetime' => 'getLastRefreshedDatetime',
        'page' => 'getPage',
        'total_items' => 'getTotalItems',
        'total_pages' => 'getTotalPages',
        'links' => 'getLinks'
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
        $this->setIfExists('transaction_details', $data ?? [], null);
        $this->setIfExists('account_number', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('last_refreshed_datetime', $data ?? [], null);
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('total_items', $data ?? [], null);
        $this->setIfExists('total_pages', $data ?? [], null);
        $this->setIfExists('links', $data ?? [], null);
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

        if (!is_null($this->container['transaction_details']) && (count($this->container['transaction_details']) > 2147483647)) {
            $invalidProperties[] = "invalid value for 'transaction_details', number of items must be less than or equal to 2147483647.";
        }

        if (!is_null($this->container['transaction_details']) && (count($this->container['transaction_details']) < 1)) {
            $invalidProperties[] = "invalid value for 'transaction_details', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && !preg_match("/^[a-zA-Z0-9]*$/", $this->container['account_number'])) {
            $invalidProperties[] = "invalid value for 'account_number', must be conform to the pattern /^[a-zA-Z0-9]*$/.";
        }

        if (!is_null($this->container['start_date']) && (mb_strlen($this->container['start_date']) > 64)) {
            $invalidProperties[] = "invalid value for 'start_date', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['start_date']) && (mb_strlen($this->container['start_date']) < 20)) {
            $invalidProperties[] = "invalid value for 'start_date', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['start_date']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['start_date'])) {
            $invalidProperties[] = "invalid value for 'start_date', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['end_date']) && (mb_strlen($this->container['end_date']) > 64)) {
            $invalidProperties[] = "invalid value for 'end_date', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['end_date']) && (mb_strlen($this->container['end_date']) < 20)) {
            $invalidProperties[] = "invalid value for 'end_date', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['end_date']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['end_date'])) {
            $invalidProperties[] = "invalid value for 'end_date', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['last_refreshed_datetime']) && (mb_strlen($this->container['last_refreshed_datetime']) > 64)) {
            $invalidProperties[] = "invalid value for 'last_refreshed_datetime', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['last_refreshed_datetime']) && (mb_strlen($this->container['last_refreshed_datetime']) < 20)) {
            $invalidProperties[] = "invalid value for 'last_refreshed_datetime', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['last_refreshed_datetime']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['last_refreshed_datetime'])) {
            $invalidProperties[] = "invalid value for 'last_refreshed_datetime', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['page']) && ($this->container['page'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['page']) && ($this->container['page'] < 0)) {
            $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['total_items']) && ($this->container['total_items'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'total_items', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['total_items']) && ($this->container['total_items'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_items', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['total_pages']) && ($this->container['total_pages'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'total_pages', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['total_pages']) && ($this->container['total_pages'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_pages', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['links']) && (count($this->container['links']) > 32767)) {
            $invalidProperties[] = "invalid value for 'links', number of items must be less than or equal to 32767.";
        }

        if (!is_null($this->container['links']) && (count($this->container['links']) < 1)) {
            $invalidProperties[] = "invalid value for 'links', number of items must be greater than or equal to 1.";
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
     * Gets transaction_details
     *
     * @return \OpenAPI\Client\Model\TransactionDetail[]|null
     */
    public function getTransactionDetails()
    {
        return $this->container['transaction_details'];
    }

    /**
     * Sets transaction_details
     *
     * @param \OpenAPI\Client\Model\TransactionDetail[]|null $transaction_details An array of transaction detail objects.
     *
     * @return self
     */
    public function setTransactionDetails($transaction_details)
    {
        if (is_null($transaction_details)) {
            throw new \InvalidArgumentException('non-nullable transaction_details cannot be null');
        }

        if ((count($transaction_details) > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $transaction_details when calling SearchResponse., number of items must be less than or equal to 2147483647.');
        }
        if ((count($transaction_details) < 1)) {
            throw new \InvalidArgumentException('invalid length for $transaction_details when calling SearchResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['transaction_details'] = $transaction_details;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number The merchant account number.
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        if (is_null($account_number)) {
            throw new \InvalidArgumentException('non-nullable account_number cannot be null');
        }
        if ((mb_strlen($account_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling SearchResponse., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($account_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling SearchResponse., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]*$/", $account_number))) {
            throw new \InvalidArgumentException("invalid value for \$account_number when calling SearchResponse., must conform to the pattern /^[a-zA-Z0-9]*$/.");
        }

        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        if ((mb_strlen($start_date) > 64)) {
            throw new \InvalidArgumentException('invalid length for $start_date when calling SearchResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($start_date) < 20)) {
            throw new \InvalidArgumentException('invalid length for $start_date when calling SearchResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $start_date))) {
            throw new \InvalidArgumentException("invalid value for \$start_date when calling SearchResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        if ((mb_strlen($end_date) > 64)) {
            throw new \InvalidArgumentException('invalid length for $end_date when calling SearchResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($end_date) < 20)) {
            throw new \InvalidArgumentException('invalid length for $end_date when calling SearchResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $end_date))) {
            throw new \InvalidArgumentException("invalid value for \$end_date when calling SearchResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets last_refreshed_datetime
     *
     * @return string|null
     */
    public function getLastRefreshedDatetime()
    {
        return $this->container['last_refreshed_datetime'];
    }

    /**
     * Sets last_refreshed_datetime
     *
     * @param string|null $last_refreshed_datetime The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setLastRefreshedDatetime($last_refreshed_datetime)
    {
        if (is_null($last_refreshed_datetime)) {
            throw new \InvalidArgumentException('non-nullable last_refreshed_datetime cannot be null');
        }
        if ((mb_strlen($last_refreshed_datetime) > 64)) {
            throw new \InvalidArgumentException('invalid length for $last_refreshed_datetime when calling SearchResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($last_refreshed_datetime) < 20)) {
            throw new \InvalidArgumentException('invalid length for $last_refreshed_datetime when calling SearchResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $last_refreshed_datetime))) {
            throw new \InvalidArgumentException("invalid value for \$last_refreshed_datetime when calling SearchResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['last_refreshed_datetime'] = $last_refreshed_datetime;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page A zero-relative index of transactions.
     *
     * @return self
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }

        if (($page > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $page when calling SearchResponse., must be smaller than or equal to 2147483647.');
        }
        if (($page < 0)) {
            throw new \InvalidArgumentException('invalid value for $page when calling SearchResponse., must be bigger than or equal to 0.');
        }

        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets total_items
     *
     * @return int|null
     */
    public function getTotalItems()
    {
        return $this->container['total_items'];
    }

    /**
     * Sets total_items
     *
     * @param int|null $total_items The total number of transactions as an integer beginning with the specified `page` in the full result and not just in this response.
     *
     * @return self
     */
    public function setTotalItems($total_items)
    {
        if (is_null($total_items)) {
            throw new \InvalidArgumentException('non-nullable total_items cannot be null');
        }

        if (($total_items > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $total_items when calling SearchResponse., must be smaller than or equal to 2147483647.');
        }
        if (($total_items < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_items when calling SearchResponse., must be bigger than or equal to 0.');
        }

        $this->container['total_items'] = $total_items;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int|null $total_pages The total number of pages, as an `integer`, when the `total_items` is divided into pages of the specified `page_size`.
     *
     * @return self
     */
    public function setTotalPages($total_pages)
    {
        if (is_null($total_pages)) {
            throw new \InvalidArgumentException('non-nullable total_pages cannot be null');
        }

        if (($total_pages > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $total_pages when calling SearchResponse., must be smaller than or equal to 2147483647.');
        }
        if (($total_pages < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_pages when calling SearchResponse., must be bigger than or equal to 0.');
        }

        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \OpenAPI\Client\Model\LinkDescription[]|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \OpenAPI\Client\Model\LinkDescription[]|null $links An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links).
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
        }

        if ((count($links) > 32767)) {
            throw new \InvalidArgumentException('invalid value for $links when calling SearchResponse., number of items must be less than or equal to 32767.');
        }
        if ((count($links) < 1)) {
            throw new \InvalidArgumentException('invalid length for $links when calling SearchResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['links'] = $links;

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


