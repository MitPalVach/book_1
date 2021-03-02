<style>
    table {
        border: 1px solid #000;
        font-size: 22px;
    }

    td {
        border: 1px solid #000;
        padding: 5px;
    }
</style>

<?php

const BR = '<br>';
const HR = '<hr>';
echo BR, HR;
// =====================================================================================================================

$meal = [
    'Breakfast' => 'Eggs',
    'Lunch' => 'Apple',
    'Snack' => 'Orange',
    'Dinner' => 'Beacon'
];
print "<table>";
foreach ($meal as $key => $value) {
    print "<tr><td>$key</td><td>$value</td></tr>";
}
print "</table>";

echo BR, HR;
// =====================================================================================================================

$meals = [
    'Chocolate' => 1,
    'Ice-cream' => 4.95,
    'Chips' => 3.00,
    'Gum' => 6.50
];
foreach ($meals as $dish => $price) {
    $meals[$dish] = $meals[$dish] * 2;
}
foreach ($meals as $dish => $price) {
    printf("The new prices of %s is \$%.2f. ", $dish, $price);
}

echo BR, HR;
// =====================================================================================================================

$dinner = [
    'Juice',
    'Soup',
    'Salad'
];
for ($i = 0, $num_dishes = count($dinner); $i < $num_dishes; $i++) {
    print "Dish number $i is $dinner[$i]" . '<br>';
}

echo BR, HR;
// =====================================================================================================================

$dishes['Beef'] = 12;
$dishes['Beef']++;
$dishes['Duck'] = 3;

$dishes['total'] = $dishes['Beef'] + $dishes['Duck'];

if ($dishes['total'] > 15) {
    print 'You ate a lot: ';
}
print 'You ate ' . $dishes['Beef'] . ' dishes of Beef.';


echo BR, HR;
// =====================================================================================================================

$letters = ['A', 'B', 'C', 'D'];
print implode(' ', $letters);

echo BR, HR;
// =====================================================================================================================

$dim = '1, 3, 5, 7';
$dim_exp = explode(', ', $dim);
echo $dim_exp[2];


echo BR, HR;
// =====================================================================================================================

$specials = [
    [
        'Chestnut Bun',
        'Walnut Bun',
        'Peanut Bun'
    ],
    [
        'Chestnut Salad',
        'Walnut Salad',
        'Peanut Salad'
    ]
];
for ($i = 0, $num_specials = count($specials); $i < $num_specials; $i++) {
    for ($m = 0, $num_sub = count($specials[$i]); $m < $num_sub; $m++) {
        print "Element [$i][$m] is " . $specials[$i][$m] . BR;
    }
}



















































