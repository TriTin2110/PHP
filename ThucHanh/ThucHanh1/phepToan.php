<?php
class phepToan
{
        public function phepCong($x, $y)
        {
                return $x + $y;
        }

        public function phepTru($x, $y)
        {
                return $x - $y;
        }

        public function phepNhan($x, $y)
        {
                return $x * $y;
        }

        public function phepChia($x, $y)
        {
                return $x / $y;
        }

        //Đếm tổng số chẵn.
        public function demSoChan($a)
        {
                if ($a % 2 == 0)
                        return true;
                else
                        return false;
        }

        // Tính tổng của các số lẻ trong mảng.
        public function tinhTongSoLe($a)
        {
                if ($a % 2 != 0)
                        return true;
                else
                        return false;
        }

        
}
