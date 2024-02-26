<?php
class phepToan
{
        public function phepTinh($a, $b, $phepTinh)
        {
                switch ($phepTinh) {
                        case '+':
                                return $a + $b;

                        case '-':
                                return $a - $b;

                        case '*':
                                return $a * $b;

                        case '/':
                                if ($a == 0 || $b == 0)
                                        return "Không thể thực hiện phép chia!";
                                else
                                        return $a / $b;

                        case '%':
                                if ($a == 0 || $b == 0)
                                        return "Không thể thực hiện phép chia lấy dư!";
                                else
                                        return $a % $b;
                }
        }
}
