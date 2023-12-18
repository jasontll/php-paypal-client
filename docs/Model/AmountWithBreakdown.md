# # AmountWithBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currency_code** | **string** | The [three-character ISO-4217 currency code](/api/rest/reference/currency-codes/) that identifies the currency. |
**value** | **string** | The value, which might be:&lt;ul&gt;&lt;li&gt;An integer for currencies like &#x60;JPY&#x60; that are not typically fractional.&lt;/li&gt;&lt;li&gt;A decimal fraction for currencies like &#x60;TND&#x60; that are subdivided into thousandths.&lt;/li&gt;&lt;/ul&gt;For the required number of decimal places for a currency code, see [Currency Codes](/api/rest/reference/currency-codes/). |
**breakdown** | [**\OpenAPI\Client\Model\AmountBreakdown**](AmountBreakdown.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
