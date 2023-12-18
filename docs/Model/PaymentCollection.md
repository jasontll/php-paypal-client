# # PaymentCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorizations** | [**\OpenAPI\Client\Model\AuthorizationWithAdditionalData[]**](AuthorizationWithAdditionalData.md) | An array of authorized payments for a purchase unit. A purchase unit can have zero or more authorized payments. | [optional]
**captures** | [**\OpenAPI\Client\Model\Capture[]**](Capture.md) | An array of captured payments for a purchase unit. A purchase unit can have zero or more captured payments. | [optional]
**refunds** | [**\OpenAPI\Client\Model\Refund[]**](Refund.md) | An array of refunds for a purchase unit. A purchase unit can have zero or more refunds. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
