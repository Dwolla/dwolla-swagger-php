# High-Level Examples (Ondemandauthorizations)
Source Code: [`OndemandauthorizationsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/OndemandauthorizationsApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Create an On-Demand Authorization

```php
<?php
$onDemandApi = new DwollaSwagger\OndemandauthorizationsApi($apiClient);

$onDemandAuth = $onDemandApi->createAuthorization();
$onDemandAuth->_links["self"]->href; # => "https://api-sandbox.dwolla.com/on-demand-authorizations/30e7c028-0bdf-e511-80de-0aa34a9b2388"
?>
```
