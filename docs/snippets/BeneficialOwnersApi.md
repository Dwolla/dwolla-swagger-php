# High-Level Examples (Beneficial Owners)

Source Code: [`BeneficialOwnersApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/BeneficialownersApi.php)

## Retrieve a Beneficial Owner ([API Reference](https://developers.dwolla.com/api-reference/beneficial-owners/retrieve))

```php
$beneficialOwnersApi = new DwollaSwagger\BeneficialownersApi($apiClient);
$beneficialOwner = $beneficialOwnersApi->getById("707177c3-bf15-4e7e-b37c-55c3898d9bf4");
```
