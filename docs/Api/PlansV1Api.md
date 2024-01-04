# Equisoft\SDK\EquisoftPlan\PlansV1Api

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPlan()**](PlansV1Api.md#getPlan) | **GET** /fna/api/fna/{id} | Returns the plan |
| [**updatePlanExternalId()**](PlansV1Api.md#updatePlanExternalId) | **PUT** /fna/{fna-uuid}/client/{client-uuid}/external-id | Update client UUID id of an FNA |


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

## `updatePlanExternalId()`

```php
updatePlanExternalId($fnaUuid, $clientUuid, $body)
```

Update client UUID id of an FNA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\PlansV1Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fnaUuid = 8a135829-0d9a-4104-9a95-1fe2871cb82f; // string | UUID of the FNA
$clientUuid = ca59ed78-b35b-4390-98f9-309d421e5bb0; // string | UUID of the client to update
$body = 99048189-1b66-428f-9a0b-e0996c959f72; // string | New UUID of the client

try {
    $apiInstance->updatePlanExternalId($fnaUuid, $clientUuid, $body);
} catch (Exception $e) {
    echo 'Exception when calling PlansV1Api->updatePlanExternalId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fnaUuid** | **string**| UUID of the FNA | |
| **clientUuid** | **string**| UUID of the client to update | |
| **body** | **string**| New UUID of the client | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
