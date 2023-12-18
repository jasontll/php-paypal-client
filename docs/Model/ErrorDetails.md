# # ErrorDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**field** | **string** | The field that caused the error. If this field is in the body, set this value to the field&#39;s JSON pointer value. Required for client-side errors. | [optional]
**value** | **string** | The value of the field that caused the error. | [optional]
**location** | **string** | The location of the field that caused the error. Value is &#x60;body&#x60;, &#x60;path&#x60;, or &#x60;query&#x60;. | [optional] [default to 'body']
**issue** | **string** | The unique, fine-grained application-level error code. |
**description** | **string** | The human-readable description for an issue. The description can change over the lifetime of an API, so clients must not depend on this value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
