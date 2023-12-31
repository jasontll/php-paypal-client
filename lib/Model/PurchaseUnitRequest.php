<?php
/**
 * PurchaseUnitRequest
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
 * PurchaseUnitRequest Class Doc Comment
 *
 * @category Class
 * @description The purchase unit request. Includes required information for the payment contract.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PurchaseUnitRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'purchase_unit_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_id' => 'string',
        'amount' => '\OpenAPI\Client\Model\AmountWithBreakdown',
        'payee' => '\OpenAPI\Client\Model\Payee',
        'payment_instruction' => '\OpenAPI\Client\Model\PaymentInstruction',
        'description' => 'string',
        'custom_id' => 'string',
        'invoice_id' => 'string',
        'soft_descriptor' => 'string',
        'items' => '\OpenAPI\Client\Model\Item[]',
        'shipping' => '\OpenAPI\Client\Model\ShippingDetail',
        'supplementary_data' => '\OpenAPI\Client\Model\SupplementaryData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_id' => null,
        'amount' => null,
        'payee' => null,
        'payment_instruction' => null,
        'description' => null,
        'custom_id' => null,
        'invoice_id' => null,
        'soft_descriptor' => null,
        'items' => null,
        'shipping' => null,
        'supplementary_data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference_id' => false,
		'amount' => false,
		'payee' => false,
		'payment_instruction' => false,
		'description' => false,
		'custom_id' => false,
		'invoice_id' => false,
		'soft_descriptor' => false,
		'items' => false,
		'shipping' => false,
		'supplementary_data' => false
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
        'reference_id' => 'reference_id',
        'amount' => 'amount',
        'payee' => 'payee',
        'payment_instruction' => 'payment_instruction',
        'description' => 'description',
        'custom_id' => 'custom_id',
        'invoice_id' => 'invoice_id',
        'soft_descriptor' => 'soft_descriptor',
        'items' => 'items',
        'shipping' => 'shipping',
        'supplementary_data' => 'supplementary_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_id' => 'setReferenceId',
        'amount' => 'setAmount',
        'payee' => 'setPayee',
        'payment_instruction' => 'setPaymentInstruction',
        'description' => 'setDescription',
        'custom_id' => 'setCustomId',
        'invoice_id' => 'setInvoiceId',
        'soft_descriptor' => 'setSoftDescriptor',
        'items' => 'setItems',
        'shipping' => 'setShipping',
        'supplementary_data' => 'setSupplementaryData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_id' => 'getReferenceId',
        'amount' => 'getAmount',
        'payee' => 'getPayee',
        'payment_instruction' => 'getPaymentInstruction',
        'description' => 'getDescription',
        'custom_id' => 'getCustomId',
        'invoice_id' => 'getInvoiceId',
        'soft_descriptor' => 'getSoftDescriptor',
        'items' => 'getItems',
        'shipping' => 'getShipping',
        'supplementary_data' => 'getSupplementaryData'
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
        $this->setIfExists('reference_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('payee', $data ?? [], null);
        $this->setIfExists('payment_instruction', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('custom_id', $data ?? [], null);
        $this->setIfExists('invoice_id', $data ?? [], null);
        $this->setIfExists('soft_descriptor', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('shipping', $data ?? [], null);
        $this->setIfExists('supplementary_data', $data ?? [], null);
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

        if (!is_null($this->container['reference_id']) && (mb_strlen($this->container['reference_id']) > 256)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['reference_id']) && (mb_strlen($this->container['reference_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 127)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['custom_id']) && (mb_strlen($this->container['custom_id']) > 127)) {
            $invalidProperties[] = "invalid value for 'custom_id', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['custom_id']) && (mb_strlen($this->container['custom_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'custom_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['invoice_id']) && (mb_strlen($this->container['invoice_id']) > 127)) {
            $invalidProperties[] = "invalid value for 'invoice_id', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['invoice_id']) && (mb_strlen($this->container['invoice_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'invoice_id', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['soft_descriptor']) && (mb_strlen($this->container['soft_descriptor']) > 22)) {
            $invalidProperties[] = "invalid value for 'soft_descriptor', the character length must be smaller than or equal to 22.";
        }

        if (!is_null($this->container['soft_descriptor']) && (mb_strlen($this->container['soft_descriptor']) < 1)) {
            $invalidProperties[] = "invalid value for 'soft_descriptor', the character length must be bigger than or equal to 1.";
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
     * Gets reference_id
     *
     * @return string|null
     */
    public function getReferenceId()
    {
        return $this->container['reference_id'];
    }

    /**
     * Sets reference_id
     *
     * @param string|null $reference_id The API caller-provided external ID for the purchase unit. Required for multiple purchase units when you must update the order through `PATCH`. If you omit this value and the order contains only one purchase unit, PayPal sets this value to `default`.
     *
     * @return self
     */
    public function setReferenceId($reference_id)
    {
        if (is_null($reference_id)) {
            throw new \InvalidArgumentException('non-nullable reference_id cannot be null');
        }
        if ((mb_strlen($reference_id) > 256)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling PurchaseUnitRequest., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($reference_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference_id when calling PurchaseUnitRequest., must be bigger than or equal to 1.');
        }

        $this->container['reference_id'] = $reference_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \OpenAPI\Client\Model\AmountWithBreakdown
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \OpenAPI\Client\Model\AmountWithBreakdown $amount amount
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
     * Gets payee
     *
     * @return \OpenAPI\Client\Model\Payee|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param \OpenAPI\Client\Model\Payee|null $payee payee
     *
     * @return self
     */
    public function setPayee($payee)
    {
        if (is_null($payee)) {
            throw new \InvalidArgumentException('non-nullable payee cannot be null');
        }
        $this->container['payee'] = $payee;

        return $this;
    }

    /**
     * Gets payment_instruction
     *
     * @return \OpenAPI\Client\Model\PaymentInstruction|null
     */
    public function getPaymentInstruction()
    {
        return $this->container['payment_instruction'];
    }

    /**
     * Sets payment_instruction
     *
     * @param \OpenAPI\Client\Model\PaymentInstruction|null $payment_instruction payment_instruction
     *
     * @return self
     */
    public function setPaymentInstruction($payment_instruction)
    {
        if (is_null($payment_instruction)) {
            throw new \InvalidArgumentException('non-nullable payment_instruction cannot be null');
        }
        $this->container['payment_instruction'] = $payment_instruction;

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
     * @param string|null $description The purchase description. The maximum length of the character is dependent on the type of characters used. The character length is specified assuming a US ASCII character. Depending on type of character; (e.g. accented character, Japanese characters) the number of characters that that can be specified as input might not equal the permissible max length.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 127)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PurchaseUnitRequest., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling PurchaseUnitRequest., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

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
     * @param string|null $custom_id The API caller-provided external ID. Used to reconcile client transactions with PayPal transactions. Appears in transaction and settlement reports but is not visible to the payer.
     *
     * @return self
     */
    public function setCustomId($custom_id)
    {
        if (is_null($custom_id)) {
            throw new \InvalidArgumentException('non-nullable custom_id cannot be null');
        }
        if ((mb_strlen($custom_id) > 127)) {
            throw new \InvalidArgumentException('invalid length for $custom_id when calling PurchaseUnitRequest., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($custom_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $custom_id when calling PurchaseUnitRequest., must be bigger than or equal to 1.');
        }

        $this->container['custom_id'] = $custom_id;

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
        if ((mb_strlen($invoice_id) > 127)) {
            throw new \InvalidArgumentException('invalid length for $invoice_id when calling PurchaseUnitRequest., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($invoice_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $invoice_id when calling PurchaseUnitRequest., must be bigger than or equal to 1.');
        }

        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets soft_descriptor
     *
     * @return string|null
     */
    public function getSoftDescriptor()
    {
        return $this->container['soft_descriptor'];
    }

    /**
     * Sets soft_descriptor
     *
     * @param string|null $soft_descriptor The soft descriptor is the dynamic text used to construct the statement descriptor that appears on a payer's card statement.<br><br>If an Order is paid using the \"PayPal Wallet\", the statement descriptor will appear in following format on the payer's card statement: <code><var>PAYPAL_prefix</var>+(space)+<var>merchant_descriptor</var>+(space)+ <var>soft_descriptor</var></code><blockquote><strong>Note:</strong> The merchant descriptor is the descriptor of the merchant’s payment receiving preferences which can be seen by logging into the merchant account https://www.sandbox.paypal.com/businessprofile/settings/info/edit</blockquote>The <code>PAYPAL</code> prefix uses 8 characters. Only the first 22 characters will be displayed in the statement. <br>For example, if:<ul><li>The PayPal prefix toggle is <code>PAYPAL *</code>.</li><li>The merchant descriptor in the profile is <code>Janes Gift</code>.</li><li>The soft descriptor is <code>800-123-1234</code>.</li></ul>Then, the statement descriptor on the card is <code>PAYPAL * Janes Gift 80</code>.
     *
     * @return self
     */
    public function setSoftDescriptor($soft_descriptor)
    {
        if (is_null($soft_descriptor)) {
            throw new \InvalidArgumentException('non-nullable soft_descriptor cannot be null');
        }
        if ((mb_strlen($soft_descriptor) > 22)) {
            throw new \InvalidArgumentException('invalid length for $soft_descriptor when calling PurchaseUnitRequest., must be smaller than or equal to 22.');
        }
        if ((mb_strlen($soft_descriptor) < 1)) {
            throw new \InvalidArgumentException('invalid length for $soft_descriptor when calling PurchaseUnitRequest., must be bigger than or equal to 1.');
        }

        $this->container['soft_descriptor'] = $soft_descriptor;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\Item[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\Item[]|null $items An array of items that the customer purchases from the merchant.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \OpenAPI\Client\Model\ShippingDetail|null
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \OpenAPI\Client\Model\ShippingDetail|null $shipping shipping
     *
     * @return self
     */
    public function setShipping($shipping)
    {
        if (is_null($shipping)) {
            throw new \InvalidArgumentException('non-nullable shipping cannot be null');
        }
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets supplementary_data
     *
     * @return \OpenAPI\Client\Model\SupplementaryData|null
     */
    public function getSupplementaryData()
    {
        return $this->container['supplementary_data'];
    }

    /**
     * Sets supplementary_data
     *
     * @param \OpenAPI\Client\Model\SupplementaryData|null $supplementary_data supplementary_data
     *
     * @return self
     */
    public function setSupplementaryData($supplementary_data)
    {
        if (is_null($supplementary_data)) {
            throw new \InvalidArgumentException('non-nullable supplementary_data cannot be null');
        }
        $this->container['supplementary_data'] = $supplementary_data;

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


