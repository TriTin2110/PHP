<?php
class phepTinh
{
        public function kiemTraPhepTinh($a, $b, $phepTinh) {
                switch ($phepTinh) {
                        case '+':
                                return $this->phepCong($a, $b);
                                break;

                        case '-':
                                return $this->phepTru($a,$b);
                                break;
                        case '*':
                                return $this->phepNhan($a, $b);
                                break;

                        case '/':
                                if($a == 0 || $b == 0)
                                        return "Không thể thực hiện phép chia!";
                                else
                                        return $this->phepChia($a, $b);
                                break;
                }
        }


        public function phepCong($a, $b){
                return $a + $b;
        }

        public function phepTru($a, $b)
        {
                return $a - $b;
        }

        public function phepNhan($a, $b)
        {
                return $a * $b;
        }

        public function phepChia($a, $b)
        {
                return $a / $b;
        }
}
?>