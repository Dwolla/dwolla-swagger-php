# High-Level Examples (Kba)
Source Code: [`KbaApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/KbaApi.php)

[Complete API reference](https://developers.dwolla.com/api-reference)

## Initiate a KBA Session for a Customer

```php
<?php
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$customerUrl = "https://api.dwolla.com/customers/ca22d192-48f1-4b72-b29d-681e9e20795d"

$kba = $customersApi->initiateKba($customer_url);
$kba; # => "https://api-sandbox.dwolla.com/kba/70b0e9cc-020d-4de2-9a82-a2281afa4c31"
?>
```

## Retrieve KBA Questions

```php
<?php
$kbaApi = new DwollaSwagger\KbaApi($apiClient);

kba_url = "https://api-sandbox.dwolla.com/kba/70b0e9cc-020d-4de2-9a82-a2281afa4c31";

$kbaQuestions = $kbaApi->getKbaQuestions($kbaUrl);
print $kbaQuestions->id; # => "70b0e9cc-020d-4de2-9a82-a2281afa4c31"
?>
```

## Verify KBA Questions

```php
<?php
$kbaApi = new DwollaSwagger\KbaApi($apiClient);

$kbaUrl = "https://api-sandbox.dwolla.com/kba/70b0e9cc-020d-4de2-9a82-a2281afa4c31";

$kbaAnswers = $kbaApi->answerKbaQuestions([
    "answers" => [
         [
             "questionId" => "2355953375",
             "answerId" => "2687969335"
         ],
         [
             "questionId" => "2355953385",
             "answerId" => "2687969385"
         ],
         [
             "questionId" => "2355953395",
             "answerId" => "2687969435"
         ],
         [
             "questionId" => "2355953405",
             "answerId" => "2687969485"
         ]
    ]
  ], $kbaUrl);
?>
```


