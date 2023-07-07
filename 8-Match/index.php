<?php

// key value pairs
// returns an expression 
// performs strict comparison

$paymentStatus = 1;

function pending(){
    return 'pending';
}

$paymentStatusDisplay = match ($paymentStatus) {
     true => 'paid',
     2,3 => 'declined',
     0 => pending(),
     default => 'error'
};

echo $paymentStatusDisplay;