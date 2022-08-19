# High-Level Examples (Labels)
Source Code: [`LabelsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/LabelsApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Create a Label

```php
<?php
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$label = $customersApi->createLabel([
  'amount' => [
    'currency' => 'USD',
    'value' => '10.00'
  ]
], "https://api-sandbox.dwolla.com/customers/AB443D36-3757-44C1-A1B4-29727FB3111C");
$label; # => "https://api-sandbox.dwolla.com/labels/375c6781-2a17-476c-84f7-db7d2f6ffb31"
?>
```

## Retrieve a Label

```php
<?php
$labelUrl = "https://api-sandbox.dwolla.com/labels/7e042ffe-e25e-40d2-b86e-748b98845ecc";

$labelsApi = new DwollaSwagger\LabelsApi($apiClient);

$label = $labelsApi->getLabel($labelUrl);
$label->id; # => "7e042ffe-e25e-40d2-b86e-748b98845ecc"
?>
```
