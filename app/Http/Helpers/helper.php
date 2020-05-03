<?php

function amount_international_with_comma($number)
{
    return number_format($number, 0, ',', ',');
}
