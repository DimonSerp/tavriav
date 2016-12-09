<?php

/**
 * Реверс ключей массива, при этом значения сохраняются в исходном порядке
 *
 * @param array $a
 * @return array
 */
function arrayReverseKeys(array &$a)
{
    $length = count($a);
    // Получаем ключи массива
    $keys = array_keys($a);

    // Индекс первого элемента для замены значений
    $first = 0;

    for ($i = $length - 1; $i >= 0; $i--) {
        // Если не дошли до середины массива, обмен значений последнего - первого елементов
        if ($first < $i) {
            $buffer = $a[$keys[$first]];
            $a[$keys[$first]] = $a[$keys[$i]];
        } else {
            $buffer = $a[$keys[$i]];
        }
        // Удаление текущего элемента массива
        unset($a[$keys[$i]]);
        // Вставка в конец массива элемента
        $a[$keys[$i]] = $buffer;

        $first++;
    }

    return $a;
}