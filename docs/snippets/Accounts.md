# High-Level Examples (Accounts)
Source Code: [`AccountsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/AccountsApi.php)

## Retrieve an Account by ID

```php
<?php
$accountsApi = new DwollaSwagger\AccountsApi($apiClient);
$account = $accountsApi->id("8a2cdc8d-629d-4a24-98ac-40b735229fe2");
?>
```
