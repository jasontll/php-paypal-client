# # LinkDescription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The complete target URL. To make the related call, combine the method with this [URI Template-formatted](https://tools.ietf.org/html/rfc6570) link. For pre-processing, include the &#x60;$&#x60;, &#x60;(&#x60;, and &#x60;)&#x60; characters. The &#x60;href&#x60; is the key HATEOAS component that links a completed call with a subsequent call. |
**rel** | **string** | The [link relation type](https://tools.ietf.org/html/rfc5988#section-4), which serves as an ID for a link that unambiguously describes the semantics of the link. See [Link Relations](https://www.iana.org/assignments/link-relations/link-relations.xhtml). |
**method** | **string** | The HTTP method required to make the related call. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
