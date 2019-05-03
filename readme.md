# DateHelper

A simple PHP helper library for DateTime.

```php
use RizaErgun\DateHelper\DateHelper;
require 'vendor/autoload.php';

$startDate = new DateTime('2019-05-03');
$endDate = new DateTime('2019-05-04');
$countDays = 1;

echo "<pre>";

$daysBetweenTwoDates = DateHelper::dateRange($startDate, $endDate);
print_r($daysBetweenTwoDates);

$nextDay = DateHelper::nextDay($startDate, $countDays);
print_r($nextDay);

$previousDay = DateHelper::prevDay($startDate, $countDays);
print_r($previousDay);

$nextDays = DateHelper::nextDays($startDate, $countDays);
print_r($nextDays);

$previousDays = DateHelper::prevDays($startDate, $countDays);
print_r($previousDays);

echo "</pre>";
```

## Installation

```
composer require rizaergun/date-helper
```