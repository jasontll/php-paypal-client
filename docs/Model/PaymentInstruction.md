# # PaymentInstruction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_fees** | [**\OpenAPI\Client\Model\PlatformFee[]**](PlatformFee.md) | An array of various fees, commissions, tips, or donations. This field is only applicable to merchants that been enabled for PayPal Commerce Platform for Marketplaces and Platforms capability. | [optional]
**disbursement_mode** | [**\OpenAPI\Client\Model\DisbursementMode**](DisbursementMode.md) |  | [optional]
**payee_pricing_tier_id** | **string** | This field is only enabled for selected merchants/partners to use and provides the ability to trigger a specific pricing rate/plan for a payment transaction. The list of eligible &#39;payee_pricing_tier_id&#39; would be provided to you by your Account Manager. Specifying values other than the one provided to you by your account manager would result in an error. | [optional]
**payee_receivable_fx_rate_id** | **string** | FX identifier generated returned by PayPal to be used for payment processing in order to honor FX rate (for eligible integrations) to be used when amount is settled/received into the payee account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
