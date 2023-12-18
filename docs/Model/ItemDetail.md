# # ItemDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_code** | **string** | An item code that identifies a merchant&#39;s goods or service. | [optional]
**item_name** | **string** | The item name. | [optional]
**item_description** | **string** | The item description. | [optional]
**item_options** | **string** | The item options. Describes option choices on the purchase of the item in some detail. | [optional]
**item_quantity** | **string** | The number of purchased units of goods or a service. | [optional]
**item_unit_price** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**item_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**discount_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**adjustment_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**gift_wrap_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**tax_percentage** | **string** | The percentage, as a fixed-point, signed decimal number. For example, define a 19.99% interest rate as &#x60;19.99&#x60;. | [optional]
**tax_amounts** | [**\OpenAPI\Client\Model\ItemDetailTaxAmount[]**](ItemDetailTaxAmount.md) | An array of tax amounts levied by a government on the purchase of goods or services. | [optional]
**basic_shipping_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**extra_shipping_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**handling_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**insurance_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**total_item_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**invoice_number** | **string** | The invoice number. An alphanumeric string that identifies a billing for a merchant. | [optional]
**checkout_options** | [**\OpenAPI\Client\Model\CheckoutOption[]**](CheckoutOption.md) | An array of checkout options. Each option has a name and value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
