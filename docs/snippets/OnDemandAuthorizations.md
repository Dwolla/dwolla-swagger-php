# High-Level Examples (On-Demand Authorizations)

Source Code: [`OndemandauthorizationsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/OndemandauthorizationsApi.php)

## Create an On-Demand Authorization ([API Reference](https://developers.dwolla.com/api-reference/transfers/create-an-on-demand-transfer-authorization))

```php
$onDemandApi = new DwollaSwagger\OndemandauthorizationsApi($apiClient);
$onDemandAuth = $onDemandApi->createAuthorization();
$onDemandAuth->_links["self"]->href; # => "https://api-sandbox.dwolla.com/on-demand-authorizations/30e7c028-0bdf-e511-80de-0aa34a9b2388"
```
