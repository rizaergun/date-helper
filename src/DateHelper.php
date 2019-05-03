<?php

namespace RizaErgun\DateHelper;

use DateInterval;
use DatePeriod;
use DateTime;
use Exception;

class DateHelper
{

    /**
     * @param DateTime $startDatetime
     * @param DateTime $endDatetime
     * @return array
     * @throws Exception
     */
    public static function dateRange(DateTime $startDatetime, DateTime $endDatetime)
    {
        $array = [];
        $interval = new DateInterval('P1D');
        $endDatetime->add($interval);
        $periods = new DatePeriod($startDatetime, $interval, $endDatetime);

        foreach ($periods as $period) {
            $array[] = $period;
        }

        return $array;
    }

    /**
     * @param DateTime $datetime
     * @param $countDays
     * @return DateTime
     */
    public static function nextDay(DateTime $datetime, $countDays)
    {
        $datetime->modify('+' . $countDays . ' day');
        return $datetime;
    }

    /**
     * @param DateTime $datetime
     * @param $countDays
     * @return DateTime
     */
    public static function prevDay(DateTime $datetime, $countDays)
    {
        $datetime->modify('-' . $countDays . ' day');
        return $datetime;
    }

    /**
     * @param DateTime $datetime
     * @param $countDays
     * @return array
     */
    public static function nextDays(DateTime $datetime, $countDays)
    {
        $array = [];

        for ($i = 1; $i <= $countDays; $i++) {
            $array[] = static::nextDay($datetime, $countDays);
        }

        return $array;
    }


    /**
     * @param DateTime $datetime
     * @param $countDays
     * @return array
     */
    public static function prevDays(DateTime $datetime, $countDays)
    {
        $array = [];

        for ($i = 1; $i <= $countDays; $i++) {
            $array[] = static::prevDay($datetime, $countDays);
        }

        return $array;
    }
}