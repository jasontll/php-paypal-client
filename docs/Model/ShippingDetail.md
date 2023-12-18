# # ShippingDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | [**\OpenAPI\Client\Model\Name**](Name.md) |  | [optional]
**type** | **string** | The method by which the payer wants to get their items from the payee e.g shipping, in-person pickup. Either type or options but not both may be present. | [optional]
**options** | [**\OpenAPI\Client\Model\ShippingOption[]**](ShippingOption.md) | An array of shipping options that the payee or merchant offers to the payer to ship or pick up their items. | [optional]
**address** | [**\OpenAPI\Client\Model\AddressPortable**](AddressPortable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
