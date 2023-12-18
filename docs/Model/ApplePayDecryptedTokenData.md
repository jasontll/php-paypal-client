# # ApplePayDecryptedTokenData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_amount** | [**\OpenAPI\Client\Model\Money2**](Money2.md) |  | [optional]
**tokenized_card** | [**\OpenAPI\Client\Model\Card**](Card.md) |  |
**device_manufacturer_id** | **string** | Apple Pay Hex-encoded device manufacturer identifier. The pattern is defined by an external party and supports Unicode. | [optional]
**payment_data_type** | **string** | Indicates the type of payment data passed, in case of Non China the payment data is 3DSECURE and for China it is EMV. | [optional]
**payment_data** | [**\OpenAPI\Client\Model\ApplePayPaymentData**](ApplePayPaymentData.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
