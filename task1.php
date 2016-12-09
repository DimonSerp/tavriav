<?php

/**
 * Поиск в отсортированном массиве
 *
 * @param array $a
 * @param integer $b
 * @return bool
 */
function searchInArray(array $a, $b)
{
    $length = count($a);
    // Проверка на пустой массив или значение за пределами массива
    if (0 == $length || $b < $a[0] || $b > $a[$length - 1]) {
        return false;
    }

    $first = 0;
    $last = $length - 1;

    while ($first < $last) {
        // Индекс середины массива
        $middle = (int)floor($first + ($last - $first) / 2);

        if ($b == $a[$middle]) {
            // Искомый элемент найден.
            return true;
        } elseif ($b < $a[$middle]) {
            $last = $middle;
        } else {
            $first = $middle + 1;
        }
    }

    return false;
}