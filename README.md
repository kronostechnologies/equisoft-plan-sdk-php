# EquisoftPlan SDK

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/kronostechnologies/equisoft-plan-sdk-php.git"
    }
  ],
  "require": {
    "kronostechnologies/equisoft-plan-sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/EquisoftPlan SDK/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommandApi* | [**cmdCopyFNA**](docs/Api/CommandApi.md#cmdcopyfna) | **POST** /fna/api/v2/cmd/copy/fna | 
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /fna/api/v2/organizations/{id} | 
*OrganizationsApi* | [**listOrganizationUsers**](docs/Api/OrganizationsApi.md#listorganizationusers) | **GET** /fna/api/v2/organizations/{id}/users | 
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /fna/api/v2/organizations | 
*PlansV1Api* | [**getPlan**](docs/Api/PlansV1Api.md#getplan) | **GET** /fna/api/fna/{id} | Returns the plan
*PlansV1Api* | [**updatePlanExternalId**](docs/Api/PlansV1Api.md#updateplanexternalid) | **PUT** /fna/{fna-uuid}/client/{client-uuid}/external-id | Update client UUID id of an FNA
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /fna/api/v2/users/{id} | 

## Models

- [CmdCopyFNA](docs/Model/CmdCopyFNA.md)
- [CmdCopyFNAResponse](docs/Model/CmdCopyFNAResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [OrganizationsListOrganizationsResponse](docs/Model/OrganizationsListOrganizationsResponse.md)
- [OrganizationsOrganization](docs/Model/OrganizationsOrganization.md)
- [UsersListUsersResponse](docs/Model/UsersListUsersResponse.md)
- [UsersUser](docs/Model/UsersUser.md)
- [V1ErrorResponse](docs/Model/V1ErrorResponse.md)
- [V1ErrorResponseData](docs/Model/V1ErrorResponseData.md)

## Authorization

### OAuth2

- **Type**: `OAuth`
- **Flow**: `implicit`
- **Authorization URL**: `https://secure.kronos-web.com/oauth/authorize`
- **Scopes**: 
    - **fna:fna**: Grants all access to plan/fna (deprecated)
    - **plan:plan**: Grants all access to plan/fna
    - **plan:plan:create**: Creation access on plan
    - **plan:organization**: Grants all access to plan/organizations
    - **plan:user**: Grants all access to plan/users

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `latest`
    - Package version: `6.52.3-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
