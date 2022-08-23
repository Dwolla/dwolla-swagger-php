# High-Level Examples (Sandbox)

Source Code: [`SandboxApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/SandboxApi.php)

## Run Sandbox Simulation for Bank Transfer Processing ([API Reference](https://developers.dwolla.com/guides/sandbox#simulate-bank-transfer-processing))

```php
$sandboxApi = new DwollaSwagger\SandboxApi($apiClient);
$simulation = $sandboxApi->simulations();
```
