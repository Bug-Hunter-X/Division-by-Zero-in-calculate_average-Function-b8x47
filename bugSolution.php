```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }
  $sum = array_sum($numbers);
  $count = count($numbers);
  if ($count === 0) {
    return 0; //Avoid division by zero
  }
  return $sum / $count;
}

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average;
```