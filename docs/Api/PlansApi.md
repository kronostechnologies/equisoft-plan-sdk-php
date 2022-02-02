# Equisoft\SDK\EquisoftPlan\PlansApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listPlans()**](PlansApi.md#listPlans) | **GET** /fna/api/v2/plans | 


## `listPlans()`

```php
listPlans($clientExternalUuid): \Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$clientExternalUuid = 'clientExternalUuid_example'; // string

try {
    $result = $apiInstance->listPlans($clientExternalUuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->listPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clientExternalUuid** | **string**|  | [optional]

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\PlansListPlansResponse**](../Model/PlansListPlansResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
