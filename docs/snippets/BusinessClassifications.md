# High-Level Examples (Business Classifications)
Source Code: [`BusinessclassificationsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/BusinessClassificationsApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Retrieve a List of All Business Classifications

```php
<?php
$businessClassificationsApi = new DwollaSwagger\BusinessclassificationsApi($apiClient);
$classiciations = $businessclassificationsApi->list;
?>
```
