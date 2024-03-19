<?php
class login
{
        function checkingAccount($user, $password) {
                if ($user == 'admin' && $password == '123')
                        return 1;
                else
                        return 0;
        }
        function checkingInput($user, $password){
                if ($user != 'admin' || $password != '123')
                        return 0;
                return 1;
        }
}
?>