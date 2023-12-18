# # LineItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The item name or title. |
**unit_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  |
**tax** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**quantity** | **string** | The item quantity. Must be a whole number. |
**description** | **string** | The detailed item description. | [optional]
**sku** | **string** | The stock keeping unit (SKU) for the item. | [optional]
**category** | **string** | The item category type. | [optional]
**commodity_code** | **string** | Code used to classify items purchased and track the total amount spent across various categories of products and services. Different corporate purchasing organizations may use different standards, but the United Nations Standard Products and Services Code (UNSPSC) is frequently used. | [optional]
**discount_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**total_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**unit_of_measure** | **string** | Unit of measure is a standard used to express the magnitude of a quantity in international trade. Most commonly used (but not limited to) examples are: Acre (ACR), Ampere (AMP), Centigram (CGM), Centimetre (CMT), Cubic inch (INQ), Cubic metre (MTQ), Fluid ounce (OZA), Foot (FOT), Hour (HUR), Item (ITM), Kilogram (KGM), Kilometre (KMT), Kilowatt (KWT), Liquid gallon (GLL), Liter (LTR), Pounds (LBS), Square foot (FTK). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
