# # PayerInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | The PayPal&#x60; customer account ID. | [optional]
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**phone_number** | [**\OpenAPI\Client\Model\Phone**](Phone.md) |  | [optional]
**address_status** | **string** | The address status of the payer. Value is either:&lt;ul&gt;&lt;li&gt;&lt;code&gt;Y&lt;/code&gt;. Verified.&lt;/li&gt;&lt;li&gt;&lt;code&gt;N&lt;/code&gt;. Not verified.&lt;/li&gt;&lt;/ul&gt; | [optional]
**payer_status** | **string** | The status of the payer. Value is &#x60;Y&#x60; or &#x60;N&#x60;. | [optional]
**payer_name** | [**\OpenAPI\Client\Model\Name**](Name.md) |  | [optional]
**country_code** | **string** | The [two-character ISO 3166-1 code](/docs/integration/direct/rest/country-codes/) that identifies the country or region.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The country code for Great Britain is &lt;code&gt;GB&lt;/code&gt; and not &lt;code&gt;UK&lt;/code&gt; as used in the top-level domain names for that country. Use the &#x60;C2&#x60; country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.&lt;/blockquote&gt; | [optional]
**address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
