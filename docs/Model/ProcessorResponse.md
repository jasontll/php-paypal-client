# # ProcessorResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**avs_code** | **string** | The address verification code for Visa, Discover, Mastercard, or American Express transactions. | [optional] [readonly]
**cvv_code** | **string** | The card verification value code for for Visa, Discover, Mastercard, or American Express. | [optional] [readonly]
**response_code** | **string** | Processor response code for the non-PayPal payment processor errors. | [optional] [readonly]
**payment_advice_code** | **string** | The declined payment transactions might have payment advice codes. The card networks, like Visa and Mastercard, return payment advice codes. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
