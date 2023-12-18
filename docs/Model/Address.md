# # Address

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line1** | **string** | The first line of the address. For example, number or street. |
**line2** | **string** | The second line of the address. For example, suite or apartment number. | [optional]
**city** | **string** | The city name. |
**state** | **string** | The [code](/docs/api/reference/state-codes/) for a US state or the equivalent for other countries. Required for transactions if the address is in one of these countries: [Argentina](/docs/api/reference/state-codes/#argentina), [Brazil](/docs/api/reference/state-codes/#brazil), [Canada](/docs/api/reference/state-codes/#canada), [China](/docs/api/reference/state-codes/#china), [India](/docs/api/reference/state-codes/#india), [Italy](/docs/api/reference/state-codes/#italy), [Japan](/docs/api/reference/state-codes/#japan), [Mexico](/docs/api/reference/state-codes/#mexico), [Thailand](/docs/api/reference/state-codes/#thailand), or [United States](/docs/api/reference/state-codes/#usa). Maximum length is 40 single-byte characters. | [optional]
**country_code** | **string** | The [two-character ISO 3166-1 code](/docs/integration/direct/rest/country-codes/) that identifies the country or region.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The country code for Great Britain is &lt;code&gt;GB&lt;/code&gt; and not &lt;code&gt;UK&lt;/code&gt; as used in the top-level domain names for that country. Use the &#x60;C2&#x60; country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.&lt;/blockquote&gt; |
**postal_code** | **string** | The postal code, which is the zip code or equivalent. Typically required for countries with a postal code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
