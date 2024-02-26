<?php
$userName = $_REQUEST['userName'];
$password = $_REQUEST['userPassword'];
if (isset($userName) && isset($password)) {
        if ($userName == 'admin' && $password == '123') {
                echo 'Welcome Admin';
        } else
                echo 'You are not Admin';
}
