# # CardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The card holder&#39;s name as it appears on the card. | [optional]
**last_digits** | **string** | The last digits of the payment card. | [optional] [readonly]
**brand** | [**\OpenAPI\Client\Model\CardBrand**](CardBrand.md) |  | [optional]
**available_networks** | [**\OpenAPI\Client\Model\CardBrand[]**](CardBrand.md) | Array of brands or networks associated with the card. | [optional] [readonly]
**type** | **string** | The payment card type. | [optional] [readonly]
**authentication_result** | [**\OpenAPI\Client\Model\AuthenticationResponse**](AuthenticationResponse.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\CardAttributesResponse**](CardAttributesResponse.md) |  | [optional]
**from_request** | [**\OpenAPI\Client\Model\CardFromRequest**](CardFromRequest.md) |  | [optional]
**expiry** | **string** | The year and month, in ISO-8601 &#x60;YYYY-MM&#x60; date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). | [optional]
**bin_details** | [**\OpenAPI\Client\Model\BinDetails**](BinDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
