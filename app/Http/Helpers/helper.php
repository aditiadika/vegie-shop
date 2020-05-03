<?php

function amount_international_with_comma($number)
{
    return number_format($number, 0, ',', ',');
}

function getSingleProductTotal($price, $qty)
{
    $calculate = $price * $qty;

    return 'Rp. '.amount_international_with_comma($calculate);
}
