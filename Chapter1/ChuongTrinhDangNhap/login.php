<?php
session_start();
if (isset($_REQUEST["txtUser"]) && isset($_REQUEST["txtPassword"])) {
        $_SESSION["txtUser"] = $_REQUEST["txtUser"];
        $_SESSION["txtPassword"] = $_REQUEST["txtPassword"];
}
if (isset($_SESSION["txtUser"]) && isset($_SESSION["txtPassword"])) {
        $user = $_SESSION["txtUser"];
        $password = $_SESSION["txtPassword"];
        if ($user == "admin" && $password == "123456")
        {
                echo "Welcome Admin <br>";
                echo "<a href='logout.php'>Logout</a>";
                
        }
                
        else
                echo "Wrong information";
}
