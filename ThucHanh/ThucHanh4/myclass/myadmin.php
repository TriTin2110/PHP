<?php
include ('myclass.php');
class myadmin extends myclass
{
        function implementProduct($sql) {
                $link = $this->getConnection();
                if (mysql_query($sql, $link)) {
                        
                        return true;
                } else {
                        
                        return false;
                }
        }

}


?>