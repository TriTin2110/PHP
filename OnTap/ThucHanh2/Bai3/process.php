<?php
class caculate
{
        function sum($a, $b)
        {
                return $a + $b;
        }

        function minus($a, $b)
        {
                return $a - $b;
        }

        function add($a, $b)
        {
                return $a * $b;
        }

        function divide($a, $b)
        {
                if ($b == 0)
                        return "Không thể thực hiện phép chia";
                else
                        return $a / $b;
        }
}
