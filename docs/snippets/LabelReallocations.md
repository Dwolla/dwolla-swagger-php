# High-Level Examples (Label Reallocation)

Source Code: [`LabelreallocationsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/LabelreallocationsApi.php)

## Create a Label Reallocation ([API Reference](https://developers.dwolla.com/api-reference/labels/create-a-label-reallocation))

```php
$labelReallocationsApi = new DwollaSwagger\LabelreallocationsApi($apiClient);

$labelReallocation = $labelReallocationsApi->reallocateLabel([
  "_links" => [
    "from" => [
      "href" => "https://api-sandbox.dwolla.com/labels/c91c501c-f49b-48be-a93b-12b45e152d45",
    ],
    "to" => [
      "href" => "https://api-sandbox.dwolla.com/labels/7e042ffe-e25e-40d2-b86e-748b98845ecc"
    ]
  ],
  "amount" => [
    "currency" => "USD",
    "value" => "15.00"
  ]
]);
$labelReallocation; # => "https://api-sandbox.dwolla.com/label-reallocations/fd36b78c-42f3-4e21-8efb-09196fccbd21"
```

## Retrieve a Label Reallocation ([API Reference](https://developers.dwolla.com/api-reference/labels/retrieve-a-label-reallocation))

```php
$labelReallocationUrl = 'https://api-sandbox.dwolla.com/label-reallocations/fd36b78c-42f3-4e21-8efb-09196fccbd21';
$labelReallocationsApi = new DwollaSwagger\LabelreallocationsApi($apiClient);

$labelReallocation = $labelReallocationsApi->getLabelReallocation($labelReallocationUrl);
$labelReallocation->created; # => "2019-05-16T13:41:31.036Z"
```
