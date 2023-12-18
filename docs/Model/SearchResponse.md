# # SearchResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_details** | [**\OpenAPI\Client\Model\TransactionDetail[]**](TransactionDetail.md) | An array of transaction detail objects. | [optional]
**account_number** | **string** | The merchant account number. | [optional]
**start_date** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**end_date** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**last_refreshed_datetime** | **string** | The date and time, in [Internet date and time format](https://tools.ietf.org/html/rfc3339#section-5.6). Seconds are required while fractional seconds are optional.&lt;blockquote&gt;&lt;strong&gt;Note:&lt;/strong&gt; The regular expression provides guidance but does not reject all invalid dates.&lt;/blockquote&gt; | [optional]
**page** | **int** | A zero-relative index of transactions. | [optional]
**total_items** | **int** | The total number of transactions as an integer beginning with the specified &#x60;page&#x60; in the full result and not just in this response. | [optional]
**total_pages** | **int** | The total number of pages, as an &#x60;integer&#x60;, when the &#x60;total_items&#x60; is divided into pages of the specified &#x60;page_size&#x60;. | [optional]
**links** | [**\OpenAPI\Client\Model\LinkDescription[]**](LinkDescription.md) | An array of request-related [HATEOAS links](/api/rest/responses/#hateoas-links). | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
