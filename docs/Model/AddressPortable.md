# # AddressPortable

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line_1** | **string** | The first line of the address. For example, number or street. For example, &#x60;173 Drury Lane&#x60;. Required for data entry and compliance and risk checks. Must contain the full address. | [optional]
**address_line_2** | **string** | The second line of the address. For example, suite or apartment number. | [optional]
**address_line_3** | **string** | The third line of the address, if needed. For example, a street complement for Brazil, direction text, such as &#x60;next to Walmart&#x60;, or a landmark in an Indian address. | [optional]
**admin_area_4** | **string** | The neighborhood, ward, or district. Smaller than &#x60;admin_area_level_3&#x60; or &#x60;sub_locality&#x60;. Value is:&lt;ul&gt;&lt;li&gt;The postal sorting code for Guernsey and many French territories, such as French Guiana.&lt;/li&gt;&lt;li&gt;The fine-grained administrative levels in China.&lt;/li&gt;&lt;/ul&gt; | [optional]
**admin_area_3** | **string** | A sub-locality, suburb, neighborhood, or district. Smaller than &#x60;admin_area_level_2&#x60;. Value is:&lt;ul&gt;&lt;li&gt;Brazil. Suburb, bairro, or neighborhood.&lt;/li&gt;&lt;li&gt;India. Sub-locality or district. Street name information is not always available but a sub-locality or district can be a very small area.&lt;/li&gt;&lt;/ul&gt; | [optional]
**admin_area_2** | **string** | A city, town, or village. Smaller than &#x60;admin_area_level_1&#x60;. | [optional]
**admin_area_1** | **string** | The highest level sub-division in a country, which is usually a province, state, or ISO-3166-2 subdivision. Format for postal delivery. For example, &#x60;CA&#x60; and not &#x60;California&#x60;. Value, by country, is:&lt;ul&gt;&lt;li&gt;UK. A county.&lt;/li&gt;&lt;li&gt;US. A state.&lt;/li&gt;&lt;li&gt;Canada. A province.&lt;/li&gt;&lt;li&gt;Japan. A prefecture.&lt;/li&gt;&lt;li&gt;Switzerland. A kanton.&lt;/li&gt;&lt;/ul&gt; | [optional]
**postal_code** | **string** | The postal code, which is the zip code or equivalent. Typically required for countries with a postal code or an equivalent. See [postal code](https://en.wikipedia.org/wiki/Postal_code). | [optional]
**country_code** | **string** | The [two-character ISO 3166-1 code](/api/rest/reference/country-codes/) that identifies the country or region.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The country code for Great Britain is &lt;code&gt;GB&lt;/code&gt; and not &lt;code&gt;UK&lt;/code&gt; as used in the top-level domain names for that country. Use the &#x60;C2&#x60; country code for China worldwide for comparable uncontrolled price (CUP) method, bank card, and cross-border transactions.&lt;/blockquote&gt; |
**address_details** | [**\OpenAPI\Client\Model\AddressDetails**](AddressDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
