<?php

namespace src;

class Task6
{
    private static function outputToConsole($data): void
    {
        echo '<script>';
        echo "console.log('" . $data . "')";
        echo '</script>';
    }

    private function isMonday(string $dayOfWeek): bool
    {
        return $dayOfWeek === 'Mon';
    }

    public static function main(): void
    {
        $dayOfWeekFormat = 'D';
        $firstDayOfMonthFormat = '01.m.Y';
        $year = 1980;
        $lastYear = 1999;
        $month = 1;
        $lastMonth = 12;

        $mondaysNum = 0;
        $mondaysArr = [];
        for ($i = $year; $i <= $lastYear; $i++) {
            for ($j = $month; $j <= $lastMonth; $j++) {
                $formattedDate = "01.$j.$i";
                $tempDate = new \DateTime($formattedDate);
                if ((new Task6())->isMonday($tempDate->format($dayOfWeekFormat))) {
                    $mondaysNum++;
                    $mondaysArr[] = $tempDate->format($firstDayOfMonthFormat);
                }
            }
        }

        Task6::outputToConsole("Count of Mondays: $mondaysNum");
        foreach ($mondaysArr as $item) {
            Task6::outputToConsole($item);
        }
    }
}
