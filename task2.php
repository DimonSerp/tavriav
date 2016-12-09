<?php
/**
 * Проверка корректности скобок в строке
 *
 * @param string $s
 * @return bool
 */
function checkBrackets($s)
{
    $length = mb_strlen($s);

    if (0 == $length) {
        return true;
    }

    $stack = new SplStack();

    for($i = 0; $i < $length; $i++) {
       $char = mb_substr( $s, $i, 1);
       switch ($char)
       {
           case '[':
               $stack->push(']');
               break;
           case '(':
               $stack->push(')');
               break;
           case ']':
           case ')':
               if ($stack->isEmpty()) {
                   return false;
               }
               $expected = $stack->pop();
               if ($expected != $char) {
                   return false;
               }
               break;
       }
    }

    return true;
}