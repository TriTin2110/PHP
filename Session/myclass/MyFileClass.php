<?php
class file
{
        function uploadFile($tmp_name, $folder){
                if (move_uploaded_file($tmp_name, $folder))
                        return true;
                return false;
        }
}
?>