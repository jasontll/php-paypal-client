# # Payer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**payer_id** | **string** | The account identifier for a PayPal account. | [optional]
**name** | [**\OpenAPI\Client\Model\Name**](Name.md) |  | [optional]
**phone** | [**\OpenAPI\Client\Model\PhoneWithType**](PhoneWithType.md) |  | [optional]
**birth_date** | **string** | The stand-alone date, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). To represent special legal values, such as a date of birth, you should use dates with no associated time or time-zone data. Whenever possible, use the standard &#x60;date_time&#x60; type. This regular expression does not validate all dates. For example, February 31 is valid and nothing is known about leap years. | [optional]
**tax_info** | [**\OpenAPI\Client\Model\TaxInfo**](TaxInfo.md) |  | [optional]
**address** | [**\OpenAPI\Client\Model\AddressPortable**](AddressPortable.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
