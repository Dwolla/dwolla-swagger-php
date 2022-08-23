# High-Level Examples (Webhook Subscriptions)

Source Code: [`WebhooksubscriptionsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/WebhooksubscriptionsApi.php)

## Create a Webhook Subscription ([API Reference](https://developers.dwolla.com/api-reference/webhook-subscriptions/create))

```php
$webhookApi = new DwollaSwagger\WebhooksubscriptionsApi($apiClient);
$subscription = $webhookApi->create(array (
  "url" => "http://myapplication.com/webhooks",
  "secret" => "sshhhhhh",
));
$subscription; # => "https://api-sandbox.dwolla.com/webhook-subscriptions/5af4c10a-f6de-4ac8-840d-42cb65454216"
```

## Retrieve a Webhook Subscription ([API Reference](https://developers.dwolla.com/api-reference/webhook-subscriptions/retrieve))

```php
$webhookApi = new DwollaSwagger\WebhooksubscriptionsApi($apiClient);
$retrieved = $webhookApi->id("https://api-sandbox.dwolla.com/webhook-subscriptions/5af4c10a-f6de-4ac8-840d-42cb65454216");
$retrieved->created; # => 2015-10-28T16:20:47+00:00
```
