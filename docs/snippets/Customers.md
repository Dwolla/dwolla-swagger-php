# High-Level Examples (Customers)

Source Code: [`CustomersApi`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/CustomersApi.php)

## Retrieve a Customer ([API Reference](https://developers.dwolla.com/api-reference/customers/retrieve))

```php
$customerUrl = 'https://api-sandbox.dwolla.com/customers/07d59716-ef22-4fe6-98e8-f3190233dfb8';
$customersApi = new DwollaSwagger\CustomersApi($apiClient);
$customer = $customersApi->getCustomer($customerUrl);
```

## Create a Customer ([API Reference](https://developers.dwolla.com/api-reference/customers/create))

```php
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$customer = $customersApi->create([
  "firstName" => "Jane",
  "lastName" => "Merchant",
  "email" => "jmerchant@nomail.net",
  "type" => "receive-only",
  "businessName" => "Jane Corp llc",
  "ipAddress" => "99.99.99.99"
]);
$customer; # => "https://api-sandbox.dwolla.com/customers/fc451a7a-ae30-4404-aB95-e3553fcd733f"
```

## List All Customers ([API Reference](https://developers.dwolla.com/api-reference/customers/list-and-search))

```php
$customersApi = new DwollaSwagger\CustomersApi($apiClient);

$customers = $customersApi->_list(10, 0);
$customers->_embedded->{"customers"}[0]->firstName; # => "Jane"
```

## Searching and Filtering Customers

When searching for Customers, you can pass in **optional** query string parameters to narrow down and filter the list of Customers returned. For more information, check out the [Dwolla API Reference documentation](https://developers.dwolla.com/api-reference/customers/list-and-search). The method signature for adding optional query string parameters to the List Customers endpoint is as follows:  
* [`$customersApi->_list(limit, offset, search, status, headers, email)`](https://github.com/Dwolla/dwolla-swagger-php/blob/main/lib/CustomersApi.php#L72-L131)

Here are some examples:

Let's retrieve 10 customer records that have a status of `document`.

```php
DwollaSwagger\Configuration::$access_token = "a token";
$apiClient = new DwollaSwagger\ApiClient("https://api-sandbox.dwolla.com/");

$customersApi = new DwollaSwagger\CustomersApi($apiClient);
$customers = $customersApi->_list(10, 0, null, "document");
```

Let's retrieve a list of customer records and filter them based on the `email` query string parameter. We're also passing in a custom [`Idempotency-Key`](https://developers.dwolla.com/api-reference#idempotency-key) header. You can pass in `null` if you're not adding any custom headers.

```php
DwollaSwagger\Configuration::$access_token = "a token";
$apiClient = new DwollaSwagger\ApiClient("https://api-sandbox.dwolla.com/");

$customersApi = new DwollaSwagger\CustomersApi($apiClient);
$customers = $customersApi->_list(10, 0, null, null, [
    "Idempotency-Key" => "51a62-3403-11e6-ac61-9e71128cae77"
], "jane@email.com");
```
