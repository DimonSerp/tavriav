<?php

/**
 *  Подсчет возможное количество счастливых пропусков, на основе разрядности
 * @param int $k
 * @return int
 */
function luckyTickets($k)
{
    $half = (int)($k / 2);

    // Расчёт возможных вариаций номеров счастливых билетов на основе разрядности
    $data = array();
    for ($i = 1; $i <= $half; $i++) {
        $length = $i * 9 + 1;
        if ($i == 1) {
            for ($j = 0; $j < $length; $j++)
                $data[$i][$j] = 1;
        }
        else {
            $sum = 0;
            $k = 0;
            for (; $k <= $length / 2; $k++) {
                $sum += $data[$i - 1][$k];
                if ($k >= 10)
                    $sum -= $data[$i - 1][$k - 10];
                $data[$i][$k] = $sum;
            }
            for (; $k < $length; $k++) {
                $data[$i][$k] = $data[$i][$length - 1 - $k];
            }
        }
    }

    $count = 0;
    for ($i = 0; $i <= $half * 9; $i++) {
        $count += $data[$half][$i] * $data[$half][$i];
    }
    return $count;
}