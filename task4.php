<?php

/**
 * Реверс строки
 *
 * @param string $s
 * @return string
 */
function myStrRev(&$s)
{
    $length = mb_strlen($s);

    for ($i = 0; $i < $length; $i++) {
        $s = $s{$i}.mb_substr($s,0,$i).mb_substr($s,$i+1);
    }

    return $s;
}