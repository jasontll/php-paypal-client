# # Authorization

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status for the authorized payment. | [optional] [readonly]
**status_details** | [**\OpenAPI\Client\Model\AuthorizationStatusDetails**](AuthorizationStatusDetails.md) |  | [optional]
**id** | **string** | The PayPal-generated ID for the authorized payment. | [optional] [readonly]
**amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**invoice_id** | **string** | The API caller-provided external invoice number for this order. Appears in both the payer&#39;s transaction history and the emails that the payer receives. | [optional] [readonly]
**custom_id** | **string** | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports. | [optional]
**network_transaction_reference** | [**\OpenAPI\Client\Model\NetworkTransactionReference**](NetworkTransactionReference.md) |  | [optional]
**seller_protection** | [**\OpenAPI\Client\Model\SellerProtection**](SellerProtection.md) |  | [optional]
**expiration_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**links** | [**\OpenAPI\Client\Model\LinkDescription[]**](LinkDescription.md) | An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | [optional] [readonly]
**create_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**update_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
