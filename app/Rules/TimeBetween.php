<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */

    public function passes($attribute, $value) {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        // When the restaurant is open
        $earliestTime = Carbon::createFromTimeString('17:00:00');
        $lastTime = Carbon::createFromTimeString('23:00:00');

        return $pickupTime->between($earliestTime, $lastTime) ? true : false;
    }

    public function message () {
        return 'Please Choose the time between 17:00 - 23:00.';
    }
}
