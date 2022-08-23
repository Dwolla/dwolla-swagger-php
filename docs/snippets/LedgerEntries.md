# High-Level Examples (Ledger Entries)

Source Code: [`LedgerentriesApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/LedgerentriesApi.php)

## Create a Label Ledger Entry ([API Reference](https://developers.dwolla.com/api-reference/labels/create-a-label-ledger-entry))

```php
$labelUrl = "https://api-sandbox.dwolla.com/labels/e217bcac-628a-456d-a375-6cc51230616f";
$labelsApi = new DwollaSwagger\LabelsApi($apiClient);

$label = $labelsApi->addLedgerEntry([
  "amount" => [
    "currency" => "USD",
    "value" => "-5.00"
  ]
], $labelUrl);
$label; # => "https://api-sandbox.dwolla.com/ledger-entries/76e5541d-18f4-e811-8112-e8dd3bececa8"
```

## Retrieve a Label Ledger Entry ([API Reference](https://developers.dwolla.com/api-reference/labels/retrieve-a-label-ledger-entry))

```php
$ledgerEntryUrl = "https://api-sandbox.dwolla.com/ledger-entries/32d68709-62dd-43d6-a6df-562f4baec526";
$ledgerEntriesApi = new DwollaSwagger\LedgerentriesApi($apiClient);

$ledgerEntry = $ledgerEntriesApi->getLedgerEntry($ledgerEntryUrl);
$ledgerEntry->id; # => "7e042ffe-e25e-40d2-b86e-748b98845ecc"
```
