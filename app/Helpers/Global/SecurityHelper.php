<?php

use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Global Security Helpers Functions
|--------------------------------------------------------------------------
*/

if (! function_exists('secToken')) {
    /**
     * Access the Security Token Helper.
     * @return string
     */
    function secToken()
    {
        return strtoupper(substr(hash('sha512', Carbon::now()->toDateTimeString()), 0, 10));
    }
}
