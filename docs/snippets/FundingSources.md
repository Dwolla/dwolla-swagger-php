# High-Level Examples (Funding Sources)

Source Code: [`FundingsourcesApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/FundingsourcesApi.php)

## List Funding Sources for a Customer ([API Reference](https://developers.dwolla.com/api-reference/funding-sources/list-funding-sources-for-a-customer))

```php
$customerUrl = "https://api-sandbox.dwolla.com/customers/5b29279d-6359-4c87-a318-e09095532733";
$fsApi = new DwollaSwagger\FundingsourcesApi($apiClient);

$fundingSources = $fsApi->getCustomerFundingSources($customerUrl);
$fundingSources->_embedded->{"funding-sources"}[0]->name; # => "Jane Doe’s Checking"
```

## Create a Funding Sources for a Customer ([API Reference](https://developers.dwolla.com/api-reference/funding-sources/create-funding-source-for-customer))

```php
$customerUrl = "https://api-sandbox.dwolla.com/customers/AB443D36-3757-44C1-A1B4-29727FB3111C";
$fsApi = new DwollaSwagger\FundingsourcesApi($apiClient);

$fundingSource = $fsApi->createCustomerFundingSource([
  "routingNumber" => "222222226",
  "accountNumber" => "123456789",
  "bankAccountType" => "checking",
  "name" => "Jane Doe’s Checking"
], $customerUrl);
$fundingSource; # => "https://api-sandbox.dwolla.com/funding-sources/375c6781-2a17-476c-84f7-db7d2f6ffb31"
```

## Remove a Funding Source ([API Reference](https://developers.dwolla.com/api-reference/funding-sources/remove))

```php
$fundingSourceUrl = "https://api-sandbox.dwolla.com/funding-sources/62c88abb-96cb-4f1e-8ca9-7f45b5308d16";
$fsApi = new DwollaSwagger\FundingsourcesApi($apiClient);
$fsApi->softDelete(["removed" => true], $fundingSourceUrl);
```
