<?php
/**
 * OrderAuthorizeResponse
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
 * OrderAuthorizeResponse Class Doc Comment
 *
 * @category Class
 * @description The order authorize response.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderAuthorizeResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'order_authorize_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'create_time' => 'string',
        'update_time' => 'string',
        'id' => 'string',
        'payment_source' => '\OpenAPI\Client\Model\PaymentSourceResponse',
        'intent' => '\OpenAPI\Client\Model\CheckoutPaymentIntent',
        'processing_instruction' => '\OpenAPI\Client\Model\ProcessingInstruction',
        'payer' => '\OpenAPI\Client\Model\Payer',
        'purchase_units' => '\OpenAPI\Client\Model\PurchaseUnit[]',
        'status' => '\OpenAPI\Client\Model\OrderStatus',
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
        'create_time' => 'ppaas_date_time_v3',
        'update_time' => 'ppaas_date_time_v3',
        'id' => null,
        'payment_source' => null,
        'intent' => null,
        'processing_instruction' => null,
        'payer' => null,
        'purchase_units' => null,
        'status' => null,
        'links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'create_time' => false,
		'update_time' => false,
		'id' => false,
		'payment_source' => false,
		'intent' => false,
		'processing_instruction' => false,
		'payer' => false,
		'purchase_units' => false,
		'status' => false,
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
        'create_time' => 'create_time',
        'update_time' => 'update_time',
        'id' => 'id',
        'payment_source' => 'payment_source',
        'intent' => 'intent',
        'processing_instruction' => 'processing_instruction',
        'payer' => 'payer',
        'purchase_units' => 'purchase_units',
        'status' => 'status',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_time' => 'setCreateTime',
        'update_time' => 'setUpdateTime',
        'id' => 'setId',
        'payment_source' => 'setPaymentSource',
        'intent' => 'setIntent',
        'processing_instruction' => 'setProcessingInstruction',
        'payer' => 'setPayer',
        'purchase_units' => 'setPurchaseUnits',
        'status' => 'setStatus',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_time' => 'getCreateTime',
        'update_time' => 'getUpdateTime',
        'id' => 'getId',
        'payment_source' => 'getPaymentSource',
        'intent' => 'getIntent',
        'processing_instruction' => 'getProcessingInstruction',
        'payer' => 'getPayer',
        'purchase_units' => 'getPurchaseUnits',
        'status' => 'getStatus',
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
        $this->setIfExists('create_time', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('payment_source', $data ?? [], null);
        $this->setIfExists('intent', $data ?? [], null);
        $this->setIfExists('processing_instruction', $data ?? [], null);
        $this->setIfExists('payer', $data ?? [], null);
        $this->setIfExists('purchase_units', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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

        if (!is_null($this->container['create_time']) && (mb_strlen($this->container['create_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'create_time', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['create_time']) && (mb_strlen($this->container['create_time']) < 20)) {
            $invalidProperties[] = "invalid value for 'create_time', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['create_time']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['create_time'])) {
            $invalidProperties[] = "invalid value for 'create_time', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['update_time']) && (mb_strlen($this->container['update_time']) > 64)) {
            $invalidProperties[] = "invalid value for 'update_time', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['update_time']) && (mb_strlen($this->container['update_time']) < 20)) {
            $invalidProperties[] = "invalid value for 'update_time', the character length must be bigger than or equal to 20.";
        }

        if (!is_null($this->container['update_time']) && !preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $this->container['update_time'])) {
            $invalidProperties[] = "invalid value for 'update_time', must be conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.";
        }

        if (!is_null($this->container['purchase_units']) && (count($this->container['purchase_units']) > 10)) {
            $invalidProperties[] = "invalid value for 'purchase_units', number of items must be less than or equal to 10.";
        }

        if (!is_null($this->container['purchase_units']) && (count($this->container['purchase_units']) < 1)) {
            $invalidProperties[] = "invalid value for 'purchase_units', number of items must be greater than or equal to 1.";
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
     * Gets create_time
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param string|null $create_time The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setCreateTime($create_time)
    {
        if (is_null($create_time)) {
            throw new \InvalidArgumentException('non-nullable create_time cannot be null');
        }
        if ((mb_strlen($create_time) > 64)) {
            throw new \InvalidArgumentException('invalid length for $create_time when calling OrderAuthorizeResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($create_time) < 20)) {
            throw new \InvalidArgumentException('invalid length for $create_time when calling OrderAuthorizeResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $create_time))) {
            throw new \InvalidArgumentException("invalid value for \$create_time when calling OrderAuthorizeResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.<blockquote><strong>Note:</strong> The regular expression provides guidance but does not reject all invalid dates.</blockquote>
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        if (is_null($update_time)) {
            throw new \InvalidArgumentException('non-nullable update_time cannot be null');
        }
        if ((mb_strlen($update_time) > 64)) {
            throw new \InvalidArgumentException('invalid length for $update_time when calling OrderAuthorizeResponse., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($update_time) < 20)) {
            throw new \InvalidArgumentException('invalid length for $update_time when calling OrderAuthorizeResponse., must be bigger than or equal to 20.');
        }
        if ((!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/", $update_time))) {
            throw new \InvalidArgumentException("invalid value for \$update_time when calling OrderAuthorizeResponse., must conform to the pattern /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[T,t]([0-1][0-9]|2[0-3]):[0-5][0-9]:([0-5][0-9]|60)([.][0-9]+)?([Zz]|[+-][0-9]{2}:[0-9]{2})$/.");
        }

        $this->container['update_time'] = $update_time;

        return $this;
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
     * @param string|null $id The ID of the order.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets payment_source
     *
     * @return \OpenAPI\Client\Model\PaymentSourceResponse|null
     */
    public function getPaymentSource()
    {
        return $this->container['payment_source'];
    }

    /**
     * Sets payment_source
     *
     * @param \OpenAPI\Client\Model\PaymentSourceResponse|null $payment_source payment_source
     *
     * @return self
     */
    public function setPaymentSource($payment_source)
    {
        if (is_null($payment_source)) {
            throw new \InvalidArgumentException('non-nullable payment_source cannot be null');
        }
        $this->container['payment_source'] = $payment_source;

        return $this;
    }

    /**
     * Gets intent
     *
     * @return \OpenAPI\Client\Model\CheckoutPaymentIntent|null
     */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
     * Sets intent
     *
     * @param \OpenAPI\Client\Model\CheckoutPaymentIntent|null $intent intent
     *
     * @return self
     */
    public function setIntent($intent)
    {
        if (is_null($intent)) {
            throw new \InvalidArgumentException('non-nullable intent cannot be null');
        }
        $this->container['intent'] = $intent;

        return $this;
    }

    /**
     * Gets processing_instruction
     *
     * @return \OpenAPI\Client\Model\ProcessingInstruction|null
     */
    public function getProcessingInstruction()
    {
        return $this->container['processing_instruction'];
    }

    /**
     * Sets processing_instruction
     *
     * @param \OpenAPI\Client\Model\ProcessingInstruction|null $processing_instruction processing_instruction
     *
     * @return self
     */
    public function setProcessingInstruction($processing_instruction)
    {
        if (is_null($processing_instruction)) {
            throw new \InvalidArgumentException('non-nullable processing_instruction cannot be null');
        }
        $this->container['processing_instruction'] = $processing_instruction;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \OpenAPI\Client\Model\Payer|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \OpenAPI\Client\Model\Payer|null $payer payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        if (is_null($payer)) {
            throw new \InvalidArgumentException('non-nullable payer cannot be null');
        }
        $this->container['payer'] = $payer;

        return $this;
    }

    /**
     * Gets purchase_units
     *
     * @return \OpenAPI\Client\Model\PurchaseUnit[]|null
     */
    public function getPurchaseUnits()
    {
        return $this->container['purchase_units'];
    }

    /**
     * Sets purchase_units
     *
     * @param \OpenAPI\Client\Model\PurchaseUnit[]|null $purchase_units An array of purchase units. Each purchase unit establishes a contract between a customer and merchant. Each purchase unit represents either a full or partial order that the customer intends to purchase from the merchant.
     *
     * @return self
     */
    public function setPurchaseUnits($purchase_units)
    {
        if (is_null($purchase_units)) {
            throw new \InvalidArgumentException('non-nullable purchase_units cannot be null');
        }

        if ((count($purchase_units) > 10)) {
            throw new \InvalidArgumentException('invalid value for $purchase_units when calling OrderAuthorizeResponse., number of items must be less than or equal to 10.');
        }
        if ((count($purchase_units) < 1)) {
            throw new \InvalidArgumentException('invalid length for $purchase_units when calling OrderAuthorizeResponse., number of items must be greater than or equal to 1.');
        }
        $this->container['purchase_units'] = $purchase_units;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \OpenAPI\Client\Model\OrderStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\OrderStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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
     * @param \OpenAPI\Client\Model\LinkDescription[]|null $links An array of request-related HATEOAS links. To complete payer approval, use the `approve` link to redirect the payer. The API caller has 3 hours (default setting, this which can be changed by your account manager to 24/48/72 hours to accommodate your use case) from the time the order is created, to redirect your payer. Once redirected, the API caller has 3 hours for the payer to approve the order and either authorize or capture the order. If you are not using the PayPal JavaScript SDK to initiate PayPal Checkout (in context) ensure that you include `application_context.return_url` is specified or you will get \"We're sorry, Things don't appear to be working at the moment\" after the payer approves the payment.
     *
     * @return self
     */
    public function setLinks($links)
    {
        if (is_null($links)) {
            throw new \InvalidArgumentException('non-nullable links cannot be null');
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


