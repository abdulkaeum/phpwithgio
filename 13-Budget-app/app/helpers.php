<?php

function formatPoundAmount(float $amount) : string {
    return ($amount < 0 ? '-' : '') . '£' . number_format(abs($amount));
}

function formatDate (string $date) : string {
    return date('d M, Y' , strtotime($date));
    //return $date;
}