# # PaypalWalletResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**account_id** | **string** | The PayPal payer ID, which is a masked version of the PayPal account number intended for use with third parties. The account number is reversibly encrypted and a proprietary variant of Base32 is used to encode the result. | [optional]
**name** | [**\OpenAPI\Client\Model\Name2**](Name2.md) |  | [optional]
**phone_type** | [**\OpenAPI\Client\Model\PhoneType2**](PhoneType2.md) |  | [optional]
**phone_number** | [**\OpenAPI\Client\Model\Phone2**](Phone2.md) |  | [optional]
**birth_date** | **string** | The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To represent special legal values, such as a date of birth, you should use dates with no associated time or time-zone data. Whenever possible, use the standard &#x60;date_time&#x60; type. This regular expression does not validate all dates. For example, February 31 is valid and nothing is known about leap years. | [optional]
**tax_info** | [**\OpenAPI\Client\Model\TaxInfo**](TaxInfo.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\AddressPortable2**](AddressPortable2.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\PaypalWalletAttributesResponse**](PaypalWalletAttributesResponse.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
