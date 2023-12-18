# # NetworkTransactionReference

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Transaction reference id returned by the scheme. For Visa and Amex, this is the \&quot;Tran id\&quot; field in response. For MasterCard, this is the \&quot;BankNet reference id\&quot; field in response. For Discover, this is the \&quot;NRID\&quot; field in response. The pattern we expect for this field from Visa/Amex/CB/Discover is numeric, Mastercard/BNPP is alphanumeric and Paysecure is alphanumeric with special character -. |
**date** | **string** | The date that the transaction was authorized by the scheme. This field may not be returned for all networks. MasterCard refers to this field as \&quot;BankNet reference date. | [optional]
**network** | [**\OpenAPI\Client\Model\CardBrand**](CardBrand.md) |  | [optional]
**acquirer_reference_number** | **string** | Reference ID issued for the card transaction. This ID can be used to track the transaction across processors, card brands and issuing banks. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
