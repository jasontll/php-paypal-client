# # OrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**intent** | [**\OpenAPI\Client\Model\CheckoutPaymentIntent**](CheckoutPaymentIntent.md) |  |
**payer** | [**\OpenAPI\Client\Model\Payer**](Payer.md) |  | [optional]
**purchase_units** | [**\OpenAPI\Client\Model\PurchaseUnitRequest[]**](PurchaseUnitRequest.md) | An array of purchase units. Each purchase unit establishes a contract between a payer and the payee. Each purchase unit represents either a full or partial order that the payer intends to purchase from the payee. |
**payment_source** | [**\OpenAPI\Client\Model\PaymentSource**](PaymentSource.md) |  | [optional]
**application_context** | [**\OpenAPI\Client\Model\OrderApplicationContext**](OrderApplicationContext.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
