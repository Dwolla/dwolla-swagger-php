# High-Level Examples (Webhooks)
Source Code: [`WebhooksApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/WebhooksApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Retrieve a Webhook

```php
<?php
$webhookUrl = 'https://api-sandbox.dwolla.com/webhooks/9ece9660-aa34-41eb-80d7-0125d53b45e8';

$webhooksApi = new DwollaSwagger\WebhooksApi($apiClient);

$webhook = $webhooksApi->id($webhookUrl);
$webhook->topic; # => "transfer_created"
?>
```

## Retry a Webhook

```php
<?php
$webhookUrl = 'https://api-sandbox.dwolla.com/webhooks/9ece9660-aa34-41eb-80d7-0125d53b45e8';

$webhooksApi = new DwollaSwagger\WebhooksApi($apiClient);

$webhooksApi->retryWebhook($webhookUrl);
?>
```

## List Retries for a Webhook

```php
<?php
$webhookUrl = 'https://api-sandbox.dwolla.com/webhooks/9ece9660-aa34-41eb-80d7-0125d53b45e8';

$webhooksApi = new DwollaSwagger\WebhooksApi($apiClient);

$retries = $webhooksApi->retriesById($webhookUrl);
$retries->total; # => 1
?>
```
