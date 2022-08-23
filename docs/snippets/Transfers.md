# High-Level Examples (Transfers)

Source Code: [`TransfersApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/TransfersApi.php)

## Create a Transfer ([API Reference](https://developers.dwolla.com/api-reference/transfers/initiate))

```php
$transfersApi = new DwollaSwagger\TransfersApi($apiClient);

$transfer = $transfersApi->create([
  "_links" => [
    "source" => [
      "href" => "https://api-sandbox.dwolla.com/funding-sources/707177c3-bf15-4e7e-b37c-55c3898d9bf4",
    ],
    "destination" => [
      "href" => "https://api-sandbox.dwolla.com/funding-sources/AB443D36-3757-44C1-A1B4-29727FB3111C"
    ]
  ],
  "amount" => [
    "currency" => "USD",
    "value" => "1.00"
  ],
  "metadata" => [
    "paymentId" => "12345678",
    "note" => "payment for completed work Dec. 1",
  ],
  "clearing" => [
    "destination" => "next-available"
  ],
  "correlationId" => "8a2cdc8d-629d-4a24-98ac-40b735229fe2"
]);
$transfer; # => "https://api-sandbox.dwolla.com/transfers/74c9129b-d14a-e511-80da-0aa34a9b2388"
```

## Retrieve a Transfer ([API Reference](https://developers.dwolla.com/api-reference/transfers/retrieve))

```php
$transferUrl = 'https://api-sandbox.dwolla.com/transfers/15c6bcce-46f7-e811-8112-e8dd3bececa8';
$transfersApi = new DwollaSwagger\TransfersApi($apiClient);

$transfer = $transfersApi->byId($transferUrl);
$transfer->status; # => "pending"
```
