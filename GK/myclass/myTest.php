<?php
class myClass
{
        function myFile($tmp, $des) {
                return move_uploaded_file($tmp, $des);
        }
}

?>