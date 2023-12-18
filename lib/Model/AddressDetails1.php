<?php
/**
 * AddressDetails1
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
 * AddressDetails1 Class Doc Comment
 *
 * @category Class
 * @description The non-portable additional address details include fine-grain address information for Compliance, Risk, and other scenarios. This isn&#39;t portable with common third-party and open source applications. This can include data that is redundant with core fields. For example, &#x60;address_portable.address_line_1&#x60; is usually a combination of &#x60;address_details.street_number&#x60;, &#x60;street_name&#x60;, and &#x60;street_type&#x60;.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressDetails1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Address_Details_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'street_number' => 'string',
        'street_name' => 'string',
        'street_type' => 'string',
        'delivery_service' => 'string',
        'building_name' => 'string',
        'sub_building' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'street_number' => null,
        'street_name' => null,
        'street_type' => null,
        'delivery_service' => null,
        'building_name' => null,
        'sub_building' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'street_number' => false,
		'street_name' => false,
		'street_type' => false,
		'delivery_service' => false,
		'building_name' => false,
		'sub_building' => false
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
        'street_number' => 'street_number',
        'street_name' => 'street_name',
        'street_type' => 'street_type',
        'delivery_service' => 'delivery_service',
        'building_name' => 'building_name',
        'sub_building' => 'sub_building'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'street_number' => 'setStreetNumber',
        'street_name' => 'setStreetName',
        'street_type' => 'setStreetType',
        'delivery_service' => 'setDeliveryService',
        'building_name' => 'setBuildingName',
        'sub_building' => 'setSubBuilding'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'street_number' => 'getStreetNumber',
        'street_name' => 'getStreetName',
        'street_type' => 'getStreetType',
        'delivery_service' => 'getDeliveryService',
        'building_name' => 'getBuildingName',
        'sub_building' => 'getSubBuilding'
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
        $this->setIfExists('street_number', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('street_type', $data ?? [], null);
        $this->setIfExists('delivery_service', $data ?? [], null);
        $this->setIfExists('building_name', $data ?? [], null);
        $this->setIfExists('sub_building', $data ?? [], null);
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

        if (!is_null($this->container['street_number']) && (mb_strlen($this->container['street_number']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_number', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_name']) && (mb_strlen($this->container['street_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street_type']) && (mb_strlen($this->container['street_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'street_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['delivery_service']) && (mb_strlen($this->container['delivery_service']) > 100)) {
            $invalidProperties[] = "invalid value for 'delivery_service', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['building_name']) && (mb_strlen($this->container['building_name']) > 100)) {
            $invalidProperties[] = "invalid value for 'building_name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['sub_building']) && (mb_strlen($this->container['sub_building']) > 100)) {
            $invalidProperties[] = "invalid value for 'sub_building', the character length must be smaller than or equal to 100.";
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
     * Gets street_number
     *
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string|null $street_number The street number.
     *
     * @return self
     */
    public function setStreetNumber($street_number)
    {
        if (is_null($street_number)) {
            throw new \InvalidArgumentException('non-nullable street_number cannot be null');
        }
        if ((mb_strlen($street_number) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_number when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name The street name. Just `Drury` in `Drury Lane`.
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            throw new \InvalidArgumentException('non-nullable street_name cannot be null');
        }
        if ((mb_strlen($street_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_name when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets street_type
     *
     * @return string|null
     */
    public function getStreetType()
    {
        return $this->container['street_type'];
    }

    /**
     * Sets street_type
     *
     * @param string|null $street_type The street type. For example, avenue, boulevard, road, or expressway.
     *
     * @return self
     */
    public function setStreetType($street_type)
    {
        if (is_null($street_type)) {
            throw new \InvalidArgumentException('non-nullable street_type cannot be null');
        }
        if ((mb_strlen($street_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street_type when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['street_type'] = $street_type;

        return $this;
    }

    /**
     * Gets delivery_service
     *
     * @return string|null
     */
    public function getDeliveryService()
    {
        return $this->container['delivery_service'];
    }

    /**
     * Sets delivery_service
     *
     * @param string|null $delivery_service The delivery service. Post office box, bag number, or post office name.
     *
     * @return self
     */
    public function setDeliveryService($delivery_service)
    {
        if (is_null($delivery_service)) {
            throw new \InvalidArgumentException('non-nullable delivery_service cannot be null');
        }
        if ((mb_strlen($delivery_service) > 100)) {
            throw new \InvalidArgumentException('invalid length for $delivery_service when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['delivery_service'] = $delivery_service;

        return $this;
    }

    /**
     * Gets building_name
     *
     * @return string|null
     */
    public function getBuildingName()
    {
        return $this->container['building_name'];
    }

    /**
     * Sets building_name
     *
     * @param string|null $building_name A named locations that represents the premise. Usually a building name or number or collection of buildings with a common name or number. For example, <code>Craven House</code>.
     *
     * @return self
     */
    public function setBuildingName($building_name)
    {
        if (is_null($building_name)) {
            throw new \InvalidArgumentException('non-nullable building_name cannot be null');
        }
        if ((mb_strlen($building_name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $building_name when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['building_name'] = $building_name;

        return $this;
    }

    /**
     * Gets sub_building
     *
     * @return string|null
     */
    public function getSubBuilding()
    {
        return $this->container['sub_building'];
    }

    /**
     * Sets sub_building
     *
     * @param string|null $sub_building The first-order entity below a named building or location that represents the sub-premise. Usually a single building within a collection of buildings with a common name. Can be a flat, story, floor, room, or apartment.
     *
     * @return self
     */
    public function setSubBuilding($sub_building)
    {
        if (is_null($sub_building)) {
            throw new \InvalidArgumentException('non-nullable sub_building cannot be null');
        }
        if ((mb_strlen($sub_building) > 100)) {
            throw new \InvalidArgumentException('invalid length for $sub_building when calling AddressDetails1., must be smaller than or equal to 100.');
        }

        $this->container['sub_building'] = $sub_building;

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


