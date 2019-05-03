<?php

use RizaErgun\DateHelper\DateHelper;

require 'vendor/autoload.php';

$startDate = new DateTime('2019-05-03');
$endDate = new DateTime('2019-05-04');
$countDays = 1;

echo "<pre>";

$dateRange = DateHelper::dateRange($startDate, $endDate);
print_r($dateRange);

$nextDay = DateHelper::nextDay($startDate, $countDays);
print_r($nextDay);

$prevDay = DateHelper::prevDay($startDate, $countDays);
print_r($prevDay);

$nextDays = DateHelper::nextDays($startDate, $countDays);
print_r($nextDays);

$prevDays = DateHelper::prevDays($startDate, $countDays);
print_r($prevDays);

echo "</pre>";