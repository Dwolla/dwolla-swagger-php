# High-Level Examples (FundingSources)
Source Code: [`FundingSourcesApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/FundingSourcesApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## List Funding Sources for a Customer

```php
<?php
$customerUrl = 'https://api-sandbox.dwolla.com/customers/5b29279d-6359-4c87-a318-e09095532733';

$fsApi = new DwollaSwagger\FundingsourcesApi($apiClient);

$fundingSources = $fsApi->getCustomerFundingSources($customerUrl);
$fundingSources->_embedded->{'funding-sources'}[0]->name; # => "Jane Doe’s Checking"
?>
```

## Create a Funding Sources for a Customer

```php
<?php
$fundingApi = new DwollaSwagger\FundingsourcesApi($apiClient);

$fundingSource = $fundingApi->createCustomerFundingSource([
  "routingNumber" => "222222226",
  "accountNumber" => "123456789",
  "bankAccountType" => "checking",
  "name" => "Jane Doe’s Checking"
], "https://api-sandbox.dwolla.com/customers/AB443D36-3757-44C1-A1B4-29727FB3111C");
$fundingSource; # => "https://api-sandbox.dwolla.com/funding-sources/375c6781-2a17-476c-84f7-db7d2f6ffb31"
?>
```

## Remove a Funding Source

```php
<?php
$fundingSourceUrl = 'https://api-sandbox.dwolla.com/funding-sources/62c88abb-96cb-4f1e-8ca9-7f45b5308d16';

$fsApi = new DwollaSwagger\FundingsourcesApi($apiClient);

$fsApi->softDelete(['removed' => true ], $fundingSourceUrl);
?>
```


