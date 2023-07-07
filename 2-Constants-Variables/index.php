<?php

// Constants
    /* 
    Can not override / static data
    Defined at runtime 
    */


    const STATUS_PAID = 'paid';

    echo STATUS_PAID;

    if(defined(STATUS_PAID)) echo STATUS_PAID; 


// Variables
    /*
    Can override (ex top to bottom)

    Startes with letter and underscore
    */
?>