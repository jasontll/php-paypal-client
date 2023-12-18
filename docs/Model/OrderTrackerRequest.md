# # OrderTrackerRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | The PayPal transaction ID. |
**tracking_number** | **string** | The tracking number for the shipment. This property supports Unicode. | [optional]
**tracking_number_type** | [**\OpenAPI\Client\Model\ShipmentTrackingNumberType**](ShipmentTrackingNumberType.md) |  | [optional]
**status** | [**\OpenAPI\Client\Model\ShipmentTrackingStatus**](ShipmentTrackingStatus.md) |  |
**shipment_date** | **string** | The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To represent special legal values, such as a date of birth, you should use dates with no associated time or time-zone data. Whenever possible, use the standard &#x60;date_time&#x60; type. This regular expression does not validate all dates. For example, February 31 is valid and nothing is known about leap years. | [optional]
**carrier** | [**\OpenAPI\Client\Model\ShipmentCarrier**](ShipmentCarrier.md) |  | [optional]
**carrier_name_other** | **string** | The name of the carrier for the shipment. Provide this value only if the carrier parameter is OTHER. This property supports Unicode. | [optional]
**postage_payment_id** | **string** | The postage payment ID. This property supports Unicode. | [optional] [readonly]
**notify_buyer** | **bool** | If true, sends an email notification to the buyer of the PayPal transaction. The email contains the tracking information that was uploaded through the API. | [optional] [default to false]
**quantity** | **int** | The quantity of items shipped. | [optional] [readonly]
**tracking_number_validated** | **bool** | Indicates whether the carrier validated the tracking number. | [optional] [readonly]
**last_updated_time** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**shipment_direction** | **string** | To denote whether the shipment is sent forward to the receiver or returned back. | [optional]
**shipment_uploader** | **string** | To denote which party uploaded the shipment tracking info. | [optional] [readonly]
**capture_id** | **string** | The PayPal capture ID. |
**notify_payer** | **bool** | If true, sends an email notification to the payer of the PayPal transaction. The email contains the tracking information that was uploaded through the API. | [optional] [default to false]
**items** | [**\OpenAPI\Client\Model\TrackerItem[]**](TrackerItem.md) | An array of details of items in the shipment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
