# # MerchantPayableBreakdown

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gross_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**paypal_fee** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**paypal_fee_in_receivable_currency** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**net_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**net_amount_in_receivable_currency** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**platform_fees** | [**\OpenAPI\Client\Model\PlatformFee[]**](PlatformFee.md) | An array of platform or partner fees, commissions, or brokerage fees for the refund. | [optional]
**net_amount_breakdown** | [**\OpenAPI\Client\Model\NetAmountBreakdownItem[]**](NetAmountBreakdownItem.md) | An array of breakdown values for the net amount. Returned when the currency of the refund is different from the currency of the PayPal account where the payee holds their funds. | [optional] [readonly]
**total_refunded_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
