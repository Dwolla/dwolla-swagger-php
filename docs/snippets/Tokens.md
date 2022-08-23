# High-Level Examples (Tokens)

Source Code: [`TokensApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/TokensApi.php)

## Create Access Token ([API Reference](https://developers.dwolla.com/api-reference/authorization/application-authorization))

```php
$tokensApi = new DwollaSwagger\TokensApi($apiClient);
$appToken = $tokensApi->token();
```
