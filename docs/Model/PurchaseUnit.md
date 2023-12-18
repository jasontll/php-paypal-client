# # PurchaseUnit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference_id** | **string** | The API caller-provided external ID for the purchase unit. Required for multiple purchase units when you must update the order through &#x60;PATCH&#x60;. If you omit this value and the order contains only one purchase unit, PayPal sets this value to &#x60;default&#x60;. &lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; If there are multiple purchase units, &lt;code&gt;reference_id&lt;/code&gt; is required for each purchase unit.&lt;/blockquote&gt; | [optional]
**amount** | [**\OpenAPI\Client\Model\AmountWithBreakdown**](AmountWithBreakdown.md) |  | [optional]
**payee** | [**\OpenAPI\Client\Model\Payee**](Payee.md) |  | [optional]
**payment_instruction** | [**\OpenAPI\Client\Model\PaymentInstruction**](PaymentInstruction.md) |  | [optional]
**description** | **string** | The purchase description. | [optional]
**custom_id** | **string** | The API caller-provided external ID. Used to reconcile API caller-initiated transactions with PayPal transactions. Appears in transaction and settlement reports. | [optional]
**invoice_id** | **string** | The API caller-provided external invoice ID for this order. | [optional]
**id** | **string** | The PayPal-generated ID for the purchase unit. This ID appears in both the payer&#39;s transaction history and the emails that the payer receives. In addition, this ID is available in transaction and settlement reports that merchants and API callers can use to reconcile transactions. This ID is only available when an order is saved by calling &lt;code&gt;v2/checkout/orders/id/save&lt;/code&gt;. | [optional]
**soft_descriptor** | **string** | The payment descriptor on account transactions on the customer&#39;s credit card statement, that PayPal sends to processors. The maximum length of the soft descriptor information that you can pass in the API field is 22 characters, in the following format:&lt;code&gt;22 - len(PAYPAL * (8)) - len(&lt;var&gt;Descriptor in Payment Receiving Preferences of Merchant account&lt;/var&gt; + 1)&lt;/code&gt;The PAYPAL prefix uses 8 characters.&lt;br/&gt;&lt;br/&gt;The soft descriptor supports the following ASCII characters:&lt;ul&gt;&lt;li&gt;Alphanumeric characters&lt;/li&gt;&lt;li&gt;Dashes&lt;/li&gt;&lt;li&gt;Asterisks&lt;/li&gt;&lt;li&gt;Periods (.)&lt;/li&gt;&lt;li&gt;Spaces&lt;/li&gt;&lt;/ul&gt;For Wallet payments marketplace integrations:&lt;ul&gt;&lt;li&gt;The merchant descriptor in the Payment Receiving Preferences must be the marketplace name.&lt;/li&gt;&lt;li&gt;You can&#39;t use the remaining space to show the customer service number.&lt;/li&gt;&lt;li&gt;The remaining spaces can be a combination of seller name and country.&lt;/li&gt;&lt;/ul&gt;&lt;br/&gt;For unbranded payments (Direct Card) marketplace integrations, use a combination of the seller name and phone number. | [optional]
**items** | [**\OpenAPI\Client\Model\Item[]**](Item.md) | An array of items that the customer purchases from the merchant. | [optional]
**shipping** | [**\OpenAPI\Client\Model\ShippingWithTrackingDetails**](ShippingWithTrackingDetails.md) |  | [optional]
**supplementary_data** | [**\OpenAPI\Client\Model\SupplementaryData**](SupplementaryData.md) |  | [optional]
**payments** | [**\OpenAPI\Client\Model\PaymentCollection**](PaymentCollection.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
