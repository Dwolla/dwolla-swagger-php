# High-Level Examples (Masspaymentitems)
Source Code: [`MasspaymentitemsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/MasspaymentitemsApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## List Masspayment Items

```php
<?php
$massPaymentUrl = 'https://api-sandbox.dwolla.com/mass-payments/eb467252-808c-4bc0-b86f-a5cd01454563';

$massPaymentItemsApi = new DwollaSwagger\MasspaymentitemsApi($apiClient);

$massPaymentItems = $massPaymentItemsApi->getMassPaymentItems($massPaymentUrl);
$massPaymentItems->total; # => "2"
?>
```
