# High-Level Examples (Sandbox)
Source Code: [`SandboxApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/SandboxApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Run Sandbox Simulation for Bank Transfer Processing

```php
<?php
$sandboxApi = new DwollaSwagger\SandboxApi($apiClient);

$simulation = $sandboxApi->simulations();
?>
```
