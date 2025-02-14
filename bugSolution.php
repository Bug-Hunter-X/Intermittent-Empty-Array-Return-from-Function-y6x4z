```php
function processData(array $data): array {
  // ... some processing ...
  if (empty($data)) {
    // Handle empty array case appropriately
    return [];
  }
  // Add checks for other cases that could lead to empty array
  // ... more robust processing ... 
  return $data;
}

$myData = [1, 2, 3];
$result = processData($myData);

//Check if the data is empty before doing something with it 
if(!empty($result)){ 
    //Proceed with your logic here
}
```