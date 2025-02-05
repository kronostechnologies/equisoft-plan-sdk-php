# EquisoftPlan SDK

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


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
*OrganizationsApi* | [**createOrganization**](docs/Api/OrganizationsApi.md#createorganization) | **POST** /fna/api/v2/organizations | 
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /fna/api/v2/organizations/{id} | 
*OrganizationsApi* | [**listOrganizationUsers**](docs/Api/OrganizationsApi.md#listorganizationusers) | **GET** /fna/api/v2/organizations/{id}/users | 
*OrganizationsApi* | [**listOrganizations**](docs/Api/OrganizationsApi.md#listorganizations) | **GET** /fna/api/v2/organizations | 
*PlansApi* | [**listPlans**](docs/Api/PlansApi.md#listplans) | **GET** /fna/api/v2/plans | 
*PlansV1Api* | [**getPlan**](docs/Api/PlansV1Api.md#getplan) | **GET** /fna/api/fna/{id} | Returns the plan
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /fna/api/v2/organizations/{id}/users | 
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /fna/api/v2/users/{id} | 
*UsersApi* | [**getUserContext**](docs/Api/UsersApi.md#getusercontext) | **GET** /fna/api/v2/userContext | 

## Models

- [CmdCopyFNA](docs/Model/CmdCopyFNA.md)
- [CmdCopyFNAResponse](docs/Model/CmdCopyFNAResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [OrganizationsCreateOrganizationPayload](docs/Model/OrganizationsCreateOrganizationPayload.md)
- [OrganizationsCreateOrganizationResponse](docs/Model/OrganizationsCreateOrganizationResponse.md)
- [OrganizationsListOrganizationsResponse](docs/Model/OrganizationsListOrganizationsResponse.md)
- [OrganizationsOrganization](docs/Model/OrganizationsOrganization.md)
- [PlansListPlansResponse](docs/Model/PlansListPlansResponse.md)
- [PlansPlan](docs/Model/PlansPlan.md)
- [UserCreateUserPayload](docs/Model/UserCreateUserPayload.md)
- [UserCreateUserResponse](docs/Model/UserCreateUserResponse.md)
- [UsersListUsersResponse](docs/Model/UsersListUsersResponse.md)
- [UsersUser](docs/Model/UsersUser.md)
- [UsersUserContext](docs/Model/UsersUserContext.md)
- [V1ErrorResponse](docs/Model/V1ErrorResponse.md)
- [V1ErrorResponseData](docs/Model/V1ErrorResponseData.md)

## Authorization

Authentication schemes defined for the API:
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
    - Package version: `dev-9.21.2`
    - Generator version: `7.7.0-equisoft2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
