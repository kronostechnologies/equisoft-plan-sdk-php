# Equisoft\SDK\EquisoftPlan\CommandApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cmdCopyFNA()**](CommandApi.md#cmdCopyFNA) | **POST** /fna/api/v2/cmd/copy/fna |  |


## `cmdCopyFNA()`

```php
cmdCopyFNA($cmdCopyFNA): \Equisoft\SDK\EquisoftPlan\Model\CmdCopyFNAResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\CommandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cmdCopyFNA = new \Equisoft\SDK\EquisoftPlan\Model\CmdCopyFNA(); // \Equisoft\SDK\EquisoftPlan\Model\CmdCopyFNA

try {
    $result = $apiInstance->cmdCopyFNA($cmdCopyFNA);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommandApi->cmdCopyFNA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cmdCopyFNA** | [**\Equisoft\SDK\EquisoftPlan\Model\CmdCopyFNA**](../Model/CmdCopyFNA.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\CmdCopyFNAResponse**](../Model/CmdCopyFNAResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
