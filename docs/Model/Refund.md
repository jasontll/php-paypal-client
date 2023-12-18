# # Refund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the refund. | [optional] [readonly]
**status_details** | [**\OpenAPI\Client\Model\RefundStatusDetails**](RefundStatusDetails.md) |  | [optional]
**id** | **string** | The PayPal-generated ID for the refund. | [optional] [readonly]
**amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**invoice_id** | **string** | The API caller-provided external invoice number for this order. Appears in both the payer&#39;s transaction history and the emails that the payer receives. | [optional] [readonly]
**custom_id** | **string** | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports. | [optional]
**acquirer_reference_number** | **string** | Reference ID issued for the card transaction. This ID can be used to track the transaction across processors, card brands and issuing banks. | [optional]
**note_to_payer** | **string** | The reason for the refund. Appears in both the payer&#39;s transaction history and the emails that the payer receives. | [optional] [readonly]
**seller_payable_breakdown** | [**\OpenAPI\Client\Model\MerchantPayableBreakdown**](MerchantPayableBreakdown.md) |  | [optional]
**payer** | [**\OpenAPI\Client\Model\PayeeBase**](PayeeBase.md) |  | [optional]
**links** | [**\OpenAPI\Client\Model\LinkDescription[]**](LinkDescription.md) | An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | [optional] [readonly]
**create_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**update_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
