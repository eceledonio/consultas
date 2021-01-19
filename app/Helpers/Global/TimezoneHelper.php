<?php

use Carbon\Carbon;
use JamesMills\LaravelTimezone\Timezone;

if (! function_exists('timezone')) {
    /**
     * Access the timezone helper.
     */
    function timezone()
    {
        return resolve(Timezone::class);
    }
}

if (! function_exists('get_timezone')) {
    /**
     * Get settings timezone.
     * @return string
     */
    function get_timezone()
    {
        return Settings::get('timezone');
    }
}

if (! function_exists('get_date')) {
    /**
     * Get date format from settings.
     * @return string
     */
    function get_date()
    {
        $dateformat = Settings::get('dateformat');

        return $dateformat;
    }
}

if (! function_exists('get_full_date')) {
    /**
     * Get full date format from settings.
     * @return string
     */
    function get_full_date()
    {
        $dateformat = Settings::get('dateformat');
        $timeformat = Settings::get('timeformat');

        return "$dateformat $timeformat";
    }
}

if (! function_exists('timezones')) {
    function timezones()
    {
        $timezoneIdentifiers = DateTimeZone::listIdentifiers();
        $utcTime = new DateTime('now', new DateTimeZone('UTC'));
        $tempTimezones = [];

        foreach ($timezoneIdentifiers as $timezoneIdentifier) {
            $currentTimezone = new DateTimeZone($timezoneIdentifier);
            $tempTimezones[] = [
                'offset' => (int) $currentTimezone->getOffset($utcTime),
                'identifier' => $timezoneIdentifier,
            ];
        }
        usort($tempTimezones, function ($a, $b) {
            return ($a['offset'] == $b['offset'])
                ? strcmp($a['identifier'], $b['identifier'])
                : $a['offset'] - $b['offset'];
        });
        $timezones = [];

        foreach ($tempTimezones as $tz) {
            $sign = ($tz['offset'] > 0) ? '+' : '-';
            $offset = gmdate('H:i', abs($tz['offset']));
            $timezones[$tz['identifier']] = '(UTC '.$sign.$offset.') '.
                $tz['identifier'];
        }

        return $timezones;
    }
}

if (! function_exists('sunIsUp')) {
    function sunIsUp($currentLat = '18.7357', $currentLng = '70.1627'): bool
    {
        $sunriseTimestamp = date_sunrise(
            now()->timestamp,
            SUNFUNCS_RET_TIMESTAMP,
            $currentLat,
            $currentLng
        );

        $sunrise = Carbon::createFromTimestamp($sunriseTimestamp);

        $sunsetTimestamp = date_sunset(
            now()->timestamp,
            SUNFUNCS_RET_TIMESTAMP,
            $currentLat,
            $currentLng
        );

        $sunset = Carbon::createFromTimestamp($sunsetTimestamp);

        return now()->between($sunrise, $sunset);
    }
}

if (! function_exists('greetings')) {
    function greetings()
    {
        date_default_timezone_set(auth()->user()->settings('timezone'));
        $time = (int) date('Hi');

        if ($time >= 600 && $time <= 1200) {
            echo __('Buenos días');
        } elseif ($time >= 1201 && $time <= 1900) {
            echo __('Buenas tardes');
        } elseif ($time <= 559 || $time >= 1901) {
            echo __('Buenas noches');
        } else {
            echo __('Hola!');
        }
    }
}
