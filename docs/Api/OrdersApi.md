# OpenAPI\Client\OrdersApi

All URIs are relative to https://api-m.sandbox.paypal.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordersAuthorize()**](OrdersApi.md#ordersAuthorize) | **POST** /v2/checkout/orders/{id}/authorize | Authorize payment for order |
| [**ordersCapture()**](OrdersApi.md#ordersCapture) | **POST** /v2/checkout/orders/{id}/capture | Capture payment for order |
| [**ordersConfirm()**](OrdersApi.md#ordersConfirm) | **POST** /v2/checkout/orders/{id}/confirm-payment-source | Confirm the Order |
| [**ordersCreate()**](OrdersApi.md#ordersCreate) | **POST** /v2/checkout/orders | Create order |
| [**ordersGet()**](OrdersApi.md#ordersGet) | **GET** /v2/checkout/orders/{id} | Show order details |
| [**ordersPatch()**](OrdersApi.md#ordersPatch) | **PATCH** /v2/checkout/orders/{id} | Update order |
| [**ordersTrackCreate()**](OrdersApi.md#ordersTrackCreate) | **POST** /v2/checkout/orders/{id}/track | Add tracking information for an Order. |


## `ordersAuthorize()`

```php
ordersAuthorize($pay_pal_request_id, $id, $content_type, $prefer, $pay_pal_client_metadata_id, $pay_pal_auth_assertion, $order_authorize_request): \OpenAPI\Client\Model\OrderAuthorizeResponse
```

Authorize payment for order

Authorizes payment for an order. To successfully authorize payment for an order, the buyer must first approve the order or a valid payment_source must be provided in the request. A buyer can approve the order upon being redirected to the rel:approve URL that was returned in the HATEOAS links in the create order response.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"/api/rest/reference/orders/v2/errors/#authorize-order\">Orders v2 errors</a>.</blockquote>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_pal_request_id = 'pay_pal_request_id_example'; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$prefer = 'return=minimal'; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_client_metadata_id = 'pay_pal_client_metadata_id_example'; // string
$pay_pal_auth_assertion = 'pay_pal_auth_assertion_example'; // string | An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see <a href=\"/api/rest/requests/#paypal-auth-assertion\">PayPal-Auth-Assertion</a>.
$order_authorize_request = new \OpenAPI\Client\Model\OrderAuthorizeRequest(); // \OpenAPI\Client\Model\OrderAuthorizeRequest

try {
    $result = $apiInstance->ordersAuthorize($pay_pal_request_id, $id, $content_type, $prefer, $pay_pal_client_metadata_id, $pay_pal_auth_assertion, $order_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersAuthorize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional] [default to &#39;return&#x3D;minimal&#39;] |
| **pay_pal_client_metadata_id** | **string**|  | [optional] |
| **pay_pal_auth_assertion** | **string**| An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see &lt;a href&#x3D;\&quot;/api/rest/requests/#paypal-auth-assertion\&quot;&gt;PayPal-Auth-Assertion&lt;/a&gt;. | [optional] |
| **order_authorize_request** | [**\OpenAPI\Client\Model\OrderAuthorizeRequest**](../Model/OrderAuthorizeRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\OrderAuthorizeResponse**](../Model/OrderAuthorizeResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersCapture()`

```php
ordersCapture($pay_pal_request_id, $id, $content_type, $prefer, $pay_pal_client_metadata_id, $pay_pal_auth_assertion, $order_capture_request): \OpenAPI\Client\Model\Order
```

Capture payment for order

Captures payment for an order. To successfully capture payment for an order, the buyer must first approve the order or a valid payment_source must be provided in the request. A buyer can approve the order upon being redirected to the rel:approve URL that was returned in the HATEOAS links in the create order response.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"/api/rest/reference/orders/v2/errors/#capture-order\">Orders v2 errors</a>.</blockquote>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_pal_request_id = 'pay_pal_request_id_example'; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$prefer = 'return=minimal'; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_client_metadata_id = 'pay_pal_client_metadata_id_example'; // string
$pay_pal_auth_assertion = 'pay_pal_auth_assertion_example'; // string | An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see <a href=\"/api/rest/requests/#paypal-auth-assertion\">PayPal-Auth-Assertion</a>.
$order_capture_request = new \OpenAPI\Client\Model\OrderCaptureRequest(); // \OpenAPI\Client\Model\OrderCaptureRequest

try {
    $result = $apiInstance->ordersCapture($pay_pal_request_id, $id, $content_type, $prefer, $pay_pal_client_metadata_id, $pay_pal_auth_assertion, $order_capture_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCapture: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional] [default to &#39;return&#x3D;minimal&#39;] |
| **pay_pal_client_metadata_id** | **string**|  | [optional] |
| **pay_pal_auth_assertion** | **string**| An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see &lt;a href&#x3D;\&quot;/api/rest/requests/#paypal-auth-assertion\&quot;&gt;PayPal-Auth-Assertion&lt;/a&gt;. | [optional] |
| **order_capture_request** | [**\OpenAPI\Client\Model\OrderCaptureRequest**](../Model/OrderCaptureRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersConfirm()`

```php
ordersConfirm($id, $content_type, $pay_pal_client_metadata_id, $prefer, $confirm_order_request): \OpenAPI\Client\Model\Order
```

Confirm the Order

Payer confirms their intent to pay for the the Order with the given payment source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$pay_pal_client_metadata_id = 'pay_pal_client_metadata_id_example'; // string
$prefer = 'return=minimal'; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$confirm_order_request = new \OpenAPI\Client\Model\ConfirmOrderRequest(); // \OpenAPI\Client\Model\ConfirmOrderRequest

try {
    $result = $apiInstance->ordersConfirm($id, $content_type, $pay_pal_client_metadata_id, $prefer, $confirm_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **pay_pal_client_metadata_id** | **string**|  | [optional] |
| **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional] [default to &#39;return&#x3D;minimal&#39;] |
| **confirm_order_request** | [**\OpenAPI\Client\Model\ConfirmOrderRequest**](../Model/ConfirmOrderRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersCreate()`

```php
ordersCreate($pay_pal_request_id, $content_type, $order_request, $pay_pal_partner_attribution_id, $pay_pal_client_metadata_id, $prefer): \OpenAPI\Client\Model\Order
```

Create order

Creates an order. Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing costs. For more information about processing payments, see <a href=\"https://developer.paypal.com/docs/checkout/advanced/processing/\">checkout</a> or <a href=\"https://developer.paypal.com/docs/multiparty/checkout/advanced/processing/\">multiparty checkout</a>.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"/api/rest/reference/orders/v2/errors/#create-order\">Orders v2 errors</a>.</blockquote>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_pal_request_id = 'pay_pal_request_id_example'; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$order_request = new \OpenAPI\Client\Model\OrderRequest(); // \OpenAPI\Client\Model\OrderRequest
$pay_pal_partner_attribution_id = 'pay_pal_partner_attribution_id_example'; // string
$pay_pal_client_metadata_id = 'pay_pal_client_metadata_id_example'; // string
$prefer = 'return=minimal'; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>

try {
    $result = $apiInstance->ordersCreate($pay_pal_request_id, $content_type, $order_request, $pay_pal_partner_attribution_id, $pay_pal_client_metadata_id, $prefer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_pal_request_id** | **string**| The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **order_request** | [**\OpenAPI\Client\Model\OrderRequest**](../Model/OrderRequest.md)|  | |
| **pay_pal_partner_attribution_id** | **string**|  | [optional] |
| **pay_pal_client_metadata_id** | **string**|  | [optional] |
| **prefer** | **string**| The preferred server response upon successful completion of the request. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;return&#x3D;minimal&lt;/code&gt;. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the &lt;code&gt;id&lt;/code&gt;, &lt;code&gt;status&lt;/code&gt; and HATEOAS links.&lt;/li&gt;&lt;li&gt;&lt;code&gt;return&#x3D;representation&lt;/code&gt;. The server returns a complete resource representation, including the current state of the resource.&lt;/li&gt;&lt;/ul&gt; | [optional] [default to &#39;return&#x3D;minimal&#39;] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersGet()`

```php
ordersGet($id, $content_type, $fields): \OpenAPI\Client\Model\Order
```

Show order details

Shows details for an order, by ID.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\"/api/rest/reference/orders/v2/errors/#get-order\">Orders v2 errors</a>.</blockquote>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$fields = 'fields_example'; // string | A comma-separated list of fields that should be returned for the order. Valid filter field is `payment_source`.

try {
    $result = $apiInstance->ordersGet($id, $content_type, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **fields** | **string**| A comma-separated list of fields that should be returned for the order. Valid filter field is &#x60;payment_source&#x60;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersPatch()`

```php
ordersPatch($id, $content_type, $patch)
```

Update order

Updates an order with a `CREATED` or `APPROVED` status. You cannot update an order with the `COMPLETED` status.<br/><br/>To make an update, you must provide a `reference_id`. If you omit this value with an order that contains only one purchase unit, PayPal sets the value to `default` which enables you to use the path: <code>\\\"/purchase_units/@reference_id=='default'/{attribute-or-object}\\\"</code>. Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing costs. For more information about processing payments, see <a href=\"https://developer.paypal.com/docs/checkout/advanced/processing/\">checkout</a> or <a href=\"https://developer.paypal.com/docs/multiparty/checkout/advanced/processing/\">multiparty checkout</a>.<blockquote><strong>Note:</strong> For error handling and troubleshooting, see <a href=\\\"/api/rest/reference/orders/v2/errors/#patch-order\\\">Orders v2 errors</a>.</blockquote>Patchable attributes or objects:<br/><br/><table><thead><th>Attribute</th><th>Op</th><th>Notes</th></thead><tbody><tr><td><code>intent</code></td><td>replace</td><td></td></tr><tr><td><code>payer</code></td><td>replace, add</td><td>Using replace op for <code>payer</code> will replace the whole <code>payer</code> object with the value sent in request.</td></tr><tr><td><code>purchase_units</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].custom_id</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].description</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].payee.email</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].shipping.name</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].shipping.address</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].shipping.type</code></td><td>replace, add</td><td></td></tr><tr><td><code>purchase_units[].soft_descriptor</code></td><td>replace, remove</td><td></td></tr><tr><td><code>purchase_units[].amount</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].items</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].invoice_id</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].payment_instruction</code></td><td>replace</td><td></td></tr><tr><td><code>purchase_units[].payment_instruction.disbursement_mode</code></td><td>replace</td><td>By default, <code>disbursement_mode</code> is <code>INSTANT</code>.</td></tr><tr><td><code>purchase_units[].payment_instruction.platform_fees</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].supplementary_data.airline</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>purchase_units[].supplementary_data.card</code></td><td>replace, add, remove</td><td></td></tr><tr><td><code>application_context.client_configuration</code></td><td>replace, add</td><td></td></tr></tbody></table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$patch = array(new \OpenAPI\Client\Model\Patch()); // \OpenAPI\Client\Model\Patch[]

try {
    $apiInstance->ordersPatch($id, $content_type, $patch);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **patch** | [**\OpenAPI\Client\Model\Patch[]**](../Model/Patch.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ordersTrackCreate()`

```php
ordersTrackCreate($id, $content_type, $order_tracker_request, $pay_pal_auth_assertion): \OpenAPI\Client\Model\Order
```

Add tracking information for an Order.

Adds tracking information for an Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$order_tracker_request = new \OpenAPI\Client\Model\OrderTrackerRequest(); // \OpenAPI\Client\Model\OrderTrackerRequest
$pay_pal_auth_assertion = 'pay_pal_auth_assertion_example'; // string | An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see <a href=\"/api/rest/requests/#paypal-auth-assertion\">PayPal-Auth-Assertion</a>.

try {
    $result = $apiInstance->ordersTrackCreate($id, $content_type, $order_tracker_request, $pay_pal_auth_assertion);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersTrackCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **content_type** | **string**| The media type. Required for operations with a request body. The value is &#x60;application/&lt;format&gt;&#x60;, where &#x60;format&#x60; is &#x60;json&#x60;. | [default to &#39;application/json&#39;] |
| **order_tracker_request** | [**\OpenAPI\Client\Model\OrderTrackerRequest**](../Model/OrderTrackerRequest.md)|  | |
| **pay_pal_auth_assertion** | **string**| An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see &lt;a href&#x3D;\&quot;/api/rest/requests/#paypal-auth-assertion\&quot;&gt;PayPal-Auth-Assertion&lt;/a&gt;. | [optional] |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
