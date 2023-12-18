# # ApplePayRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ApplePay transaction identifier, this will be the unique identifier for this transaction provided by Apple. The pattern is defined by an external party and supports Unicode. | [optional]
**name** | **string** | The full name representation like Mr J Smith. | [optional]
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**phone_number** | [**\OpenAPI\Client\Model\Phone**](Phone.md) |  | [optional]
**decrypted_token** | [**\OpenAPI\Client\Model\ApplePayDecryptedTokenData**](ApplePayDecryptedTokenData.md) |  | [optional]
**stored_credential** | [**\OpenAPI\Client\Model\CardStoredCredential**](CardStoredCredential.md) |  | [optional]
**vault_id** | **string** | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant&#39;s server so the saved payment source can be used for future transactions. | [optional]
**attributes** | **mixed** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
