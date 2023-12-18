# # PaypalWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vault_id** | **string** | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant&#39;s server so the saved payment source can be used for future transactions. | [optional]
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**name** | [**\OpenAPI\Client\Model\Name2**](Name2.md) |  | [optional]
**phone** | [**\OpenAPI\Client\Model\PhoneWithType**](PhoneWithType.md) |  | [optional]
**birth_date** | **string** | The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To represent special legal values, such as a date of birth, you should use dates with no associated time or time-zone data. Whenever possible, use the standard &#x60;date_time&#x60; type. This regular expression does not validate all dates. For example, February 31 is valid and nothing is known about leap years. | [optional]
**tax_info** | [**\OpenAPI\Client\Model\TaxInfo**](TaxInfo.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\AddressPortable2**](AddressPortable2.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\PaypalWalletAttributes**](PaypalWalletAttributes.md) |  | [optional]
**experience_context** | [**\OpenAPI\Client\Model\PaypalWalletExperienceContext**](PaypalWalletExperienceContext.md) |  | [optional]
**billing_agreement_id** | **string** | The PayPal billing agreement ID. References an approved recurring payment for goods or services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
