# OpenAPI\Client\TrackersApi

All URIs are relative to https://api-m.sandbox.paypal.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ordersTrackersPatch()**](TrackersApi.md#ordersTrackersPatch) | **PATCH** /v2/checkout/orders/{id}/trackers/{tracker_id} | Update or cancel tracking information for a PayPal order |


## `ordersTrackersPatch()`

```php
ordersTrackersPatch($id, $tracker_id, $content_type, $patch)
```

Update or cancel tracking information for a PayPal order

Updates or cancels the tracking information for a PayPal order, by ID. Updatable attributes or objects:<br/><br/><table><thead><th>Attribute</th><th>Op</th><th>Notes</th></thead><tbody></tr><tr><td><code>items</code></td><td>replace</td><td>Using replace op for <code>items</code> will replace the entire <code>items</code> object with the value sent in request.</td></tr><tr><td><code>notify_payer</code></td><td>replace, add</td><td></td></tr><tr><td><code>status</code></td><td>replace</td><td>Only patching status to CANCELLED is currently supported.</td></tr></tbody></table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TrackersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$tracker_id = 'tracker_id_example'; // string | The order tracking ID.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$patch = array(new \OpenAPI\Client\Model\Patch()); // \OpenAPI\Client\Model\Patch[]

try {
    $apiInstance->ordersTrackersPatch($id, $tracker_id, $content_type, $patch);
} catch (Exception $e) {
    echo 'Exception when calling TrackersApi->ordersTrackersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The ID of the order for which to update payment details. | |
| **tracker_id** | **string**| The order tracking ID. | |
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
