# OpenAPIClient-php

An order represents a payment between two or more parties. Use the Orders API to create, update, retrieve, authorize, and capture orders.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_pal_request_id = 'pay_pal_request_id_example'; // string | The server stores keys for 6 hours. The API callers can request the times to up to 72 hours by speaking to their Account Manager.
$id = 'id_example'; // string | The ID of the order for which to update payment details.
$content_type = 'application/json'; // string | The media type. Required for operations with a request body. The value is `application/<format>`, where `format` is `json`.
$prefer = 'return=minimal'; // string | The preferred server response upon successful completion of the request. Value is:<ul><li><code>return=minimal</code>. The server returns a minimal response to optimize communication between the API caller and the server. A minimal response includes the <code>id</code>, <code>status</code> and HATEOAS links.</li><li><code>return=representation</code>. The server returns a complete resource representation, including the current state of the resource.</li></ul>
$pay_pal_client_metadata_id = 'pay_pal_client_metadata_id_example'; // string
$pay_pal_auth_assertion = 'pay_pal_auth_assertion_example'; // string | An API-caller-provided JSON Web Token (JWT) assertion that identifies the merchant. For details, see <a href=\"/api/rest/requests/#paypal-auth-assertion\">PayPal-Auth-Assertion</a>.
$order_authorize_request = new \OpenAPI\Client\Model\OrderAuthorizeRequest(); // \OpenAPI\Client\Model\OrderAuthorizeRequest

try {
    $result = $apiInstance->ordersAuthorize($pay_pal_request_id, $id, $content_type, $prefer, $pay_pal_client_metadata_id, $pay_pal_auth_assertion, $order_authorize_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->ordersAuthorize: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-m.sandbox.paypal.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrdersApi* | [**ordersAuthorize**](docs/Api/OrdersApi.md#ordersauthorize) | **POST** /v2/checkout/orders/{id}/authorize | Authorize payment for order
*OrdersApi* | [**ordersCapture**](docs/Api/OrdersApi.md#orderscapture) | **POST** /v2/checkout/orders/{id}/capture | Capture payment for order
*OrdersApi* | [**ordersConfirm**](docs/Api/OrdersApi.md#ordersconfirm) | **POST** /v2/checkout/orders/{id}/confirm-payment-source | Confirm the Order
*OrdersApi* | [**ordersCreate**](docs/Api/OrdersApi.md#orderscreate) | **POST** /v2/checkout/orders | Create order
*OrdersApi* | [**ordersGet**](docs/Api/OrdersApi.md#ordersget) | **GET** /v2/checkout/orders/{id} | Show order details
*OrdersApi* | [**ordersPatch**](docs/Api/OrdersApi.md#orderspatch) | **PATCH** /v2/checkout/orders/{id} | Update order
*OrdersApi* | [**ordersTrackCreate**](docs/Api/OrdersApi.md#orderstrackcreate) | **POST** /v2/checkout/orders/{id}/track | Add tracking information for an Order.
*TrackersApi* | [**ordersTrackersPatch**](docs/Api/TrackersApi.md#orderstrackerspatch) | **PATCH** /v2/checkout/orders/{id}/trackers/{tracker_id} | Update or cancel tracking information for a PayPal order

## Models

- [400IssuesInner](docs/Model/400IssuesInner.md)
- [401IssuesInner](docs/Model/401IssuesInner.md)
- [403IssuesInner](docs/Model/403IssuesInner.md)
- [404IssuesInner](docs/Model/404IssuesInner.md)
- [422IssuesInner](docs/Model/422IssuesInner.md)
- [ACTIONDOESNOTMATCHINTENT](docs/Model/ACTIONDOESNOTMATCHINTENT.md)
- [AGREEMENTALREADYCANCELLED](docs/Model/AGREEMENTALREADYCANCELLED.md)
- [ALIASDECLINEDBYPROCESSOR](docs/Model/ALIASDECLINEDBYPROCESSOR.md)
- [AMOUNTCANNOTBESPECIFIED](docs/Model/AMOUNTCANNOTBESPECIFIED.md)
- [AMOUNTCHANGENOTALLOWED](docs/Model/AMOUNTCHANGENOTALLOWED.md)
- [AMOUNTMISMATCH](docs/Model/AMOUNTMISMATCH.md)
- [AMOUNTNOTPATCHABLE](docs/Model/AMOUNTNOTPATCHABLE.md)
- [APPLEPAYAMOUNTMISMATCH](docs/Model/APPLEPAYAMOUNTMISMATCH.md)
- [AUTHCAPTURENOTENABLED](docs/Model/AUTHCAPTURENOTENABLED.md)
- [AUTHORIZATIONAMOUNTEXCEEDED](docs/Model/AUTHORIZATIONAMOUNTEXCEEDED.md)
- [AUTHORIZATIONCURRENCYMISMATCH](docs/Model/AUTHORIZATIONCURRENCYMISMATCH.md)
- [ActivityTimestamps](docs/Model/ActivityTimestamps.md)
- [AddressDetails](docs/Model/AddressDetails.md)
- [AddressDetails1](docs/Model/AddressDetails1.md)
- [AddressPortable](docs/Model/AddressPortable.md)
- [AddressPortable2](docs/Model/AddressPortable2.md)
- [AmountBreakdown](docs/Model/AmountBreakdown.md)
- [AmountWithBreakdown](docs/Model/AmountWithBreakdown.md)
- [AmountWithBreakdownAllOf](docs/Model/AmountWithBreakdownAllOf.md)
- [ApplePayDecryptedTokenData](docs/Model/ApplePayDecryptedTokenData.md)
- [ApplePayPaymentData](docs/Model/ApplePayPaymentData.md)
- [ApplePayRequest](docs/Model/ApplePayRequest.md)
- [AuthenticationResponse](docs/Model/AuthenticationResponse.md)
- [Authorization](docs/Model/Authorization.md)
- [AuthorizationAllOf](docs/Model/AuthorizationAllOf.md)
- [AuthorizationStatus](docs/Model/AuthorizationStatus.md)
- [AuthorizationStatusDetails](docs/Model/AuthorizationStatusDetails.md)
- [AuthorizationWithAdditionalData](docs/Model/AuthorizationWithAdditionalData.md)
- [AuthorizationWithAdditionalDataAllOf](docs/Model/AuthorizationWithAdditionalDataAllOf.md)
- [BANKNOTSUPPORTEDFORVERIFICATION](docs/Model/BANKNOTSUPPORTEDFORVERIFICATION.md)
- [BILLINGADDRESSINVALID](docs/Model/BILLINGADDRESSINVALID.md)
- [BILLINGAGREEMENTIDMISMATCH](docs/Model/BILLINGAGREEMENTIDMISMATCH.md)
- [BILLINGAGREEMENTNOTFOUND](docs/Model/BILLINGAGREEMENTNOTFOUND.md)
- [BLIKONECLICKMISSINGREQUIREDPARAMETER](docs/Model/BLIKONECLICKMISSINGREQUIREDPARAMETER.md)
- [Bancontact](docs/Model/Bancontact.md)
- [BancontactRequest](docs/Model/BancontactRequest.md)
- [BinDetails](docs/Model/BinDetails.md)
- [Blik](docs/Model/Blik.md)
- [BlikExperienceContext](docs/Model/BlikExperienceContext.md)
- [BlikExperienceContextAllOf](docs/Model/BlikExperienceContextAllOf.md)
- [BlikOneClick](docs/Model/BlikOneClick.md)
- [BlikOneClickResponse](docs/Model/BlikOneClickResponse.md)
- [BlikRequest](docs/Model/BlikRequest.md)
- [BlikSeamless](docs/Model/BlikSeamless.md)
- [CANCELURLREQUIRED](docs/Model/CANCELURLREQUIRED.md)
- [CANNOTBENEGATIVE](docs/Model/CANNOTBENEGATIVE.md)
- [CANNOTBEZEROORNEGATIVE](docs/Model/CANNOTBEZEROORNEGATIVE.md)
- [CAPTUREIDNOTFOUND](docs/Model/CAPTUREIDNOTFOUND.md)
- [CAPTURESTATUSNOTVALID](docs/Model/CAPTURESTATUSNOTVALID.md)
- [CARDBRANDNOTSUPPORTED](docs/Model/CARDBRANDNOTSUPPORTED.md)
- [CARDEXPIRED](docs/Model/CARDEXPIRED.md)
- [CARDEXPIRYREQUIRED](docs/Model/CARDEXPIRYREQUIRED.md)
- [CARDNUMBERREQUIRED](docs/Model/CARDNUMBERREQUIRED.md)
- [CARDTYPENOTSUPPORTED](docs/Model/CARDTYPENOTSUPPORTED.md)
- [CITYREQUIRED](docs/Model/CITYREQUIRED.md)
- [COMPLIANCEVIOLATION](docs/Model/COMPLIANCEVIOLATION.md)
- [CONSENTNEEDED](docs/Model/CONSENTNEEDED.md)
- [COUNTRYNOTSUPPORTEDBYPAYMENTSOURCE](docs/Model/COUNTRYNOTSUPPORTEDBYPAYMENTSOURCE.md)
- [CRYPTOGRAMREQUIRED](docs/Model/CRYPTOGRAMREQUIRED.md)
- [CURRENCYNOTSUPPORTEDFORBANK](docs/Model/CURRENCYNOTSUPPORTEDFORBANK.md)
- [CURRENCYNOTSUPPORTEDFORCARDTYPE](docs/Model/CURRENCYNOTSUPPORTEDFORCARDTYPE.md)
- [CURRENCYNOTSUPPORTEDFORCOUNTRY](docs/Model/CURRENCYNOTSUPPORTEDFORCOUNTRY.md)
- [Capture](docs/Model/Capture.md)
- [CaptureAllOf](docs/Model/CaptureAllOf.md)
- [CaptureStatus](docs/Model/CaptureStatus.md)
- [CaptureStatusDetails](docs/Model/CaptureStatusDetails.md)
- [Card](docs/Model/Card.md)
- [CardAttributes](docs/Model/CardAttributes.md)
- [CardAttributesResponse](docs/Model/CardAttributesResponse.md)
- [CardBrand](docs/Model/CardBrand.md)
- [CardExperienceContext](docs/Model/CardExperienceContext.md)
- [CardFromRequest](docs/Model/CardFromRequest.md)
- [CardRequest](docs/Model/CardRequest.md)
- [CardRequestAllOf](docs/Model/CardRequestAllOf.md)
- [CardResponse](docs/Model/CardResponse.md)
- [CardStoredCredential](docs/Model/CardStoredCredential.md)
- [CardSupplementaryData](docs/Model/CardSupplementaryData.md)
- [CardType](docs/Model/CardType.md)
- [CheckoutPaymentIntent](docs/Model/CheckoutPaymentIntent.md)
- [CobrandedCard](docs/Model/CobrandedCard.md)
- [ConfirmOrderRequest](docs/Model/ConfirmOrderRequest.md)
- [Customer](docs/Model/Customer.md)
- [DECIMALPRECISION](docs/Model/DECIMALPRECISION.md)
- [DECLINEDDUETORELATEDTXN](docs/Model/DECLINEDDUETORELATEDTXN.md)
- [DEVICEDATANOTAVAILABLE](docs/Model/DEVICEDATANOTAVAILABLE.md)
- [DOMESTICTRANSACTIONREQUIRED](docs/Model/DOMESTICTRANSACTIONREQUIRED.md)
- [DONATIONITEMSNOTSUPPORTED](docs/Model/DONATIONITEMSNOTSUPPORTED.md)
- [DUPLICATEINVOICEID](docs/Model/DUPLICATEINVOICEID.md)
- [DUPLICATEREFERENCEID](docs/Model/DUPLICATEREFERENCEID.md)
- [DisbursementMode](docs/Model/DisbursementMode.md)
- [EMVDATAREQUIRED](docs/Model/EMVDATAREQUIRED.md)
- [EciFlag](docs/Model/EciFlag.md)
- [Enrolled](docs/Model/Enrolled.md)
- [Eps](docs/Model/Eps.md)
- [EpsRequest](docs/Model/EpsRequest.md)
- [Error400](docs/Model/Error400.md)
- [Error401](docs/Model/Error401.md)
- [Error403](docs/Model/Error403.md)
- [Error404](docs/Model/Error404.md)
- [Error409](docs/Model/Error409.md)
- [Error415](docs/Model/Error415.md)
- [Error422](docs/Model/Error422.md)
- [Error500](docs/Model/Error500.md)
- [Error503](docs/Model/Error503.md)
- [ErrorDefault](docs/Model/ErrorDefault.md)
- [ErrorDetails](docs/Model/ErrorDetails.md)
- [ExchangeRate](docs/Model/ExchangeRate.md)
- [ExperienceContextBase](docs/Model/ExperienceContextBase.md)
- [FIELDNOTPATCHABLE](docs/Model/FIELDNOTPATCHABLE.md)
- [GOOGLEPAYGATEWAYMERCHANTIDMISMATCH](docs/Model/GOOGLEPAYGATEWAYMERCHANTIDMISMATCH.md)
- [Giropay](docs/Model/Giropay.md)
- [GiropayRequest](docs/Model/GiropayRequest.md)
- [IBANCOUNTRYNOTSUPPORTED](docs/Model/IBANCOUNTRYNOTSUPPORTED.md)
- [IDENTIFIERNOTFOUND](docs/Model/IDENTIFIERNOTFOUND.md)
- [INCOMPATIBLEPARAMETERVALUE](docs/Model/INCOMPATIBLEPARAMETERVALUE.md)
- [INSTRUMENTDECLINED](docs/Model/INSTRUMENTDECLINED.md)
- [INVALIDACCOUNTSTATUS](docs/Model/INVALIDACCOUNTSTATUS.md)
- [INVALIDARRAYMAXITEMS](docs/Model/INVALIDARRAYMAXITEMS.md)
- [INVALIDARRAYMINITEMS](docs/Model/INVALIDARRAYMINITEMS.md)
- [INVALIDCOUNTRYCODE](docs/Model/INVALIDCOUNTRYCODE.md)
- [INVALIDCURRENCYCODE](docs/Model/INVALIDCURRENCYCODE.md)
- [INVALIDEXPIRYDATE](docs/Model/INVALIDEXPIRYDATE.md)
- [INVALIDFXRATEID](docs/Model/INVALIDFXRATEID.md)
- [INVALIDGOOGLEPAYTOKEN](docs/Model/INVALIDGOOGLEPAYTOKEN.md)
- [INVALIDIBAN](docs/Model/INVALIDIBAN.md)
- [INVALIDJSONPOINTERFORMAT](docs/Model/INVALIDJSONPOINTERFORMAT.md)
- [INVALIDJSONPOINTERFORMAT1](docs/Model/INVALIDJSONPOINTERFORMAT1.md)
- [INVALIDPARAMETER](docs/Model/INVALIDPARAMETER.md)
- [INVALIDPARAMETERSYNTAX](docs/Model/INVALIDPARAMETERSYNTAX.md)
- [INVALIDPARAMETERSYNTAX1](docs/Model/INVALIDPARAMETERSYNTAX1.md)
- [INVALIDPARAMETERVALUE](docs/Model/INVALIDPARAMETERVALUE.md)
- [INVALIDPARAMETERVALUE1](docs/Model/INVALIDPARAMETERVALUE1.md)
- [INVALIDPATCHOPERATION](docs/Model/INVALIDPATCHOPERATION.md)
- [INVALIDPAYEEPRICINGTIERID](docs/Model/INVALIDPAYEEPRICINGTIERID.md)
- [INVALIDPAYERID](docs/Model/INVALIDPAYERID.md)
- [INVALIDPICKUPADDRESS](docs/Model/INVALIDPICKUPADDRESS.md)
- [INVALIDPLATFORMFEESACCOUNT](docs/Model/INVALIDPLATFORMFEESACCOUNT.md)
- [INVALIDPLATFORMFEESAMOUNT](docs/Model/INVALIDPLATFORMFEESAMOUNT.md)
- [INVALIDPREVIOUSTRANSACTIONREFERENCE](docs/Model/INVALIDPREVIOUSTRANSACTIONREFERENCE.md)
- [INVALIDRESOURCEID](docs/Model/INVALIDRESOURCEID.md)
- [INVALIDSECURITYCODELENGTH](docs/Model/INVALIDSECURITYCODELENGTH.md)
- [INVALIDSTRINGLENGTH](docs/Model/INVALIDSTRINGLENGTH.md)
- [INVALIDSTRINGLENGTH1](docs/Model/INVALIDSTRINGLENGTH1.md)
- [INVALIDSTRINGMAXLENGTH](docs/Model/INVALIDSTRINGMAXLENGTH.md)
- [ITEMCATEGORYNOTSUPPORTEDBYPAYMENTSOURCE](docs/Model/ITEMCATEGORYNOTSUPPORTEDBYPAYMENTSOURCE.md)
- [ITEMSKUMISMATCH](docs/Model/ITEMSKUMISMATCH.md)
- [ITEMTOTALMISMATCH](docs/Model/ITEMTOTALMISMATCH.md)
- [ITEMTOTALREQUIRED](docs/Model/ITEMTOTALREQUIRED.md)
- [Ideal](docs/Model/Ideal.md)
- [IdealRequest](docs/Model/IdealRequest.md)
- [Item](docs/Model/Item.md)
- [Level2CardProcessingData](docs/Model/Level2CardProcessingData.md)
- [Level3CardProcessingData](docs/Model/Level3CardProcessingData.md)
- [LiabilityShift](docs/Model/LiabilityShift.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemAllOf](docs/Model/LineItemAllOf.md)
- [LinkDescription](docs/Model/LinkDescription.md)
- [MALFORMEDREQUESTJSON](docs/Model/MALFORMEDREQUESTJSON.md)
- [MAXAUTHORIZATIONCOUNTEXCEEDED](docs/Model/MAXAUTHORIZATIONCOUNTEXCEEDED.md)
- [MAXNUMBEROFPAYMENTATTEMPTSEXCEEDED](docs/Model/MAXNUMBEROFPAYMENTATTEMPTSEXCEEDED.md)
- [MAXVALUEEXCEEDED](docs/Model/MAXVALUEEXCEEDED.md)
- [MERCHANTINITIATEDWITHAUTHENTICATIONRESULTS](docs/Model/MERCHANTINITIATEDWITHAUTHENTICATIONRESULTS.md)
- [MERCHANTINITIATEDWITHMULTIPLEPURCHASEUNITS](docs/Model/MERCHANTINITIATEDWITHMULTIPLEPURCHASEUNITS.md)
- [MERCHANTINITIATEDWITHSECURITYCODE](docs/Model/MERCHANTINITIATEDWITHSECURITYCODE.md)
- [MISMATCHEDVAULTIDTOPAYMENTSOURCE](docs/Model/MISMATCHEDVAULTIDTOPAYMENTSOURCE.md)
- [MISSINGCRYPTOGRAM](docs/Model/MISSINGCRYPTOGRAM.md)
- [MISSINGPICKUPADDRESS](docs/Model/MISSINGPICKUPADDRESS.md)
- [MISSINGPREVIOUSREFERENCE](docs/Model/MISSINGPREVIOUSREFERENCE.md)
- [MISSINGREQUIREDPARAMETER](docs/Model/MISSINGREQUIREDPARAMETER.md)
- [MISSINGREQUIREDPARAMETER1](docs/Model/MISSINGREQUIREDPARAMETER1.md)
- [MISSINGREQUIREDPARAMETER2](docs/Model/MISSINGREQUIREDPARAMETER2.md)
- [MISSINGREQUIREDPARAMETER3](docs/Model/MISSINGREQUIREDPARAMETER3.md)
- [MSPNOTSUPPORTED](docs/Model/MSPNOTSUPPORTED.md)
- [MULTICURRENCYORDER](docs/Model/MULTICURRENCYORDER.md)
- [MULTIPLEITEMCATEGORIES](docs/Model/MULTIPLEITEMCATEGORIES.md)
- [MULTIPLESHIPPINGADDRESSNOTSUPPORTED](docs/Model/MULTIPLESHIPPINGADDRESSNOTSUPPORTED.md)
- [MULTIPLESHIPPINGOPTIONSELECTED](docs/Model/MULTIPLESHIPPINGOPTIONSELECTED.md)
- [MULTIPLESHIPPINGTYPENOTSUPPORTED](docs/Model/MULTIPLESHIPPINGTYPENOTSUPPORTED.md)
- [MerchantPayableBreakdown](docs/Model/MerchantPayableBreakdown.md)
- [Model400](docs/Model/Model400.md)
- [Model401](docs/Model/Model401.md)
- [Model403](docs/Model/Model403.md)
- [Model404](docs/Model/Model404.md)
- [Model422](docs/Model/Model422.md)
- [Money](docs/Model/Money.md)
- [Money2](docs/Model/Money2.md)
- [Mybank](docs/Model/Mybank.md)
- [MybankRequest](docs/Model/MybankRequest.md)
- [NOPAYMENTSOURCEPROVIDED](docs/Model/NOPAYMENTSOURCEPROVIDED.md)
- [NOTELIGIBLEFORPAYPALTRANSACTIONIDPROCESSING](docs/Model/NOTELIGIBLEFORPAYPALTRANSACTIONIDPROCESSING.md)
- [NOTELIGIBLEFORPNREFPROCESSING](docs/Model/NOTELIGIBLEFORPNREFPROCESSING.md)
- [NOTELIGIBLEFORTOKENPROCESSING](docs/Model/NOTELIGIBLEFORTOKENPROCESSING.md)
- [NOTENABLEDFORAPPLEPAY](docs/Model/NOTENABLEDFORAPPLEPAY.md)
- [NOTENABLEDFORBANKPROCESSING](docs/Model/NOTENABLEDFORBANKPROCESSING.md)
- [NOTENABLEDFORCARDPROCESSING](docs/Model/NOTENABLEDFORCARDPROCESSING.md)
- [NOTENABLEDFORCARDPROCESSING1](docs/Model/NOTENABLEDFORCARDPROCESSING1.md)
- [NOTENABLEDFORGOOGLEPAY](docs/Model/NOTENABLEDFORGOOGLEPAY.md)
- [NOTENABLEDTOVAULTPAYMENTSOURCE](docs/Model/NOTENABLEDTOVAULTPAYMENTSOURCE.md)
- [NOTPATCHABLE](docs/Model/NOTPATCHABLE.md)
- [NOTSUPPORTED](docs/Model/NOTSUPPORTED.md)
- [Name](docs/Model/Name.md)
- [Name2](docs/Model/Name2.md)
- [NetAmountBreakdownItem](docs/Model/NetAmountBreakdownItem.md)
- [NetworkTokenRequest](docs/Model/NetworkTokenRequest.md)
- [NetworkTransactionReference](docs/Model/NetworkTransactionReference.md)
- [ONEOFPARAMETERSREQUIRED](docs/Model/ONEOFPARAMETERSREQUIRED.md)
- [ONEOFTHEPARAMETERSREQUIRED](docs/Model/ONEOFTHEPARAMETERSREQUIRED.md)
- [ONLYONEBANKSOURCEALLOWED](docs/Model/ONLYONEBANKSOURCEALLOWED.md)
- [ONLYONEPAYMENTSOURCEALLOWED](docs/Model/ONLYONEPAYMENTSOURCEALLOWED.md)
- [ORDERALREADYAUTHORIZED](docs/Model/ORDERALREADYAUTHORIZED.md)
- [ORDERALREADYAUTHORIZED1](docs/Model/ORDERALREADYAUTHORIZED1.md)
- [ORDERALREADYCAPTURED](docs/Model/ORDERALREADYCAPTURED.md)
- [ORDERALREADYCAPTURED1](docs/Model/ORDERALREADYCAPTURED1.md)
- [ORDERALREADYCOMPLETED](docs/Model/ORDERALREADYCOMPLETED.md)
- [ORDERCANNOTBECONFIRMED](docs/Model/ORDERCANNOTBECONFIRMED.md)
- [ORDERCANNOTBESAVED](docs/Model/ORDERCANNOTBESAVED.md)
- [ORDERCOMPLETEDORVOIDED](docs/Model/ORDERCOMPLETEDORVOIDED.md)
- [ORDERCOMPLETEONPAYMENTAPPROVAL](docs/Model/ORDERCOMPLETEONPAYMENTAPPROVAL.md)
- [ORDERCOMPLETEONPAYMENTAPPROVAL1](docs/Model/ORDERCOMPLETEONPAYMENTAPPROVAL1.md)
- [ORDERCOMPLETIONINPROGRESS](docs/Model/ORDERCOMPLETIONINPROGRESS.md)
- [ORDEREXPIRED](docs/Model/ORDEREXPIRED.md)
- [ORDERISPENDINGAPPROVAL](docs/Model/ORDERISPENDINGAPPROVAL.md)
- [ORDERNOTAPPROVED](docs/Model/ORDERNOTAPPROVED.md)
- [ORDERNOTAPPROVED1](docs/Model/ORDERNOTAPPROVED1.md)
- [Order](docs/Model/Order.md)
- [OrderAllOf](docs/Model/OrderAllOf.md)
- [OrderApplicationContext](docs/Model/OrderApplicationContext.md)
- [OrderAuthorizeRequest](docs/Model/OrderAuthorizeRequest.md)
- [OrderAuthorizeResponse](docs/Model/OrderAuthorizeResponse.md)
- [OrderCaptureRequest](docs/Model/OrderCaptureRequest.md)
- [OrderConfirmApplicationContext](docs/Model/OrderConfirmApplicationContext.md)
- [OrderRequest](docs/Model/OrderRequest.md)
- [OrderStatus](docs/Model/OrderStatus.md)
- [OrderTrackerRequest](docs/Model/OrderTrackerRequest.md)
- [OrderTrackerRequestAllOf](docs/Model/OrderTrackerRequestAllOf.md)
- [OrdersAuthorize400](docs/Model/OrdersAuthorize400.md)
- [OrdersAuthorize400IssuesInner](docs/Model/OrdersAuthorize400IssuesInner.md)
- [OrdersAuthorize400Response](docs/Model/OrdersAuthorize400Response.md)
- [OrdersAuthorize403](docs/Model/OrdersAuthorize403.md)
- [OrdersAuthorize403IssuesInner](docs/Model/OrdersAuthorize403IssuesInner.md)
- [OrdersAuthorize403Response](docs/Model/OrdersAuthorize403Response.md)
- [OrdersAuthorize422](docs/Model/OrdersAuthorize422.md)
- [OrdersAuthorize422IssuesInner](docs/Model/OrdersAuthorize422IssuesInner.md)
- [OrdersAuthorize422Response](docs/Model/OrdersAuthorize422Response.md)
- [OrdersCapture400](docs/Model/OrdersCapture400.md)
- [OrdersCapture400IssuesInner](docs/Model/OrdersCapture400IssuesInner.md)
- [OrdersCapture400Response](docs/Model/OrdersCapture400Response.md)
- [OrdersCapture403](docs/Model/OrdersCapture403.md)
- [OrdersCapture403IssuesInner](docs/Model/OrdersCapture403IssuesInner.md)
- [OrdersCapture403Response](docs/Model/OrdersCapture403Response.md)
- [OrdersCapture422](docs/Model/OrdersCapture422.md)
- [OrdersCapture422IssuesInner](docs/Model/OrdersCapture422IssuesInner.md)
- [OrdersCapture422Response](docs/Model/OrdersCapture422Response.md)
- [OrdersConfirm400](docs/Model/OrdersConfirm400.md)
- [OrdersConfirm400IssuesInner](docs/Model/OrdersConfirm400IssuesInner.md)
- [OrdersConfirm400Response](docs/Model/OrdersConfirm400Response.md)
- [OrdersConfirm403Response](docs/Model/OrdersConfirm403Response.md)
- [OrdersConfirm422](docs/Model/OrdersConfirm422.md)
- [OrdersConfirm422IssuesInner](docs/Model/OrdersConfirm422IssuesInner.md)
- [OrdersConfirm422Response](docs/Model/OrdersConfirm422Response.md)
- [OrdersCreate400Response](docs/Model/OrdersCreate400Response.md)
- [OrdersCreate401Response](docs/Model/OrdersCreate401Response.md)
- [OrdersCreate422Response](docs/Model/OrdersCreate422Response.md)
- [OrdersGet404Response](docs/Model/OrdersGet404Response.md)
- [OrdersPatch400](docs/Model/OrdersPatch400.md)
- [OrdersPatch400IssuesInner](docs/Model/OrdersPatch400IssuesInner.md)
- [OrdersPatch400Response](docs/Model/OrdersPatch400Response.md)
- [OrdersPatch422](docs/Model/OrdersPatch422.md)
- [OrdersPatch422IssuesInner](docs/Model/OrdersPatch422IssuesInner.md)
- [OrdersPatch422Response](docs/Model/OrdersPatch422Response.md)
- [OrdersTrackCreate400](docs/Model/OrdersTrackCreate400.md)
- [OrdersTrackCreate400IssuesInner](docs/Model/OrdersTrackCreate400IssuesInner.md)
- [OrdersTrackCreate400Response](docs/Model/OrdersTrackCreate400Response.md)
- [OrdersTrackCreate403](docs/Model/OrdersTrackCreate403.md)
- [OrdersTrackCreate403IssuesInner](docs/Model/OrdersTrackCreate403IssuesInner.md)
- [OrdersTrackCreate403Response](docs/Model/OrdersTrackCreate403Response.md)
- [OrdersTrackCreate422](docs/Model/OrdersTrackCreate422.md)
- [OrdersTrackCreate422IssuesInner](docs/Model/OrdersTrackCreate422IssuesInner.md)
- [OrdersTrackCreate422Response](docs/Model/OrdersTrackCreate422Response.md)
- [OrdersTrackersPatch400](docs/Model/OrdersTrackersPatch400.md)
- [OrdersTrackersPatch400IssuesInner](docs/Model/OrdersTrackersPatch400IssuesInner.md)
- [OrdersTrackersPatch400Response](docs/Model/OrdersTrackersPatch400Response.md)
- [OrdersTrackersPatch403](docs/Model/OrdersTrackersPatch403.md)
- [OrdersTrackersPatch403Response](docs/Model/OrdersTrackersPatch403Response.md)
- [OrdersTrackersPatch404](docs/Model/OrdersTrackersPatch404.md)
- [OrdersTrackersPatch404IssuesInner](docs/Model/OrdersTrackersPatch404IssuesInner.md)
- [OrdersTrackersPatch404Response](docs/Model/OrdersTrackersPatch404Response.md)
- [OrdersTrackersPatch422](docs/Model/OrdersTrackersPatch422.md)
- [OrdersTrackersPatch422IssuesInner](docs/Model/OrdersTrackersPatch422IssuesInner.md)
- [OrdersTrackersPatch422Response](docs/Model/OrdersTrackersPatch422Response.md)
- [P24](docs/Model/P24.md)
- [P24Request](docs/Model/P24Request.md)
- [PATCHPATHREQUIRED](docs/Model/PATCHPATHREQUIRED.md)
- [PATCHPATHREQUIRED1](docs/Model/PATCHPATHREQUIRED1.md)
- [PATCHVALUEREQUIRED](docs/Model/PATCHVALUEREQUIRED.md)
- [PATCHVALUEREQUIRED1](docs/Model/PATCHVALUEREQUIRED1.md)
- [PAYEEACCOUNTINVALID](docs/Model/PAYEEACCOUNTINVALID.md)
- [PAYEEACCOUNTLOCKEDORCLOSED](docs/Model/PAYEEACCOUNTLOCKEDORCLOSED.md)
- [PAYEEACCOUNTNOTVERIFIED](docs/Model/PAYEEACCOUNTNOTVERIFIED.md)
- [PAYEEACCOUNTRESTRICTED](docs/Model/PAYEEACCOUNTRESTRICTED.md)
- [PAYEEBLOCKEDTRANSACTION](docs/Model/PAYEEBLOCKEDTRANSACTION.md)
- [PAYEECOUNTRYNOTSUPPORTEDFORPAYMENTSOURCE](docs/Model/PAYEECOUNTRYNOTSUPPORTEDFORPAYMENTSOURCE.md)
- [PAYEEFXRATEIDCURRENCYMISMATCH](docs/Model/PAYEEFXRATEIDCURRENCYMISMATCH.md)
- [PAYEEFXRATEIDEXPIRED](docs/Model/PAYEEFXRATEIDEXPIRED.md)
- [PAYEENOTENABLEDFORBANKPROCESSING](docs/Model/PAYEENOTENABLEDFORBANKPROCESSING.md)
- [PAYEENOTENABLEDFORCARDPROCESSING](docs/Model/PAYEENOTENABLEDFORCARDPROCESSING.md)
- [PAYEEPRICINGTIERIDNOTENABLED](docs/Model/PAYEEPRICINGTIERIDNOTENABLED.md)
- [PAYERACCOUNTLOCKEDORCLOSED](docs/Model/PAYERACCOUNTLOCKEDORCLOSED.md)
- [PAYERACCOUNTRESTRICTED](docs/Model/PAYERACCOUNTRESTRICTED.md)
- [PAYERACTIONREQUIRED](docs/Model/PAYERACTIONREQUIRED.md)
- [PAYERCANNOTPAY](docs/Model/PAYERCANNOTPAY.md)
- [PAYERCANNOTPAY1](docs/Model/PAYERCANNOTPAY1.md)
- [PAYMENTALREADYAPPROVED](docs/Model/PAYMENTALREADYAPPROVED.md)
- [PAYMENTSOURCECANNOTBEUSED](docs/Model/PAYMENTSOURCECANNOTBEUSED.md)
- [PAYMENTSOURCEDECLINEDBYPROCESSOR](docs/Model/PAYMENTSOURCEDECLINEDBYPROCESSOR.md)
- [PAYMENTSOURCEINFOCANNOTBEVERIFIED](docs/Model/PAYMENTSOURCEINFOCANNOTBEVERIFIED.md)
- [PAYMENTSOURCEMISMATCH](docs/Model/PAYMENTSOURCEMISMATCH.md)
- [PAYMENTSOURCENOTSUPPORTED](docs/Model/PAYMENTSOURCENOTSUPPORTED.md)
- [PAYMENTTYPENOTSUPPORTEDFORINTENT](docs/Model/PAYMENTTYPENOTSUPPORTEDFORINTENT.md)
- [PAYPALREQUESTIDREQUIRED](docs/Model/PAYPALREQUESTIDREQUIRED.md)
- [PAYPALTRANSACTIONIDEXPIRED](docs/Model/PAYPALTRANSACTIONIDEXPIRED.md)
- [PAYPALTRANSACTIONIDNOTFOUND](docs/Model/PAYPALTRANSACTIONIDNOTFOUND.md)
- [PERMISSIONDENIED](docs/Model/PERMISSIONDENIED.md)
- [PERMISSIONDENIEDFORDONATIONITEMS](docs/Model/PERMISSIONDENIEDFORDONATIONITEMS.md)
- [PLATFORMFEEPAYEECANNOTBESAMEASPAYER](docs/Model/PLATFORMFEEPAYEECANNOTBESAMEASPAYER.md)
- [PLATFORMFEESNOTSUPPORTED](docs/Model/PLATFORMFEESNOTSUPPORTED.md)
- [PNREFEXPIRED](docs/Model/PNREFEXPIRED.md)
- [PNREFNOTFOUND](docs/Model/PNREFNOTFOUND.md)
- [POSTALCODEREQUIRED](docs/Model/POSTALCODEREQUIRED.md)
- [PREFERREDPAYMENTSOURCEMISMATCH](docs/Model/PREFERREDPAYMENTSOURCEMISMATCH.md)
- [PREFERREDSHIPPINGOPTIONAMOUNTMISMATCH](docs/Model/PREFERREDSHIPPINGOPTIONAMOUNTMISMATCH.md)
- [PREVIOUSTRANSACTIONREFERENCEHASCHARGEBACK](docs/Model/PREVIOUSTRANSACTIONREFERENCEHASCHARGEBACK.md)
- [PREVIOUSTRANSACTIONREFERENCEVOIDED](docs/Model/PREVIOUSTRANSACTIONREFERENCEVOIDED.md)
- [ParesStatus](docs/Model/ParesStatus.md)
- [Patch](docs/Model/Patch.md)
- [Payee](docs/Model/Payee.md)
- [PayeeBase](docs/Model/PayeeBase.md)
- [PayeePaymentMethodPreference](docs/Model/PayeePaymentMethodPreference.md)
- [Payer](docs/Model/Payer.md)
- [PayerAllOf](docs/Model/PayerAllOf.md)
- [PayerBase](docs/Model/PayerBase.md)
- [PaymentCollection](docs/Model/PaymentCollection.md)
- [PaymentInitiator](docs/Model/PaymentInitiator.md)
- [PaymentInstruction](docs/Model/PaymentInstruction.md)
- [PaymentMethod](docs/Model/PaymentMethod.md)
- [PaymentSource](docs/Model/PaymentSource.md)
- [PaymentSourceResponse](docs/Model/PaymentSourceResponse.md)
- [PaypalWallet](docs/Model/PaypalWallet.md)
- [PaypalWalletAttributes](docs/Model/PaypalWalletAttributes.md)
- [PaypalWalletAttributesResponse](docs/Model/PaypalWalletAttributesResponse.md)
- [PaypalWalletExperienceContext](docs/Model/PaypalWalletExperienceContext.md)
- [PaypalWalletResponse](docs/Model/PaypalWalletResponse.md)
- [Phone](docs/Model/Phone.md)
- [Phone2](docs/Model/Phone2.md)
- [PhoneType](docs/Model/PhoneType.md)
- [PhoneType2](docs/Model/PhoneType2.md)
- [PhoneWithType](docs/Model/PhoneWithType.md)
- [PlatformFee](docs/Model/PlatformFee.md)
- [ProcessingInstruction](docs/Model/ProcessingInstruction.md)
- [ProcessorResponse](docs/Model/ProcessorResponse.md)
- [PurchaseUnit](docs/Model/PurchaseUnit.md)
- [PurchaseUnitRequest](docs/Model/PurchaseUnitRequest.md)
- [REDIRECTPAYERFORALTERNATEFUNDING](docs/Model/REDIRECTPAYERFORALTERNATEFUNDING.md)
- [REFERENCEDCARDEXPIRED](docs/Model/REFERENCEDCARDEXPIRED.md)
- [REFERENCEIDNOTFOUND](docs/Model/REFERENCEIDNOTFOUND.md)
- [REFERENCEIDREQUIRED](docs/Model/REFERENCEIDREQUIRED.md)
- [REQUIREDPARAMETERFORCUSTOMERINITIATEDPAYMENT](docs/Model/REQUIREDPARAMETERFORCUSTOMERINITIATEDPAYMENT.md)
- [REQUIREDPARAMETERFORPAYMENTSOURCE](docs/Model/REQUIREDPARAMETERFORPAYMENTSOURCE.md)
- [RETURNURLREQUIRED](docs/Model/RETURNURLREQUIRED.md)
- [Refund](docs/Model/Refund.md)
- [RefundAllOf](docs/Model/RefundAllOf.md)
- [RefundStatus](docs/Model/RefundStatus.md)
- [RefundStatusDetails](docs/Model/RefundStatusDetails.md)
- [SAVEORDERNOTSUPPORTED](docs/Model/SAVEORDERNOTSUPPORTED.md)
- [SETUPERRORFORBANK](docs/Model/SETUPERRORFORBANK.md)
- [SHIPPINGADDRESSINVALID](docs/Model/SHIPPINGADDRESSINVALID.md)
- [SHIPPINGOPTIONNOTSELECTED](docs/Model/SHIPPINGOPTIONNOTSELECTED.md)
- [SHIPPINGOPTIONSNOTSUPPORTED](docs/Model/SHIPPINGOPTIONSNOTSUPPORTED.md)
- [SHIPPINGOPTIONSNOTSUPPORTED1](docs/Model/SHIPPINGOPTIONSNOTSUPPORTED1.md)
- [SHIPPINGTYPENOTSUPPORTEDFORCLIENT](docs/Model/SHIPPINGTYPENOTSUPPORTEDFORCLIENT.md)
- [SellerProtection](docs/Model/SellerProtection.md)
- [SellerReceivableBreakdown](docs/Model/SellerReceivableBreakdown.md)
- [ShipmentCarrier](docs/Model/ShipmentCarrier.md)
- [ShipmentTracker](docs/Model/ShipmentTracker.md)
- [ShipmentTrackingNumberType](docs/Model/ShipmentTrackingNumberType.md)
- [ShipmentTrackingStatus](docs/Model/ShipmentTrackingStatus.md)
- [ShippingDetail](docs/Model/ShippingDetail.md)
- [ShippingOption](docs/Model/ShippingOption.md)
- [ShippingType](docs/Model/ShippingType.md)
- [ShippingWithTrackingDetails](docs/Model/ShippingWithTrackingDetails.md)
- [ShippingWithTrackingDetailsAllOf](docs/Model/ShippingWithTrackingDetailsAllOf.md)
- [Sofort](docs/Model/Sofort.md)
- [SofortRequest](docs/Model/SofortRequest.md)
- [StoreInVaultInstruction](docs/Model/StoreInVaultInstruction.md)
- [StoredPaymentSource](docs/Model/StoredPaymentSource.md)
- [StoredPaymentSourcePaymentType](docs/Model/StoredPaymentSourcePaymentType.md)
- [StoredPaymentSourceUsageType](docs/Model/StoredPaymentSourceUsageType.md)
- [SupplementaryData](docs/Model/SupplementaryData.md)
- [TAXTOTALMISMATCH](docs/Model/TAXTOTALMISMATCH.md)
- [TAXTOTALREQUIRED](docs/Model/TAXTOTALREQUIRED.md)
- [TOKENEXPIRED](docs/Model/TOKENEXPIRED.md)
- [TOKENIDNOTFOUND](docs/Model/TOKENIDNOTFOUND.md)
- [TRACKERIDNOTFOUND](docs/Model/TRACKERIDNOTFOUND.md)
- [TRANSACTIONBLOCKEDBYPAYEE](docs/Model/TRANSACTIONBLOCKEDBYPAYEE.md)
- [TRANSACTIONLIMITEXCEEDED](docs/Model/TRANSACTIONLIMITEXCEEDED.md)
- [TRANSACTIONRECEIVINGLIMITEXCEEDED](docs/Model/TRANSACTIONRECEIVINGLIMITEXCEEDED.md)
- [TRANSACTIONREFUSED](docs/Model/TRANSACTIONREFUSED.md)
- [TaxInfo](docs/Model/TaxInfo.md)
- [ThreeDSecureAuthenticationResponse](docs/Model/ThreeDSecureAuthenticationResponse.md)
- [Token](docs/Model/Token.md)
- [Tracker](docs/Model/Tracker.md)
- [TrackerAllOf](docs/Model/TrackerAllOf.md)
- [TrackerItem](docs/Model/TrackerItem.md)
- [Trustly](docs/Model/Trustly.md)
- [TrustlyRequest](docs/Model/TrustlyRequest.md)
- [UNSUPPORTEDINTENT](docs/Model/UNSUPPORTEDINTENT.md)
- [UNSUPPORTEDINTENTFORPAYMENTSOURCE](docs/Model/UNSUPPORTEDINTENTFORPAYMENTSOURCE.md)
- [UNSUPPORTEDPATCHPARAMETERVALUE](docs/Model/UNSUPPORTEDPATCHPARAMETERVALUE.md)
- [UNSUPPORTEDPAYMENTINSTRUCTION](docs/Model/UNSUPPORTEDPAYMENTINSTRUCTION.md)
- [UNSUPPORTEDPROCESSINGINSTRUCTION](docs/Model/UNSUPPORTEDPROCESSINGINSTRUCTION.md)
- [UNSUPPORTEDSHIPPINGTYPE](docs/Model/UNSUPPORTEDSHIPPINGTYPE.md)
- [V3VaultInstructionBase](docs/Model/V3VaultInstructionBase.md)
- [VAULTINSTRUCTIONDUPLICATED](docs/Model/VAULTINSTRUCTIONDUPLICATED.md)
- [VAULTINSTRUCTIONREQUIRED](docs/Model/VAULTINSTRUCTIONREQUIRED.md)
- [VaultInstructionBase](docs/Model/VaultInstructionBase.md)
- [VaultPaypalWalletBase](docs/Model/VaultPaypalWalletBase.md)
- [VaultPaypalWalletBaseAllOf](docs/Model/VaultPaypalWalletBaseAllOf.md)
- [VaultResponse](docs/Model/VaultResponse.md)
- [VaultVenmoWalletBase](docs/Model/VaultVenmoWalletBase.md)
- [VaultVenmoWalletBaseAllOf](docs/Model/VaultVenmoWalletBaseAllOf.md)
- [VenmoWalletAttributes](docs/Model/VenmoWalletAttributes.md)
- [VenmoWalletAttributesResponse](docs/Model/VenmoWalletAttributesResponse.md)
- [VenmoWalletExperienceContext](docs/Model/VenmoWalletExperienceContext.md)
- [VenmoWalletRequest](docs/Model/VenmoWalletRequest.md)
- [VenmoWalletResponse](docs/Model/VenmoWalletResponse.md)

## Authorization

Authentication schemes defined for the API:
### Oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **https://uri.paypal.com/services/payments/payment**: Manage payments and checkout workflow.
    - **https://uri.paypal.com/services/payments/payment/reference-transaction**: Permission to initiate reference transaction
    - **https://uri.paypal.com/services/payments/initiatepayment**: Initiates payments and checkout workflows.
    - **https://uri.paypal.com/services/payments/orders/client-side-integration**: Allows client-side integration on Create, Get, Patch, Authorize & Capture Order endpoints.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.13`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
