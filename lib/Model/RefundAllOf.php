<?php
/**
 * RefundAllOf
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
 * RefundAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RefundAllOf implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'refund_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'amount' => '\OpenAPI\Client\Model\Money',
        'invoice_id' => 'string',
        'custom_id' => 'string',
        'acquirer_reference_number' => 'string',
        'note_to_payer' => 'string',
        'seller_payable_breakdown' => '\OpenAPI\Client\Model\MerchantPayableBreakdown',
        'payer' => '\OpenAPI\Client\Model\PayeeBase',
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
        'id' => null,
        'amount' => null,
        'invoice_id' => null,
        'custom_id' => null,
        'acquirer_reference_number' => null,
        'note_to_payer' => null,
        'seller_payable_breakdown' => null,
        'payer' => null,
        'links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'amount' => false,
		'invoice_id' => false,
		'custom_id' => false,
		'acquirer_reference_number' => false,
		'note_to_payer' => false,
		'seller_payable_breakdown' => false,
		'payer' => false,
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
        'id' => 'id',
        'amount' => 'amount',
        'invoice_id' => 'invoice_id',
        'custom_id' => 'custom_id',
        'acquirer_reference_number' => 'acquirer_reference_number',
        'note_to_payer' => 'note_to_payer',
        'seller_payable_breakdown' => 'seller_payable_breakdown',
        'payer' => 'payer',
        'links' => 'links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'amount' => 'setAmount',
        'invoice_id' => 'setInvoiceId',
        'custom_id' => 'setCustomId',
        'acquirer_reference_number' => 'setAcquirerReferenceNumber',
        'note_to_payer' => 'setNoteToPayer',
        'seller_payable_breakdown' => 'setSellerPayableBreakdown',
        'payer' => 'setPayer',
        'links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'amount' => 'getAmount',
        'invoice_id' => 'getInvoiceId',
        'custom_id' => 'getCustomId',
        'acquirer_reference_number' => 'getAcquirerReferenceNumber',
        'note_to_payer' => 'getNoteToPayer',
        'seller_payable_breakdown' => 'getSellerPayableBreakdown',
        'payer' => 'getPayer',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('invoice_id', $data ?? [], null);
        $this->setIfExists('custom_id', $data ?? [], null);
        $this->setIfExists('acquirer_reference_number', $data ?? [], null);
        $this->setIfExists('note_to_payer', $data ?? [], null);
        $this->setIfExists('seller_payable_breakdown', $data ?? [], null);
        $this->setIfExists('payer', $data ?? [], null);
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

        if (!is_null($this->container['custom_id']) && (mb_strlen($this->container['custom_id']) > 127)) {
            $invalidProperties[] = "invalid value for 'custom_id', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['custom_id']) && (mb_strlen($this->container['custom_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'custom_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['custom_id']) && !preg_match("/^[A-Za-z0-9-_.,]*$/", $this->container['custom_id'])) {
            $invalidProperties[] = "invalid value for 'custom_id', must be conform to the pattern /^[A-Za-z0-9-_.,]*$/.";
        }

        if (!is_null($this->container['acquirer_reference_number']) && (mb_strlen($this->container['acquirer_reference_number']) > 36)) {
            $invalidProperties[] = "invalid value for 'acquirer_reference_number', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['acquirer_reference_number']) && (mb_strlen($this->container['acquirer_reference_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'acquirer_reference_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['acquirer_reference_number']) && !preg_match("/^[a-zA-Z0-9]+$/", $this->container['acquirer_reference_number'])) {
            $invalidProperties[] = "invalid value for 'acquirer_reference_number', must be conform to the pattern /^[a-zA-Z0-9]+$/.";
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
     * @param string|null $id The PayPal-generated ID for the refund.
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
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\Money|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\Money|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id The API caller-provided external invoice number for this order. Appears in both the payer's transaction history and the emails that the payer receives.
     *
     * @return self
     */
    public function setInvoiceId($invoice_id)
    {
        if (is_null($invoice_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_id cannot be null');
        }
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets custom_id
     *
     * @return string|null
     */
    public function getCustomId()
    {
        return $this->container['custom_id'];
    }

    /**
     * Sets custom_id
     *
     * @param string|null $custom_id The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports.
     *
     * @return self
     */
    public function setCustomId($custom_id)
    {
        if (is_null($custom_id)) {
            throw new \InvalidArgumentException('non-nullable custom_id cannot be null');
        }
        if ((mb_strlen($custom_id) > 127)) {
            throw new \InvalidArgumentException('invalid length for $custom_id when calling RefundAllOf., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($custom_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $custom_id when calling RefundAllOf., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-_.,]*$/", $custom_id))) {
            throw new \InvalidArgumentException("invalid value for \$custom_id when calling RefundAllOf., must conform to the pattern /^[A-Za-z0-9-_.,]*$/.");
        }

        $this->container['custom_id'] = $custom_id;

        return $this;
    }

    /**
     * Gets acquirer_reference_number
     *
     * @return string|null
     */
    public function getAcquirerReferenceNumber()
    {
        return $this->container['acquirer_reference_number'];
    }

    /**
     * Sets acquirer_reference_number
     *
     * @param string|null $acquirer_reference_number Reference ID issued for the card transaction. This ID can be used to track the transaction across processors, card brands and issuing banks.
     *
     * @return self
     */
    public function setAcquirerReferenceNumber($acquirer_reference_number)
    {
        if (is_null($acquirer_reference_number)) {
            throw new \InvalidArgumentException('non-nullable acquirer_reference_number cannot be null');
        }
        if ((mb_strlen($acquirer_reference_number) > 36)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_reference_number when calling RefundAllOf., must be smaller than or equal to 36.');
        }
        if ((mb_strlen($acquirer_reference_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $acquirer_reference_number when calling RefundAllOf., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[a-zA-Z0-9]+$/", $acquirer_reference_number))) {
            throw new \InvalidArgumentException("invalid value for \$acquirer_reference_number when calling RefundAllOf., must conform to the pattern /^[a-zA-Z0-9]+$/.");
        }

        $this->container['acquirer_reference_number'] = $acquirer_reference_number;

        return $this;
    }

    /**
     * Gets note_to_payer
     *
     * @return string|null
     */
    public function getNoteToPayer()
    {
        return $this->container['note_to_payer'];
    }

    /**
     * Sets note_to_payer
     *
     * @param string|null $note_to_payer The reason for the refund. Appears in both the payer's transaction history and the emails that the payer receives.
     *
     * @return self
     */
    public function setNoteToPayer($note_to_payer)
    {
        if (is_null($note_to_payer)) {
            throw new \InvalidArgumentException('non-nullable note_to_payer cannot be null');
        }
        $this->container['note_to_payer'] = $note_to_payer;

        return $this;
    }

    /**
     * Gets seller_payable_breakdown
     *
     * @return \OpenAPI\Client\Model\MerchantPayableBreakdown|null
     */
    public function getSellerPayableBreakdown()
    {
        return $this->container['seller_payable_breakdown'];
    }

    /**
     * Sets seller_payable_breakdown
     *
     * @param \OpenAPI\Client\Model\MerchantPayableBreakdown|null $seller_payable_breakdown seller_payable_breakdown
     *
     * @return self
     */
    public function setSellerPayableBreakdown($seller_payable_breakdown)
    {
        if (is_null($seller_payable_breakdown)) {
            throw new \InvalidArgumentException('non-nullable seller_payable_breakdown cannot be null');
        }
        $this->container['seller_payable_breakdown'] = $seller_payable_breakdown;

        return $this;
    }

    /**
     * Gets payer
     *
     * @return \OpenAPI\Client\Model\PayeeBase|null
     */
    public function getPayer()
    {
        return $this->container['payer'];
    }

    /**
     * Sets payer
     *
     * @param \OpenAPI\Client\Model\PayeeBase|null $payer payer
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
     * @param \OpenAPI\Client\Model\LinkDescription[]|null $links An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links).
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


