# # Card

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The identifier of the instrument. | [optional]
**name** | **string** | The card holder&#39;s name as it appears on the card. | [optional]
**number** | **string** | The primary account number (PAN) for the payment card. | [optional]
**expiry** | **string** | The year and month, in ISO-8601 &#x60;YYYY-MM&#x60; date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). | [optional]
**security_code** | **string** | The three- or four-digit security code of the card. Also known as the CVV, CVC, CVN, CVE, or CID. This parameter cannot be present in the request when &#x60;payment_initiator&#x3D;MERCHANT&#x60;. | [optional]
**last_digits** | **string** | The last digits of the payment card. | [optional] [readonly]
**card_type** | [**\OpenAPI\Client\Model\CardBrand**](CardBrand.md) |  | [optional]
**type** | [**\OpenAPI\Client\Model\CardType**](CardType.md) |  | [optional]
**brand** | [**\OpenAPI\Client\Model\CardBrand**](CardBrand.md) |  | [optional]
**billing_address** | [**\OpenAPI\Client\Model\AddressPortable**](AddressPortable.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\CardAttributes**](CardAttributes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
