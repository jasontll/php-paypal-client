# # TransactionInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paypal_account_id** | **string** | The ID of the PayPal account of the counterparty. | [optional]
**transaction_id** | **string** | The PayPal-generated transaction ID. | [optional] [readonly]
**paypal_reference_id** | **string** | The PayPal-generated base ID. PayPal exclusive. Cannot be altered. Defined as a related, pre-existing transaction or event. | [optional]
**paypal_reference_id_type** | **string** | The PayPal reference ID type. | [optional]
**transaction_event_code** | **string** | A five-digit transaction event code that classifies the transaction type based on money movement and debit or credit. For example, &lt;code&gt;T0001&lt;/code&gt;. See [Transaction event codes](/docs/integration/direct/transaction-search/transaction-event-codes/). | [optional]
**transaction_initiation_date** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**transaction_updated_date** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**transaction_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**fee_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**discount_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**insurance_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**sales_tax_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**shipping_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**shipping_discount_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**shipping_tax_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**other_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**tip_amount** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**transaction_status** | **string** | A code that indicates the transaction status. Value is:&lt;table&gt;&lt;thead&gt;&lt;tr&gt;&lt;th&gt;Status&amp;nbsp;code&lt;/th&gt;&lt;th&gt;Description&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;&lt;tbody&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;D&lt;/code&gt;&lt;/td&gt;&lt;td&gt;PayPal or merchant rules denied the transaction.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;P&lt;/code&gt;&lt;/td&gt;&lt;td&gt;The transaction is pending. The transaction was created but waits for another payment process to complete, such as an ACH transaction, before the status changes to &lt;code&gt;S&lt;/code&gt;.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;S&lt;/code&gt;&lt;/td&gt;&lt;td&gt;The transaction successfully completed without a denial and after any pending statuses.&lt;/td&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;&lt;code&gt;V&lt;/code&gt;&lt;/td&gt;&lt;td&gt;A successful transaction was fully reversed and funds were refunded to the original sender.&lt;/td&gt;&lt;/tr&gt;&lt;/tbody&gt;&lt;/table&gt; | [optional]
**transaction_subject** | **string** | The subject of payment. The payer passes this value to the payee. The payer controls this data through the interface through which he or she sends the data. | [optional]
**transaction_note** | **string** | A special note that the payer passes to the payee. Might contain special customer requests, such as shipping instructions. | [optional]
**payment_tracking_id** | **string** | The payment tracking ID, which is a unique ID that partners specify to either get information about a payment or request a refund. | [optional]
**bank_reference_id** | **string** | The bank reference ID. The bank provides this value for an ACH transaction. | [optional]
**ending_balance** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**available_balance** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**invoice_id** | **string** | The invoice ID that is sent by the merchant with the transaction.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; If an invoice ID was sent with the capture request, the value is reported. Otherwise, the invoice ID of the authorizing transaction is reported.&lt;/blockquote&gt; | [optional]
**custom_field** | **string** | The merchant-provided custom text.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Usually, this field includes the unique ID for payments made with MassPay type transaction.&lt;/blockquote&gt; | [optional]
**protection_eligibility** | **string** | Indicates whether the transaction is eligible for protection. Value is:&lt;ul&gt;&lt;li&gt;&lt;code&gt;01&lt;/code&gt;. Eligible.&lt;/li&gt;&lt;li&gt;&lt;code&gt;02&lt;/code&gt;. Not eligible&lt;/li&gt;&lt;li&gt;&lt;code&gt;03&lt;/code&gt;. Partially eligible.&lt;/li&gt;&lt;/ul&gt; | [optional]
**credit_term** | **string** | The credit term. The time span covered by the installment payments as expressed in the term length plus the length time unit code. | [optional]
**credit_transactional_fee** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**credit_promotional_fee** | [**\OpenAPI\Client\Model\Money**](Money.md) |  | [optional]
**annual_percentage_rate** | **string** | The percentage, as a fixed-point, signed decimal number. For example, define a 19.99% interest rate as &#x60;19.99&#x60;. | [optional]
**payment_method_type** | **string** | The payment method that was used for a transaction. Value is &lt;code&gt;PUI&lt;/code&gt;, &lt;code&gt;installment&lt;/code&gt;, or &lt;code&gt;mEFT&lt;/code&gt;.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Appears only for pay upon invoice (PUI), installment, and mEFT transactions. Merchants and partners in the EMEA region can use this attribute to note transactions that attract turn-over tax.&lt;/blockquote&gt; | [optional]
**instrument_type** | **string** | A high-level classification of the type of financial instrument that was used to fund a payment. The pattern is not provided because the value is defined by an external party. E.g. PAYPAL, CREDIT_CARD, DEBIT_CARD, APPLE_PAY, BANK , VENMO ,Pay Upon Invoice, Pay Later  or &lt;a href&#x3D;\&quot;https://developer.paypal.com/docs/checkout/integration-features/alternative-payment-methods/\&quot; title&#x3D;\&quot;Link to available APM list\&quot;&gt;Alternative Payment Methods (APM)&lt;/a&gt;. | [optional]
**instrument_sub_type** | **string** | A finer-grained classification of the financial instrument that was used to fund a payment. For example, &#x60;Visa card&#x60; or a &#x60;Mastercard&#x60; for a credit card, BANKCARD ,DISCOVER etc. The pattern is not provided because the value is defined by an external party. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
