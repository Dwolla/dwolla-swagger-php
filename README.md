# Dwolla SDK for PHP

This repository contains the source code for Dwolla's PHP-based SDK as generated by [this fork of swagger-codegen](https://github.com/mach-kernel/swagger-codegen), which allows developers to interact with Dwolla's server-side API via a PHP API. Any action that can be performed via an HTTP request can be made using this SDK when executed within a server-side environment.

**Note:** Temporary PHP 7.4 support was added using these replacements:
- `\$this\->([a-z0-9\_]+) = \$data\["([a-z0-9\_]+)"\]\;` into `\$this->$1 = \$data\["$2"\] ?? null;`


## Table of Contents

- [Getting Started](#getting-started)
  - [Installation](#installation)
  - [Initialization](#initialization)
    - [Tokens](#tokens)
- [Making Requests](#making-requests)
  - [High-Level Requests](#high-level-requests)
    - [Setting Headers](#setting-headers)
- [Changelog](#changelog)
- [Community](#community)
- [Additional Resources](#additional-resources)
- [Credits](#credits)

## Getting Started

### Installation

To begin using this SDK, you will first need to download it to your machine. We use [Packagist](https://packagist.org/packages/dwolla/dwollaswagger) to distribute this package, which allows it to be downloaded via [Composer](https://getcomposer.org/).

```shell
$ composer require dwolla/dwollaswagger
$ composer install
```

To use, just `require` your Composer `autoload.php` file.
```php
require("../path/to/vendor/autoload.php");
```

### Initialization

Before any API requests can be made, you must first determine which environment you will be using, as well as fetch the application key and secret. To fetch your application key and secret, please visit one of the following links:

* Production: https://dashboard.dwolla.com/applications
* Sandbox: https://dashboard-sandbox.dwolla.com/applications

Finally, you can create an instance of `ApiClient` after configuring the `username` and `password` values as the application key and secret that you fetched from one of the aforementioned links, respectively.

```php
DwollaSwagger\Configuration::$username = "API_KEY";
DwollaSwagger\Configuration::$password = "API_SECRET";

# For Sandbox
$apiClient = new DwollaSwagger\ApiClient("https://api-sandbox.dwolla.com");

# For Production
$apiClient = new DwollaSwagger\ApiClient("https://api.dwolla.com");
```

#### Tokens

Application access tokens are used to authenticate against the API on behalf of an application. Application tokens can be used to access resources in the API that either belong to the application itself (`webhooks`, `events`, `webhook-subscriptions`) or the Dwolla Account that owns the application (`accounts`, `customers`, `funding-sources`, etc.). Application tokens are obtained by using the [`client_credentials`](https://tools.ietf.org/html/rfc6749#section-4.4) OAuth grant type:


```php
$tokensApi = new DwollaSwagger\TokensApi($apiClient);
$appToken = $tokensApi->token();
```

_Application access tokens are short-lived: 1 hour. They do not include a `refresh_token`. When it expires, generate a new one using `$tokensApi->token()`._

## Making Requests

The Dwolla client provides high-level methods for interacting with the Dwolla API.

### High-Level Requests

High-level methods make development easier by embedding information you would typically refer to [Dwolla's API reference](https://developers.dwolla.com/api-reference) for in the SDK itself, such as endpoints, request arguments, and response deserialization. `DwollaSwagger` contains the `API` module, which allows the user to make requests, as well as `models`, which are [data access objects](https://en.wikipedia.org/wiki/Data_access_object) that the library uses to deserialize responses.

Each model represents the different kinds of requests and responses that can be made with the Dwolla API. View the full list in the [`models` directory](https://github.com/Dwolla/dwolla-swagger-php/tree/master/lib/models).

The following API modules are available:

* [Accounts](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Accounts.md)
* [Beneficial Owners](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/BeneficialOwnersApi.md)
* [Business Classifications](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/BusinessClassifications.md)
* [Customers](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Customers.md)
* [Documents](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Documents.md)
* [Events](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Events.md)
* [Funding Sources](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/FundingSources.md)
* [Knowledge-Based Authentication (KBA)](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/KBAs.md)
* [Labels](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Labels.md)
* [Label Reallocations](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/LabelReallocations.md)
* [Ledger Entries](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/LedgerEntries.md)
* [Mass Payment Items](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/MassPaymentItems.md)
* [On-Demand Authorizations](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/OnDemandAuthorizations.md)
* [Root](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Root.md)
* [Sandbox](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Sandbox.md)
* [Tokens](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Tokens.md)
* [Transfers](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Transfers.md)
* [Webhooks](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/Webhooks.md)
* [Webhook Subscriptions](https://github.com/Dwolla/dwolla-swagger-php/blob/main/docs/snippets/WebhookSubscriptions.md)

#### Setting Headers

You can pass custom headers in your requests as per the schema of the API models. Here is an example of creating a Customer with an [Idempotency-Key](https://developers.dwolla.com/api-reference#idempotency-key) header.

```php
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$customer = $customersApi->create([
  "firstName" => "Jane",
  "lastName" => "Merchant",
  "email" => "jmerchant@nomail.net",
  "type" => "receive-only",
  "businessName" => "Jane Corp llc",
  "ipAddress" => "99.99.99.99"
], [
  "Idempotency-Key" => "51a62-3403-11e6-ac61-9e71128cae77"
]);
$customer; # => "https://api-sandbox.dwolla.com/customers/fc451a7a-ae30-4404-aB95-e3553fcd733f"
```

## Changelog

* [**1.7.1**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.7.1): Fix bug around on-demand authorizations not parsing Dwolla response correctly.
* [**1.7.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.7.0): New `getCustomerCardToken` method added to `CustomersAPI` for creating a card funding sources token for a customer.
* [**1.6.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.6.0): New `TokenApi` adding support for application access token and client token requests.
* [**1.5.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.5.0): API schema updated, `CustomersApi` updated to add support for `email` parameter on list customers.
* [**1.4.1**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.4.1): Fix bug in [#43](https://github.com/Dwolla/dwolla-swagger-php/pull/43) to replace null-coalesce operator with backwards-compatible ternary. 
* [**1.4.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.4.0): Add temporary support fix for PHP 7.4. [Issue #41](https://github.com/Dwolla/dwolla-swagger-php/issues/41). (Thanks, [@oprypkhantc](https://github.com/oprypkhantc)!)
* [**1.3.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.3.0): Add support for custom headers on all requests. (e.g. [Idempotency-Key](https://developers.dwolla.com/api-reference#idempotency-key) header)
* [**1.2.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.2.0): Add `KbaApi`. See GitHub Releases for more information.
* [**1.1.0**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.1.0): Add `LabelsApi`, `LabelreallocationsApi`, and `LedgerentriesApi`.
* [**1.0.20**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.20): Fix previously patched issue with parsing Location header in 201 response in ApiClient.
* [**1.0.19**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.19): Patch 201 response in ApiClient.
* [**1.0.18**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.18): Patch controller in CreateCustomer model.
* [**1.0.17**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.17): Update `CustomersApi` to update support beneficial owners. Update existing models.
* [**1.0.16**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.16): See GitHub Releases for more information.
* [**1.0.15**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.15): Optional parameters set to null.
* [**1.0.14**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.14): Trim trailing slash from host url on initialization.
* [**1.0.13**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.13): Add control over IPV4 and V6 connections.
* [**1.0.12**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.12): Update `CustomersApi` to allow for null `limit`, `offset`, and `search`.
* [**1.0.11**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.11): Allow pausing webhook subscription pause; Added support for `removed` funding source query params; and more.
* [**1.0.10**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.10): Patch soft delete to deserialize with FundingSource model.
* [**1.0.9**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.9): Add boolean type to fix deserialization
* [**1.0.8**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.8): Add balance check endpoint in `FundingSourcesApi`. Fix transfer failure deserialization in transfer model.
* [**1.0.7**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.7): API schema updated, `CustomersAPI` supports Customer search, new softDelete method in `FundingSourcesApi`.
* [**1.0.6**](https://github.com/Dwolla/dwolla-swagger-php/releases/tag/1.0.6): Update `TransfersApi` to include cancel and getting transfer fees. Added some new models and updated some existing models.
* **1.0.5**: API schema error fixed, `FundingSource` object now has `_embedded` key to fix serialization issues. Avoid using reserved PHP function names. `CustomersApi` gets endpoint for IAV verification. Added `VerificationToken` model.
* **1.0.3**: Added `RootApi`. Changed `auth_token` to `access_token` in compliance with [RFC-6749](https://tools.ietf.org/html/rfc6749) nomenclature.
* **1.0.2**: New methods added for `FundingsourcesApi`. More idiomatic response logic for HTTP 201 responses.
* **1.0.1**: API schema updated, new methods in `CustomersApi` and `TransfersApi`
* **1.0.0**: Initial release.

## Community

* If you have any feedback, please reach out to us on [our forums](https://discuss.dwolla.com/) or by [creating a GitHub issue](https://github.com/Dwolla/dwolla-swagger-php/issues/new).
* If you would like to contribute to this library, [bug reports](https://github.com/Dwolla/dwolla-swagger-php/issues) and [pull requests](https://github.com/Dwolla/dwolla-swagger-php/pulls) are always appreciated!

## Additional Resources

To learn more about Dwolla and how to integrate our product with your application, please consider visiting the following resources and becoming a member of our community!

* [Dwolla](https://www.dwolla.com/)
* [Dwolla Developers](https://developers.dwolla.com/)
* [SDKs and Tools](https://developers.dwolla.com/sdks-tools)
  * [Dwolla SDK for C#](https://github.com/Dwolla/dwolla-v2-csharp)
  * [Dwolla SDK for Kotlin](https://github.com/Dwolla/dwolla-v2-kotlin)
  * [Dwolla SDK for Node](https://github.com/Dwolla/dwolla-v2-node)
  * [Dwolla SDK for Python](https://github.com/Dwolla/dwolla-swagger-python)
  * [Dwolla SDK for Ruby](https://github.com/Dwolla/dwolla-v2-ruby)
* [Developer Support Forum](https://discuss.dwolla.com/)

## Credits

This wrapper is semantically generated by a fork of [swagger-codegen](http://github.com/mach-kernel/swagger-codegen).
 - [swagger-codegen contributors](https://github.com/swagger-api/swagger-codegen/network/members)
 - [David Stancu](http://github.com/mach-kernel)
