<?php

const BR = '<br>';
const HR = '<hr>';
echo BR, HR;
// =====================================================================================================================

$price1 = 50.1;
$price2 = 50.2;
if (abs($price1 - $price2) < 0.00001) {
    echo 'ok';
} else {
    echo 'not ok';
}

echo BR, HR;
// =====================================================================================================================

if ('x54541' > 'x5656') {
    echo 'The string x54541 is greater than the string x5656';
} else {
    echo 'The string x5656 is greater than the string x54541'; // true
}

echo BR;

if ('54541' > '5656') {
    echo 'The number 54541 is greater than the number 5656'; // true
} else {
    echo 'The number 5656 is greater than the number 54541';
}

echo BR;

if ('6 pack' > '55 cards') {
    echo 'The string 6 pack is greater than the string 55 cards'; // true
} else {
    echo 'The string 55 cards is greater than the string 6 pack';
}

echo BR;

if ('6 pack' < '55') {
    echo 'The string 6 pack is greater than the number 55';
} else {
    echo 'The number 55 is greater than the string 6 pack'; // true
}

echo BR, HR;
// =====================================================================================================================

$i = 1;
echo '<select name="people">';
while ($i <= 10) {
    echo "<option>$i</option>\n";
    $i++;
}
echo "</select>";

echo BR;

echo '<select name="people">';
for ($k = 1; $k <= 10; $k++) {
    echo "<option>$k</option>";
}
echo "</select>";

echo BR, HR;
// =====================================================================================================================

echo '<select name="degrees">';
for ($min =1, $max = 10; $min < 50; $min +=10, $max +=10) {
    echo "<option>$min - $max</option>";
}
echo '</select>';

echo BR, HR;
// =====================================================================================================================

$f = -50;
while ($f<=50) {
    $c = ($f -32) * (5/9);
    printf ("%d degrees F = %d degrees C <br>", $f, $c);
    $f +=5;
}



































