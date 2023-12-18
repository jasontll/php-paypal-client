# # Level3CardProcessingData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**duty_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**discount_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**shipping_address** | [**\OpenAPI\Client\Model\AddressPortable**](AddressPortable.md) |  | [optional]
**ships_from_postal_code** | **string** | Use this field to specify the postal code of the shipping location. | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItem[]**](LineItem.md) | A list of the items that were purchased with this payment. If your merchant account has been configured for Level 3 processing this field will be passed to the processor on your behalf. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
