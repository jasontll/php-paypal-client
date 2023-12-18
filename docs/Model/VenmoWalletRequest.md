# # VenmoWalletRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vault_id** | **string** | The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant&#39;s server so the saved payment source can be used for future transactions. | [optional]
**email_address** | **string** | The internationalized email address.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; Up to 64 characters are allowed before and 255 characters are allowed after the &lt;code&gt;@&lt;/code&gt; sign. However, the generally accepted maximum length for an email address is 254 characters. The pattern verifies that an unquoted &lt;code&gt;@&lt;/code&gt; sign exists.&lt;/blockquote&gt; | [optional]
**experience_context** | [**\OpenAPI\Client\Model\VenmoWalletExperienceContext**](VenmoWalletExperienceContext.md) |  | [optional]
**attributes** | [**\OpenAPI\Client\Model\VenmoWalletAttributes**](VenmoWalletAttributes.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
