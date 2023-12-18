# OpenAPI\Client\TrackersBatchApi

All URIs are relative to https://api-m.sandbox.paypal.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**trackersBatchPost()**](TrackersBatchApi.md#trackersBatchPost) | **POST** /v1/shipping/trackers-batch | Add tracking information for multiple PayPal transactions |


## `trackersBatchPost()`

```php
trackersBatchPost($tracker_collection): \OpenAPI\Client\Model\BatchTrackerCollection
```

Add tracking information for multiple PayPal transactions

Adds tracking information, with or without tracking numbers, for multiple PayPal transactions. Accepts up to 20 tracking IDs. For more information, see <a href=\"/docs/tracking/integrate/#add-tracking-information-with-tracking-numbers\">Add tracking information with tracking numbers</a> and <a href=\"/docs/tracking/integrate/#add-tracking-information-without-tracking-numbers\">Add tracking information without tracking numbers</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TrackersBatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tracker_collection = new \OpenAPI\Client\Model\TrackerCollection(); // \OpenAPI\Client\Model\TrackerCollection

try {
    $result = $apiInstance->trackersBatchPost($tracker_collection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackersBatchApi->trackersBatchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tracker_collection** | [**\OpenAPI\Client\Model\TrackerCollection**](../Model/TrackerCollection.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\BatchTrackerCollection**](../Model/BatchTrackerCollection.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
