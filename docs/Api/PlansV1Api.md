# Equisoft\SDK\EquisoftPlan\PlansV1Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPlan()**](PlansV1Api.md#getPlan) | **GET** /fna/api/fna/{id} | Returns the plan |


## `getPlan()`

```php
getPlan($id)
```

Returns the plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\PlansV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Fna id

try {
    $apiInstance->getPlan($id);
} catch (Exception $e) {
    echo 'Exception when calling PlansV1Api->getPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Fna id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
