# High-Level Examples (Documents)

Source Code: [`DocumentsApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/DocumentsApi.php)

## Retrieve a Document ([API Reference](https://developers.dwolla.com/api-reference/documents/retrieve))

```php
$documentUrl = "https://api-sandbox.dwolla.com/documents/56502f7a-fa59-4a2f-8579-0f8bc9d7b9cc";
$documentsApi = new DwollaSwagger\DocumentsApi($apiClient);

$document = $documentsApi->getDocument($documentUrl);
$document->type; # => "passport"
```
