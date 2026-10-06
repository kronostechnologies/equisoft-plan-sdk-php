# Equisoft\SDK\EquisoftPlan\PlansApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listPlanPermissiones()**](PlansApi.md#listPlanPermissiones) | **GET** /fna/api/v2/plans/{planId}/permissions |  |
| [**listPlans()**](PlansApi.md#listPlans) | **GET** /fna/api/v2/plans |  |


## `listPlanPermissiones()`

```php
listPlanPermissiones($planId): \Equisoft\SDK\EquisoftPlan\Model\PlansPlanPermission[]
```



Lists the permissions of the users on the plan.

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
$planId = 56; // int | Identifier of the plan

try {
    $result = $apiInstance->listPlanPermissiones($planId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->listPlanPermissiones: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **planId** | **int**| Identifier of the plan | |

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\PlansPlanPermission[]**](../Model/PlansPlanPermission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **clientExternalUuid** | **string**|  | [optional] |

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
