<?php
class Connnect
{
        function getConnection() {
                return mysqli_connect('localhost', 'sa', 'nguyentritin', 'sanpham');
        }

        function closeConnection($conn) {
                mysqli_close($conn);
        }
}

?>