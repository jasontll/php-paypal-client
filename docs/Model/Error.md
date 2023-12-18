# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The human-readable, unique name of the error. |
**message** | **string** | The message that describes the error. |
**debug_id** | **string** | The PayPal internal ID. Used for correlation purposes. |
**information_link** | **string** | The information link, or URI, that shows detailed information about this error for the developer. | [optional] [readonly]
**details** | [**\OpenAPI\Client\Model\ErrorDetails[]**](ErrorDetails.md) | An array of additional details about the error. | [optional]
**links** | [**\OpenAPI\Client\Model\LinkDescription2[]**](LinkDescription2.md) | An array of request-related [HATEOAS links](/docs/api/reference/api-responses/#hateoas-links). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
