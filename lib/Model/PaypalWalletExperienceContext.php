<?php
/**
 * PaypalWalletExperienceContext
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
 * PaypalWalletExperienceContext Class Doc Comment
 *
 * @category Class
 * @description Customizes the payer experience during the approval process for payment with PayPal.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Partners and Marketplaces might configure &lt;code&gt;brand_name&lt;/code&gt; and &lt;code&gt;shipping_preference&lt;/code&gt; during partner account setup, which overrides the request values.&lt;/blockquote&gt;
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaypalWalletExperienceContext implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'paypal_wallet_experience_context';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brand_name' => 'string',
        'locale' => 'string',
        'shipping_preference' => 'string',
        'return_url' => 'string',
        'cancel_url' => 'string',
        'landing_page' => 'string',
        'user_action' => 'string',
        'payment_method_preference' => 'string'
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
        'shipping_preference' => null,
        'return_url' => 'uri',
        'cancel_url' => 'uri',
        'landing_page' => null,
        'user_action' => null,
        'payment_method_preference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'brand_name' => false,
		'locale' => false,
		'shipping_preference' => false,
		'return_url' => false,
		'cancel_url' => false,
		'landing_page' => false,
		'user_action' => false,
		'payment_method_preference' => false
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
        'shipping_preference' => 'shipping_preference',
        'return_url' => 'return_url',
        'cancel_url' => 'cancel_url',
        'landing_page' => 'landing_page',
        'user_action' => 'user_action',
        'payment_method_preference' => 'payment_method_preference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brand_name' => 'setBrandName',
        'locale' => 'setLocale',
        'shipping_preference' => 'setShippingPreference',
        'return_url' => 'setReturnUrl',
        'cancel_url' => 'setCancelUrl',
        'landing_page' => 'setLandingPage',
        'user_action' => 'setUserAction',
        'payment_method_preference' => 'setPaymentMethodPreference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brand_name' => 'getBrandName',
        'locale' => 'getLocale',
        'shipping_preference' => 'getShippingPreference',
        'return_url' => 'getReturnUrl',
        'cancel_url' => 'getCancelUrl',
        'landing_page' => 'getLandingPage',
        'user_action' => 'getUserAction',
        'payment_method_preference' => 'getPaymentMethodPreference'
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

    public const SHIPPING_PREFERENCE_GET_FROM_FILE = 'GET_FROM_FILE';
    public const SHIPPING_PREFERENCE_NO_SHIPPING = 'NO_SHIPPING';
    public const SHIPPING_PREFERENCE_SET_PROVIDED_ADDRESS = 'SET_PROVIDED_ADDRESS';
    public const LANDING_PAGE_LOGIN = 'LOGIN';
    public const LANDING_PAGE_GUEST_CHECKOUT = 'GUEST_CHECKOUT';
    public const LANDING_PAGE_NO_PREFERENCE = 'NO_PREFERENCE';
    public const USER_ACTION__CONTINUE = 'CONTINUE';
    public const USER_ACTION_PAY_NOW = 'PAY_NOW';
    public const PAYMENT_METHOD_PREFERENCE_UNRESTRICTED = 'UNRESTRICTED';
    public const PAYMENT_METHOD_PREFERENCE_IMMEDIATE_PAYMENT_REQUIRED = 'IMMEDIATE_PAYMENT_REQUIRED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingPreferenceAllowableValues()
    {
        return [
            self::SHIPPING_PREFERENCE_GET_FROM_FILE,
            self::SHIPPING_PREFERENCE_NO_SHIPPING,
            self::SHIPPING_PREFERENCE_SET_PROVIDED_ADDRESS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLandingPageAllowableValues()
    {
        return [
            self::LANDING_PAGE_LOGIN,
            self::LANDING_PAGE_GUEST_CHECKOUT,
            self::LANDING_PAGE_NO_PREFERENCE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserActionAllowableValues()
    {
        return [
            self::USER_ACTION__CONTINUE,
            self::USER_ACTION_PAY_NOW,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodPreferenceAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_PREFERENCE_UNRESTRICTED,
            self::PAYMENT_METHOD_PREFERENCE_IMMEDIATE_PAYMENT_REQUIRED,
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
        $this->setIfExists('brand_name', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('shipping_preference', $data ?? [], 'GET_FROM_FILE');
        $this->setIfExists('return_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('landing_page', $data ?? [], 'NO_PREFERENCE');
        $this->setIfExists('user_action', $data ?? [], 'CONTINUE');
        $this->setIfExists('payment_method_preference', $data ?? [], 'UNRESTRICTED');
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

        if (!is_null($this->container['brand_name']) && !preg_match("/^.*$/", $this->container['brand_name'])) {
            $invalidProperties[] = "invalid value for 'brand_name', must be conform to the pattern /^.*$/.";
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

        $allowedValues = $this->getShippingPreferenceAllowableValues();
        if (!is_null($this->container['shipping_preference']) && !in_array($this->container['shipping_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipping_preference', must be one of '%s'",
                $this->container['shipping_preference'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['shipping_preference']) && (mb_strlen($this->container['shipping_preference']) > 24)) {
            $invalidProperties[] = "invalid value for 'shipping_preference', the character length must be smaller than or equal to 24.";
        }

        if (!is_null($this->container['shipping_preference']) && (mb_strlen($this->container['shipping_preference']) < 1)) {
            $invalidProperties[] = "invalid value for 'shipping_preference', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['shipping_preference']) && !preg_match("/^[A-Z_]+$/", $this->container['shipping_preference'])) {
            $invalidProperties[] = "invalid value for 'shipping_preference', must be conform to the pattern /^[A-Z_]+$/.";
        }

        $allowedValues = $this->getLandingPageAllowableValues();
        if (!is_null($this->container['landing_page']) && !in_array($this->container['landing_page'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'landing_page', must be one of '%s'",
                $this->container['landing_page'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['landing_page']) && (mb_strlen($this->container['landing_page']) > 13)) {
            $invalidProperties[] = "invalid value for 'landing_page', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['landing_page']) && (mb_strlen($this->container['landing_page']) < 1)) {
            $invalidProperties[] = "invalid value for 'landing_page', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['landing_page']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['landing_page'])) {
            $invalidProperties[] = "invalid value for 'landing_page', must be conform to the pattern /^[0-9A-Z_]+$/.";
        }

        $allowedValues = $this->getUserActionAllowableValues();
        if (!is_null($this->container['user_action']) && !in_array($this->container['user_action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'user_action', must be one of '%s'",
                $this->container['user_action'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['user_action']) && (mb_strlen($this->container['user_action']) > 8)) {
            $invalidProperties[] = "invalid value for 'user_action', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['user_action']) && (mb_strlen($this->container['user_action']) < 1)) {
            $invalidProperties[] = "invalid value for 'user_action', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['user_action']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['user_action'])) {
            $invalidProperties[] = "invalid value for 'user_action', must be conform to the pattern /^[0-9A-Z_]+$/.";
        }

        $allowedValues = $this->getPaymentMethodPreferenceAllowableValues();
        if (!is_null($this->container['payment_method_preference']) && !in_array($this->container['payment_method_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_method_preference', must be one of '%s'",
                $this->container['payment_method_preference'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['payment_method_preference']) && (mb_strlen($this->container['payment_method_preference']) > 255)) {
            $invalidProperties[] = "invalid value for 'payment_method_preference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['payment_method_preference']) && (mb_strlen($this->container['payment_method_preference']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_method_preference', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payment_method_preference']) && !preg_match("/^[0-9A-Z_]+$/", $this->container['payment_method_preference'])) {
            $invalidProperties[] = "invalid value for 'payment_method_preference', must be conform to the pattern /^[0-9A-Z_]+$/.";
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
     * @param string|null $brand_name The label that overrides the business name in the PayPal account on the PayPal site. The pattern is defined by an external party and supports Unicode.
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        if (is_null($brand_name)) {
            throw new \InvalidArgumentException('non-nullable brand_name cannot be null');
        }
        if ((mb_strlen($brand_name) > 127)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling PaypalWalletExperienceContext., must be smaller than or equal to 127.');
        }
        if ((mb_strlen($brand_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling PaypalWalletExperienceContext., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^.*$/", $brand_name))) {
            throw new \InvalidArgumentException("invalid value for \$brand_name when calling PaypalWalletExperienceContext., must conform to the pattern /^.*$/.");
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
            throw new \InvalidArgumentException('invalid length for $locale when calling PaypalWalletExperienceContext., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($locale) < 2)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling PaypalWalletExperienceContext., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/", $locale))) {
            throw new \InvalidArgumentException("invalid value for \$locale when calling PaypalWalletExperienceContext., must conform to the pattern /^[a-z]{2}(?:-[A-Z][a-z]{3})?(?:-(?:[A-Z]{2}|[0-9]{3}))?$/.");
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets shipping_preference
     *
     * @return string|null
     */
    public function getShippingPreference()
    {
        return $this->container['shipping_preference'];
    }

    /**
     * Sets shipping_preference
     *
     * @param string|null $shipping_preference The location from which the shipping address is derived.
     *
     * @return self
     */
    public function setShippingPreference($shipping_preference)
    {
        if (is_null($shipping_preference)) {
            throw new \InvalidArgumentException('non-nullable shipping_preference cannot be null');
        }
        $allowedValues = $this->getShippingPreferenceAllowableValues();
        if (!in_array($shipping_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipping_preference', must be one of '%s'",
                    $shipping_preference,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($shipping_preference) > 24)) {
            throw new \InvalidArgumentException('invalid length for $shipping_preference when calling PaypalWalletExperienceContext., must be smaller than or equal to 24.');
        }
        if ((mb_strlen($shipping_preference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $shipping_preference when calling PaypalWalletExperienceContext., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Z_]+$/", $shipping_preference))) {
            throw new \InvalidArgumentException("invalid value for \$shipping_preference when calling PaypalWalletExperienceContext., must conform to the pattern /^[A-Z_]+$/.");
        }

        $this->container['shipping_preference'] = $shipping_preference;

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
     * @param string|null $return_url Describes the URL.
     *
     * @return self
     */
    public function setReturnUrl($return_url)
    {
        if (is_null($return_url)) {
            throw new \InvalidArgumentException('non-nullable return_url cannot be null');
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
     * @param string|null $cancel_url Describes the URL.
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            throw new \InvalidArgumentException('non-nullable cancel_url cannot be null');
        }
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets landing_page
     *
     * @return string|null
     */
    public function getLandingPage()
    {
        return $this->container['landing_page'];
    }

    /**
     * Sets landing_page
     *
     * @param string|null $landing_page The type of landing page to show on the PayPal site for customer checkout.
     *
     * @return self
     */
    public function setLandingPage($landing_page)
    {
        if (is_null($landing_page)) {
            throw new \InvalidArgumentException('non-nullable landing_page cannot be null');
        }
        $allowedValues = $this->getLandingPageAllowableValues();
        if (!in_array($landing_page, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'landing_page', must be one of '%s'",
                    $landing_page,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($landing_page) > 13)) {
            throw new \InvalidArgumentException('invalid length for $landing_page when calling PaypalWalletExperienceContext., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($landing_page) < 1)) {
            throw new \InvalidArgumentException('invalid length for $landing_page when calling PaypalWalletExperienceContext., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $landing_page))) {
            throw new \InvalidArgumentException("invalid value for \$landing_page when calling PaypalWalletExperienceContext., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['landing_page'] = $landing_page;

        return $this;
    }

    /**
     * Gets user_action
     *
     * @return string|null
     */
    public function getUserAction()
    {
        return $this->container['user_action'];
    }

    /**
     * Sets user_action
     *
     * @param string|null $user_action Configures a <strong>Continue</strong> or <strong>Pay Now</strong> checkout flow.
     *
     * @return self
     */
    public function setUserAction($user_action)
    {
        if (is_null($user_action)) {
            throw new \InvalidArgumentException('non-nullable user_action cannot be null');
        }
        $allowedValues = $this->getUserActionAllowableValues();
        if (!in_array($user_action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'user_action', must be one of '%s'",
                    $user_action,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($user_action) > 8)) {
            throw new \InvalidArgumentException('invalid length for $user_action when calling PaypalWalletExperienceContext., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($user_action) < 1)) {
            throw new \InvalidArgumentException('invalid length for $user_action when calling PaypalWalletExperienceContext., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $user_action))) {
            throw new \InvalidArgumentException("invalid value for \$user_action when calling PaypalWalletExperienceContext., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['user_action'] = $user_action;

        return $this;
    }

    /**
     * Gets payment_method_preference
     *
     * @return string|null
     */
    public function getPaymentMethodPreference()
    {
        return $this->container['payment_method_preference'];
    }

    /**
     * Sets payment_method_preference
     *
     * @param string|null $payment_method_preference The merchant-preferred payment methods.
     *
     * @return self
     */
    public function setPaymentMethodPreference($payment_method_preference)
    {
        if (is_null($payment_method_preference)) {
            throw new \InvalidArgumentException('non-nullable payment_method_preference cannot be null');
        }
        $allowedValues = $this->getPaymentMethodPreferenceAllowableValues();
        if (!in_array($payment_method_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_method_preference', must be one of '%s'",
                    $payment_method_preference,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($payment_method_preference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $payment_method_preference when calling PaypalWalletExperienceContext., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($payment_method_preference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_method_preference when calling PaypalWalletExperienceContext., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9A-Z_]+$/", $payment_method_preference))) {
            throw new \InvalidArgumentException("invalid value for \$payment_method_preference when calling PaypalWalletExperienceContext., must conform to the pattern /^[0-9A-Z_]+$/.");
        }

        $this->container['payment_method_preference'] = $payment_method_preference;

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

