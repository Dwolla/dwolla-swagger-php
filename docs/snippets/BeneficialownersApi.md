# High-Level Examples (Business Classifications)
Source Code: [`BeneficialownersApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/BeneficialownersApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Retrieve a Beneficial Owner

```php
<?php
$beneficialownersApi = new DwollaSwagger\BeneficialownersApi($apiClient);
$bo = $beneficialownersApi->getById("707177c3-bf15-4e7e-b37c-55c3898d9bf4");
?>
```
