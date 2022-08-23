# High-Level Examples (Mass Payment Item)

Source Code: [`MasspaymentitemsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/MasspaymentitemsApi.php)

## List Mass Payment Items ([API Reference](https://developers.dwolla.com/api-reference/mass-payments/list-items))

```php
$massPaymentUrl = "https://api-sandbox.dwolla.com/mass-payments/eb467252-808c-4bc0-b86f-a5cd01454563";
$massPaymentItemsApi = new DwollaSwagger\MasspaymentitemsApi($apiClient);

$massPaymentItems = $massPaymentItemsApi->getMassPaymentItems($massPaymentUrl);
$massPaymentItems->total; # => "2"
```
