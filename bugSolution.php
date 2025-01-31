The solution is to explicitly check for the existence of the key before accessing it using the `isset()` function:

```php
<?php
$userData = array(
    'name' => 'John Doe',
    'country' => 'USA'
);

$city = isset($userData['city']) ? $userData['city'] : 'Unknown'; // Check if 'city' exists

echo "City: " . $city; // Outputs 'City: Unknown'
?>
```

Alternatively, the null coalescing operator (`??`) can be used for a more concise solution:

```php
<?php
$userData = array(
    'name' => 'John Doe',
    'country' => 'USA'
);

$city = $userData['city'] ?? 'Unknown'; // Uses 'Unknown' if 'city' is not set

echo "City: " . $city; // Outputs 'City: Unknown'
?>
```
This prevents the `Undefined index` notice and provides a more robust way of handling cases where array keys might be missing.