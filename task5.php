<?php

/**
 * Проверка пересечения прямой и отрезка
 *
 * @param double $k
 * @param double $b
 * @param double $x1
 * @param double $y1
 * @param double $x2
 * @param double $y2
 * @return bool
 */
function isIntersect($k, $b, $x1, $y1, $x2, $y2)
{
    return ($y1>=($k*$x1 + $b) !== $y2>=($k*$x2 + $b));
}
