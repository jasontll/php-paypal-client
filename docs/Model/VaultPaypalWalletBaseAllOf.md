# # VaultPaypalWalletBaseAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description displayed to PayPal consumer on the approval flow for PayPal, as well as on the PayPal payment token management experience on PayPal.com. | [optional]
**usage_pattern** | **string** | Expected business/pricing model for the billing agreement. | [optional]
**shipping** | [**\OpenAPI\Client\Model\ShippingDetail**](ShippingDetail.md) |  | [optional]
**usage_type** | **string** | The usage type associated with the PayPal payment token. | [optional]
**customer_type** | **string** | The customer type associated with the PayPal payment token. This is to indicate whether the customer acting on the merchant / platform is either a business or a consumer. | [optional] [default to 'CONSUMER']
**permit_multiple_payment_tokens** | **bool** | Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the customer has not logged in at merchant/platform. The payment token thus generated, can then also be used to create the customer account at merchant/platform. Use this also when multiple payment tokens are required for the same payer, different customer at merchant/platform. This helps to identify customers distinctly even though they may share the same PayPal account. This only applies to PayPal payment source. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
