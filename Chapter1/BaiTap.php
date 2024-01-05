<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <?php
        //Lệnh echo và print trong PHP
        echo "Lệnh echo và print trong PHP<br>";
        echo "Hello world! (echo) <br>";
        print "Hello world! (print)<br><br>";

        //Toán tử trong PHP
        echo "Toán tử trong PHP (a = 1, b = 2)<br>";
        $a = 1;
        $b = 2;
        echo $a." + ".$b." = ".($a+$b)."<br>";
        echo $a." - ".$b." = ".($a-$b)."<br>";
        echo $a." * ".$b." = ".($a*$b)."<br>";
        echo $a." / ".$b." = ".($a/$b)."<br>";
        echo $a." % ".$b." = ".($a%$b)."<br>";
        echo "a++ = ".($a++)."<br>";
        $a = 1;
        echo "++a = ".(++$a)."<br>";
        $a = 1;
        echo "a-- = ".($a--)."<br>";
        $a = 1;
        echo "--a = ".(--$a)."<br><br>";

        //Toán tử so sánh trong PHP
        echo "Toán tử so sánh trong PHP (a = 1, b = 2)<br>";
        $a = 1;
        $b = 2;
        if($a == $b)
                echo "a == b <br>";
        if($a != $b)
                echo "a != b <br>";
        if($a > $b)
                echo "a > b <br>";
        if($a < $b)
                echo "a < b <br>";
        if($a >= $b)
                echo "a >= b <br>";
        if($a <= $b)
                echo "a <= b <br>";

        //Toán tử gán trong PHP
        echo "<br>Toán tử gán trong PHP (a = 1, b = 2)<br>";
        $a = 1;
        $b = 2;
        echo "a = b => a = ".($a=$b)."<br>";
        $a = 1;
        $b = 2;
        echo "a += b => a = ".($a+=$b)."<br>";
        $a = 1;
        $b = 2;
        echo "a -= b => a = ".($a-=$b)."<br>";
        $a = 1;
        $b = 2;
        echo "a *= b => a = ".($a*=$b)."<br>";
        $a = 1;
        $b = 2;
        echo "a /= b => a = ".($a/=$b)."<br>";
        $a = 1;
        $b = 2;
        echo "a %= b => a = ".($a%=$b)."<br>";

        //Cấu trúc điều khiển
        //If, else, toán tử 3 ngôi
        echo "<br>Cấu trúc điều khiển trong PHP (a = 1, b = 2), (If, else, toán tử 3 ngôi)<br>";
        $a = 1;
        $b = 2;
        if($a > $b)
                echo "a is greater than b <br>";
        else if($a < $b)
                echo "a is smaller than b <br>";
        else
                echo "a is equal to b <br>";

        echo($a == $b) ? "a is equal to b <br>" : (($a>$b) ? "a is greater than b <br>" : "a is smaller than b <br>");

        //Switch
        echo "<br>Cấu trúc điều khiển trong PHP (dayOfWeek = 2), (Switch)<br>";
        $dayOfWeek = 2;
        switch ($dayOfWeek) {
                case 2:
                        echo "Monday<br>";
                        break;
                case 3:
                        echo "Tuesday<br>";
                        break;
                case 4:
                        echo "Wednesday<br>";
                        break;
                case 5:
                        echo "Thursday<br>";
                        break;
                case 6:
                        echo "Friday<br>";
                        break;
                case 7:
                        echo "Saturday<br>";
                        break;
                case 8:
                        echo "Sunday<br>";
                        break;
                default:
                        echo "It's not weekday<br>";
                        break;
        }

        //Vòng lặp while-dowhile
        echo "<br>Cấu trúc điều khiển trong PHP (i = 1), (while)<br>";
        $i = 1;
        while($i<=3)
                $i++;
        echo "i = ".$i."<br>";
        echo "<br>Cấu trúc điều khiển trong PHP (m = 1), (do-while)<br>";
        $m = 1;
        do {
                $m++;
        } while ($m <= 3);
        echo "m = ".$m."<br>";

        //Vòng lặp for
        echo "<br>Cấu trúc điều khiển trong PHP (f = 1), (for)<br>";
        $f = 1;
        for ($o=1; $o < 6; $o++) { 
                echo "f = ".$f++."<br>";
        }

        //Mảng trong PHP
        //Indexed array trong PHP
        echo "<br>Indexed array trong PHP (cars = array(\"Volvo\",\"Audi\",\"Toyota\"))<br>";
        $cars = array("Volvo", "Audi", "Toyota");
        echo "The second car in cars array is: ".$cars[1]."<br>";
        
        //Associative array
        echo "<br>Associative array trong PHP (ages = array(\"James\"=>35,\"Peter\"=>25,\"Ron\"=>31))<br>";
        $ages = array("James"=>35, "Peter"=>25, "Ron"=>31);
        echo "The age of Peter is: ".$ages["Peter"]."<br>";

        //Mutidimensional array
        echo "<br>Associative array trong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        $student = array("James"=>array("GPA"=>8),
                        "Peter"=>array("GPA"=>6),
                        "Ron"=>array("GPA"=>9)
                        );
        echo "GPA of Ron is: ".$student["Ron"]["GPA"];

        //Duyệt mảng
        //Duyệt mảng sử dụng for-index
        echo "<br>Duyệt mảng cars sử dụng for-index trong PHP (cars = array(\"Volvo\",\"Audi\",\"Toyota\"))<br>";
        for ($o=0; $o < count($cars); $o++) { 
                echo $cars[$o].", ";
        }

        //Duyệt mảng sử dụng foreach
        echo "<br><br>Duyệt mảng student sử dụng foreachtrong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        //$name sẽ có giá trị là (James, Peter, Ron)
        foreach ($student as $name => $arrOfName) {
                echo "Name: ".$name.", ";
                //$value = GPA sẽ có giá trị tương ứng với từng name vd (James: 8)
                foreach ($arrOfName as $key => $value) {
                        echo "GPA: ".$value."<br>";
                }
        }

        //Sắp xếp mảng tăng dần sử dụng sort()
        echo "<br>Sắp xếp mảng tăng dần sử dụng sort() trong PHP (number = array(7,3,7,1,43,2,8)<br>";
        $number = array(7,3,7,1,43,2,8);
        sort($number);
        foreach ($number as $number) {
                echo $number.", ";
        }

        //Sắp xếp mảng giảm dần sử dụng rsort()
        echo "<br><br>Sắp xếp mảng giảm dần sử dụng rsort() trong PHP (number = array(7,3,7,1,43,2,8)<br>";
        $number = array(7,3,7,1,43,2,8);
        rsort($number);
        foreach ($number as $number) {
                echo $number.", ";
        }

        //Sắp xếp mảng giảm dần theo value sử dụng sort()
        echo "<br><br>Sắp xếp mảng tăng dần theo value sử dụng asort() trong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        asort($student);
        foreach ($student as $name => $arrOfName) {
                echo "Name: ".$name.", ";
                //$value = GPA sẽ có giá trị tương ứng với từng name vd (James: 8)
                foreach ($arrOfName as $key => $value) {
                        echo "GPA: ".$value."<br>";
                }
        }
        
        //Sắp xếp mảng giảm dần theo value sử dụng sort()
        echo "<br>Sắp xếp mảng giảm dần theo value sử dụng arort() trong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        arsort($student);
        foreach ($student as $name => $arrOfName) {
                echo "Name: ".$name.", ";
                //$value = GPA sẽ có giá trị tương ứng với từng name vd (James: 8)
                foreach ($arrOfName as $key => $value) {
                        echo "GPA: ".$value."<br>";
                }
        }

        //Sắp xếp mảng giảm dần theo value sử dụng sort()
        echo "<br><br>Sắp xếp mảng tăng dần theo key sử dụng ksort() trong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        ksort($student);
        foreach ($student as $name => $arrOfName) {
                echo "Name: ".$name.", ";
                //$value = GPA sẽ có giá trị tương ứng với từng name vd (James: 8)
                foreach ($arrOfName as $key => $value) {
                        echo "GPA: ".$value."<br>";
                }
        }
        
        //Sắp xếp mảng giảm dần theo value sử dụng sort()
        echo "<br>Sắp xếp mảng giảm dần theo value sử dụng krsort() trong PHP (student = array(\"James\"=>array(\"GPA\"=> 8),\"Peter\"=>array(\"GPA\"=> 6),\"Ron\"=>array(\"GPA\"=> 9)))<br>";
        krsort($student);
        foreach ($student as $name => $arrOfName) {
                echo "Name: ".$name.", ";
                //$value = GPA sẽ có giá trị tương ứng với từng name vd (James: 8)
                foreach ($arrOfName as $key => $value) {
                        echo "GPA: ".$value."<br>";
                }
        }

        //Chuỗi
        //Thêm "" và ''
        echo "<br>Thêm nháy kép vào chuỗi strDoubleFlases<br>";
        $strDoubleFlases = "Nguyễn Trí \"Tín\"<br>";
        echo "strDoubleFlases = ". $strDoubleFlases;

        echo "<br>Thêm nháy đơn vào chuỗi strSingleFlases<br>";
        $strSingleFlases = "Nguyễn Trí 'Tín'<br>";
        echo "strSingleFlases = ". $strSingleFlases;

        //Nối chuỗi
        echo "<br>Nối chuỗi sử dụng dấu \".\"<br>";
        echo "Nguyễn "." Trí "." Tín <br>";

        //Tìm độ dài chuỗi
        echo "<br>Nối chuỗi sử dụng strlen(???)<br>";
        echo "Độ dài của chuỗi \"Nguyễn Trí Tín\" là: ".strlen("Nguyễn Trí Tín") ."<br>";

        //Đổi chữ thường thành chữ HOA
        echo "<br>Đổi chữ thường thành chữ HOA sử dụng hàm strtoupper(???)<br>";
        echo "\"nguyen tri tin\" => \"". strtoupper("nguyen tri tin") ."\"<br>";

        //Đổi chữ HOA thành chữ thường
        echo "<br>Đổi chữ HOA thành chữ thường sử dụng hàm strtolower(???)<br>";
        echo "\"NGUYEN TRI TIN\" => \"". strtolower("NGUYEN TRI TIN") ."\"<br>";

        //Viết hoa đầu câu
        echo "<br>Viết hoa đầu câu sử dụng hàm ucfirst(???)<br>";
        echo "\"nguyễn trí tín\" => \"". ucfirst("nguyễn trí tín") ."\"<br>";

        //Viết hoa chữ cái đầu
        echo "<br>Viết hoa chữ cái đầu sử dụng hàm ucwords(???)<br>";
        echo "\"nguyễn trí tín\" => \"". ucwords("nguyễn trí tín") ."\"<br>";

        //Xóa khoảng trắng đoạn đầu và đoạn cuối trong chuỗi
        echo "<br>Xóa khoảng trắng đoạn đầu và đoạn cuối trong chuỗi sử dụng hàm trim(???)<br>";
        echo "\" nguyễn trí tín \" => \"". trim(" nguyễn trí tín ") ."\"<br>";

        //Cắt chuỗi sử dụng hàm substr
        echo "<br>Cắt chuỗi sử dụng hàm substr(???, int start[int length])<br>";
        $str = "NguyenTriTin";
        echo "<br>str = ".$str."<br>";
        echo "<br>Lấy từ ký tự thứ 3 cho đến cuối chuỗi substr(str, 3)<br>";
        echo substr($str, 3)."<br>";
         echo "<br>Từ ký tự thứ 3 lấy liên tiếp 5 ký tự substr(str, 3,5)<br>";
        echo substr($str, 3,5)."<br>";
         echo "<br>Lấy từ ký tự thứ 7 và bỏ 2 ký tự cuối chuỗi substr(str, 7,-2)<br>";
        echo substr($str, 7,-2)."<br>";
        echo "<br>Lấy từ ký tự thứ 3 tính từ phải qua trái cho đến hết chuỗi (str, -3)<br>";
        echo substr($str, -3)."<br>";
        echo "<br>Lấy từ ký tự thứ 3 tính từ cuối chuỗi trở về và lấy 2 ký tự từ theo chiều từ trái qua phải substr(str, -3, 2)<br>";
        echo substr($str, -3, 2)."<br>";
        echo "<br>Lấy từ ký tự thứ 8 tính từ cuối chuỗi trở về và bỏ 4 ký tự cuối cùng tính từ trái qua phải substr(str, -8, -4)<br>";
        echo substr($str, -8, -4)."<br>";

        //Tách chuỗi sử dụng hàm strstr(???, ký tự muốn cắt) tương tự (String.spit() Java)
        echo "<br>Tách chuỗi sử dụng hàm strstr(\"nguyentritin.com\", .)<br>";
        echo strstr("nguyentritin.com", ".");

        //Tìm kiếm vị trí chuỗi strpos(???, chuỗi cần tìm vị trí) tương tự (indexOf() trong Java)
        echo "<br><br>Tìm kiếm vị trí chuỗi con trong chuỗi cha sử dụng hàm strpos(\"nguyentritin.com\", \"tin\")<br>";
        echo "Vị trí của chuỗi \"tin\" trong chuỗi \"nguyentritin.com\" là: ".strpos("nguyentritin.com", "tin");


?>      
</body>
</html>
