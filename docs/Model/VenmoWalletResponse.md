# # VenmoWalletResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**account_id** | **string** | The PayPal payer ID, which is a masked version of the PayPal account number intended for use with third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is used to encode the result. | [optional]
**user_name** | **string** | The Venmo user name chosen by the user, also know as a Venmo handle. | [optional]
**name** | [**\OpenAPI\Client\Model\Name2**](Name2.md) |  | [optional]
**phone_number** | [**\OpenAPI\Client\Model\Phone2**](Phone2.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\AddressPortable2**](AddressPortable2.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\VenmoWalletAttributesResponse**](VenmoWalletAttributesResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
