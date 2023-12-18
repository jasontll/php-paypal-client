# # OrderTrackerRequestAllOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**capture_id** | **string** | The PayPal capture ID. |
**notify_payer** | **bool** | If true, sends an email notification to the payer of the PayPal transaction. The email contains the tracking information that was uploaded through the API. | [optional] [default to false]
**items** | [**\OpenAPI\Client\Model\TrackerItem[]**](TrackerItem.md) | An array of details of items in the shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
