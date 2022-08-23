# High-Level Examples (Events)

Source Code: [`EventsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/EventsApi.php)

## List All Events ([API Reference](https://developers.dwolla.com/api-reference/events/list))

```php
$eventsApi = new DwollaSwagger\EventsApi($apiClient);
$events = $eventsApi->events();
$events->total; # => 3
```
