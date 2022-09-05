<?php

namespace src;

use DateInterval;
use DatePeriod;

class Task6
{
    public function main(int $year, int $lastYear, int $month, int $lastMonth, string $dayName = 'Monday'): int
    {
        $date1 = $month . '.' . $year;
        $date2 = $lastMonth . '.' . $lastYear;

        $date1 = date_create_from_format("m.Y", $date1);
        $date2 = date_create_from_format("m.Y", $date2);

        $count = 0;
        $interval = new DateInterval('P1D');
        $period = new DatePeriod($date1, $interval, $date2);

        foreach ($period as $day) {
            if ($day->format('D') === ucfirst(substr($dayName, 0, 3))) {
                $count++;
            }
        }

        return $count;
    }
}

$result = new Task6;
echo $result->main(1999, 2010, 02, 02);
