<?php

echo time(); // unix timestamp in seconds - *current time* - number of seconds since 01/01/1970

$fiveDays = time() + 5 * 24 * 60 * 60; // time in 5 days 

echo time() - 60 * 60 * 24; // time yesterday 

// format date

    date('d/m/Y g:ia', $fiveDays);

// mktime() = get unix timestamp of a particular date/time
    
    $myDate = mktime(0,0,0,4,10,null);
    date('d/m/Y g:ia', $myDate); // 10/05/2023 12:00am

//**** strtotime() - convert string representation of a date to unix time stamp

    date('d/m/Y g:ia', strtotime('2023-07-06 07:00:00'));

    strtotime('tomrrow');
