# High-Level Examples (Business Classifications)

Source Code: [`BusinessClassificationsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/BusinessclassificationsApi.php)

## Retrieve a List of All Business Classifications ([API Reference](https://developers.dwolla.com/api-reference/customers/list-business-classifications))

```php
$businessClassificationsApi = new DwollaSwagger\BusinessclassificationsApi($apiClient);
$classifications = $businessClassificationsApi->_list();
```
