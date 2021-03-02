<?php

const BR = '<br>';
const HR = '<hr>';
echo BR, HR;
// =====================================================================================================================

$number_to_display = number_format(6564765674);
echo $number_to_display;

echo BR, HR;
// =====================================================================================================================

function restaurant_check($meal, $tax, $tip)
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;

    return $total_amount;
}

$total = restaurant_check(15.22, 8.25, 15);

echo 'I only have $20 in cash, so...' . BR;
if ($total > 20) {
    echo 'I must pay with my credit card.' . BR;
} else {
    echo 'I can pay with cash' . BR;
}

// == Возврат массива

function restaurant_check2($meal, $tax, $tip)
{
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_notip = $meal + $tax_amount;
    $total_tip = $meal + $tax_amount + $tip_amount;

    return [$total_notip, $total_tip];
}

$totals = restaurant_check2(15.22, 8.25, 15);
if ($totals[0] < 20) {
    echo 'The total without tip is less than $20.' . BR;
}
if ($totals[1] < 20) {
    echo 'The total with tip is less than $20.' . BR;
}

//  == Применение неск операторов return

function payment_method($cash_on_hand, $amount)
{
    if ($amount > $cash_on_hand) {
        return 'credit card';
    } else {
        return 'cash';
    }
}

// == Передача возвращаемого значения другой функции

$total = restaurant_check(15.22, 8.25, 15);
$method = payment_method(20, $total);
echo 'I will pay whith ' . $method . BR;

// == Применение возвращаемых значений в условном операторе if()

if (restaurant_check(15.22, 8.25, 15) < 20) {
    echo 'Less than $20, I can pay cash.' . BR;
} else {
    echo 'Too expensive, I need my credit card.' . BR;
}

// == Возврат логического значения true или false из функции

function can_pay_cash($cash_on_hand, $amount)
{
    if ($amount > $cash_on_hand) {
        return false;
    } else {
        return true;
    }
}

$total = restaurant_check(15.22, 8.25, 15);
if (can_pay_cash(20, $total)) {
    echo 'I can pay in cash.';
} else {
    echo 'Time for the credit card.';
}

// == Сочетание вызова функции с операцией присваивания проверочном выражении

function complete_bill($meal, $tax, $tip, $cash_on_hand) {
    $tax_amount = $meal * ($tax / 100);
    $tip_amount = $meal * ($tip / 100);
    $total_amount = $meal + $tax_amount + $tip_amount;
    if ($total_amount > $cash_on_hand) {
        return false;
    } else {
        return $total_amount;
    }
}

if ($total = complete_bill(15.22,8.25,15,20)) {
    echo "I'm happy to pay $total." . BR;
} else {
    echo "I don't have enough money. Shall I wash some dishes?." . BR;
}
























