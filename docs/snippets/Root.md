# High-Level Examples (Root)
Source Code: [`RootApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/RootApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Retrieve the Root

```php
<?php
$rootApi = new DwollaSwagger\RootApi($apiClient);

$root = $rootApi->root();
$accountUrl = $root->_links["account"]->href; # => "https://api-sandbox.dwolla.com/accounts/ad5f2162-404a-4c4c-994e-6ab6c3a13254"
?>
```
