<?php

const BR = '<br>';
const HR = '<hr>';
echo BR, HR;
// =====================================================================================================================

$price = 5;
$tax = 0.075;
printf('$%.2f', $price * (1 + $tax));

echo BR, HR;
// =====================================================================================================================

$zip = '6250';
$month = 2;
$day = 6;
$year = 2020;

printf("ZIP is %05d and the date is %02d/%02d/%d", $zip, $month, $day, $year);

echo BR, HR;
// =====================================================================================================================

$min = -40;
$max = 40;
printf("%+d and %+d", $min, $max);

echo BR, HR;
// =====================================================================================================================

$burger = 4.95;
$milk = 1.95;
$cola = 0.85;
$tip_rate = 0.16;
$tax_rate = 0.075;
$food = ($burger * 2) + $milk + $cola;
$tip = $food * $tip_rate;
$tax = $food * $tax_rate;
$total = $food + $tax + $tip;
printf('Total cost: $' . $total);

echo BR, HR;
// =====================================================================================================================











































