<?php

namespace Faker\Provider\fa_IR;

class DateTime extends \Faker\Provider\DateTime
{
    public static function dayOfWeek($max = 'now')
    {
        $map = [
            'Sunday' => 'یکشنبه',
            'Monday' => 'دوشنبه',
            'Tuesday' => 'سه شنبه',
            'Wednesday' => 'چهارشنبه',
            'Thursday' => 'پنج شنبه',
            'Friday' => 'جمعه',
            'Saturday' => 'شنبه',
        ];
        $week = static::dateTime($max)->format('l');

        return $map[$week] ?? $week;
    }

    public static function monthName($max = 'now')
    {
        $map = [
            'January' => 'دی',
            'February' => 'بهمن',
            'March' => 'اسفند',
            'April' => 'فروردین',
            'May' => 'اردیبهشت',
            'June' => 'خرداد',
            'July' => 'تیر',
            'August' => 'مرداد',
            'September' => 'شهریور',
            'October' => 'مهر',
            'November' => 'آبان',
            'December' => 'آذر',
        ];
        $month = static::dateTime($max)->format('F');

        return $map[$month] ?? $month;
    }
}
