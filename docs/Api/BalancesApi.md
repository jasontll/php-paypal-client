# OpenAPI\Client\BalancesApi

All URIs are relative to https://api-m.sandbox.paypal.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**balancesGet()**](BalancesApi.md#balancesGet) | **GET** /v1/reporting/balances | List all balances |


## `balancesGet()`

```php
balancesGet($as_of_time, $currency_code): \OpenAPI\Client\Model\BalancesResponse
```

List all balances

List all balances. Specify date time to list balances for that time that appear in the response.<blockquote><strong>Notes:</strong> <ul><li>It takes a maximum of three hours for balances to appear in the list balances call.</li><li>This call lists balances upto the previous three years.</li></ul></blockquote>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BalancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$as_of_time = 'as_of_time_example'; // string | List balances in the response at the date time provided, will return the last refreshed balance in the system when not provided.
$currency_code = 'currency_code_example'; // string | Filters the transactions in the response by a [three-character ISO-4217 currency code](/api/rest/reference/currency-codes/) for the PayPal transaction currency.

try {
    $result = $apiInstance->balancesGet($as_of_time, $currency_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalancesApi->balancesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **as_of_time** | **string**| List balances in the response at the date time provided, will return the last refreshed balance in the system when not provided. | [optional] |
| **currency_code** | **string**| Filters the transactions in the response by a [three-character ISO-4217 currency code](/api/rest/reference/currency-codes/) for the PayPal transaction currency. | [optional] |

### Return type

[**\OpenAPI\Client\Model\BalancesResponse**](../Model/BalancesResponse.md)

### Authorization

[Oauth2](../../README.md#Oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
