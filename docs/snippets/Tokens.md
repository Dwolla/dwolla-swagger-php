# High-Level Examples (Tokens)
Source Code: [`TokensApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/TokensApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Create Access Token

```php
<?php
$tokensApi = new DwollaSwagger\TokensApi($apiClient);
$appToken = $tokensApi->token();
?>
```
