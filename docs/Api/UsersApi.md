# Equisoft\SDK\EquisoftPlan\UsersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createUser()**](UsersApi.md#createUser) | **POST** /fna/api/v2/organizations/{id}/users |  |
| [**getUser()**](UsersApi.md#getUser) | **GET** /fna/api/v2/users/{id} |  |
| [**getUserContext()**](UsersApi.md#getUserContext) | **GET** /fna/api/v2/userContext |  |


## `createUser()`

```php
createUser($id, $userCreateUserPayload): \Equisoft\SDK\EquisoftPlan\Model\UserCreateUserResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$userCreateUserPayload = new \Equisoft\SDK\EquisoftPlan\Model\UserCreateUserPayload(); // \Equisoft\SDK\EquisoftPlan\Model\UserCreateUserPayload

try {
    $result = $apiInstance->createUser($id, $userCreateUserPayload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |
| **userCreateUserPayload** | [**\Equisoft\SDK\EquisoftPlan\Model\UserCreateUserPayload**](../Model/UserCreateUserPayload.md)|  | |

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\UserCreateUserResponse**](../Model/UserCreateUserResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUser()`

```php
getUser($id): \Equisoft\SDK\EquisoftPlan\Model\UsersUser
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->getUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**|  | |

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\UsersUser**](../Model/UsersUser.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserContext()`

```php
getUserContext(): \Equisoft\SDK\EquisoftPlan\Model\UsersUserContext
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Equisoft\SDK\EquisoftPlan\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Equisoft\SDK\EquisoftPlan\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserContext();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserContext: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Equisoft\SDK\EquisoftPlan\Model\UsersUserContext**](../Model/UsersUserContext.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
