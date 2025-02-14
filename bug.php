```php
function processData(array $data): array {
  // ... some processing ...
  return $data;
}

$myData = [1, 2, 3];
$result = processData($myData);

// Unexpected behavior: $result is sometimes empty
```