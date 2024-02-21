<?php

use App\Helpers\DateHelper;

$originalDate = "2023-10-31 04:27:59";
$timestamp = strtotime($originalDate);
$formatedDate = date('l d F Y', $timestamp);
$parts = explode(' ', $formatedDate);

$dayString = $parts[0];
$dayInt = $parts[1];
$monthString = $parts[2];
$yearInt = $parts[3];

$translatedDay = DateHelper::dayToSpanish($dayString);

echo $translatedDay;