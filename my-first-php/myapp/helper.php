<?php

declare(strict_types=1);

//types of income

function formatDollarAmount(float $amount): string
{
    $isNegative = $amount < 0;

    return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

// date formation

function formatDate(string $date): string
{
    return date('M j, Y', strtotime($date));
}
