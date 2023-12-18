# # CaptureAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The PayPal-generated ID for the captured payment. | [optional] [readonly]
**amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**invoice_id** | **string** | The API caller-provided external invoice number for this order. Appears in both the payer&#39;s transaction history and the emails that the payer receives. | [optional] [readonly]
**custom_id** | **string** | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports. | [optional]
**network_transaction_reference** | [**\OpenAPI\Client\Model\NetworkTransactionReference**](NetworkTransactionReference.md) |  | [optional]
**seller_protection** | [**\OpenAPI\Client\Model\SellerProtection**](SellerProtection.md) |  | [optional]
**final_capture** | **bool** | Indicates whether you can make additional captures against the authorized payment. Set to &#x60;true&#x60; if you do not intend to capture additional payments against the authorization. Set to &#x60;false&#x60; if you intend to capture additional payments against the authorization. | [optional] [readonly] [default to false]
**seller_receivable_breakdown** | [**\OpenAPI\Client\Model\SellerReceivableBreakdown**](SellerReceivableBreakdown.md) |  | [optional]
**disbursement_mode** | [**\OpenAPI\Client\Model\DisbursementMode**](DisbursementMode.md) |  | [optional]
**links** | [**\OpenAPI\Client\Model\LinkDescription[]**](LinkDescription.md) | An array of related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | [optional] [readonly]
**processor_response** | [**\OpenAPI\Client\Model\ProcessorResponse**](ProcessorResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
