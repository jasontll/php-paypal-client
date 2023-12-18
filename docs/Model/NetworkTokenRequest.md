# # NetworkTokenRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Third party network token number. |
**expiry** | **string** | The year and month, in ISO-8601 &#x60;YYYY-MM&#x60; date format. See [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). |
**cryptogram** | **string** | An Encrypted one-time use value that&#39;s sent along with Network Token. This field is not required to be present for recurring transactions. | [optional]
**eci_flag** | [**\OpenAPI\Client\Model\EciFlag**](EciFlag.md) |  | [optional]
**token_requestor_id** | **string** | A TRID, or a Token Requestor ID, is an identifier used by merchants to request network tokens from card networks. A TRID is a precursor to obtaining a network token for a credit card primary account number (PAN), and will aid in enabling secure card on file (COF) payments and reducing fraud. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
