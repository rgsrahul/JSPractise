<?php

$date1 = date('Y-m-d');
$date2 = '2022-02-01';
$days = (strtotime($date1)-strtotime($date2))/(86400);

echo $days;

echo "hello world";
?>