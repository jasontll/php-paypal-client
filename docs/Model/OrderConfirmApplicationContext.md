# # OrderConfirmApplicationContext

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand_name** | **string** | Label to present to your payer as part of the PayPal hosted web experience. | [optional]
**locale** | **string** | The [language tag](https://tools.ietf.org/html/bcp47#section-2) for the language in which to localize the error-related strings, such as messages, issues, and suggested actions. The tag is made up of the [ISO 639-2 language code](https://www.loc.gov/standards/iso639-2/php/code_list.php), the optional [ISO-15924 script tag](https://www.unicode.org/iso15924/codelists.html), and the [ISO-3166 alpha-2 country code](/api/rest/reference/country-codes/) or [M49 region code](https://unstats.un.org/unsd/methodology/m49/). | [optional]
**return_url** | **string** | The URL where the customer is redirected after the customer approves the payment. | [optional]
**cancel_url** | **string** | The URL where the customer is redirected after the customer cancels the payment. | [optional]
**stored_payment_source** | [**\OpenAPI\Client\Model\StoredPaymentSource**](StoredPaymentSource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
