# # ExperienceContextBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand_name** | **string** | The label that overrides the business name in the PayPal account on the PayPal site. The pattern is defined by an external party and supports Unicode. | [optional]
**locale** | **string** | The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to localize the error-related strings, such as messages, issues, and suggested actions. The tag is made up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166 alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.org/unsd/methodology/m49/). | [optional]
**shipping_preference** | **string** | The location from which the shipping address is derived. | [optional] [default to 'GET_FROM_FILE']
**return_url** | **string** | Describes the URL. | [optional]
**cancel_url** | **string** | Describes the URL. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
