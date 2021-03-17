<?php
    define("username","test");
    define("pass","ikwbH91GbCLxQA7d");
    define("host","localhost");
    define("db","test");
    $mysql = new mysqli(host,username,pass,db);
    if ($mysql -> connect_errno) {
        echo "Failed to connect to Mysql: " . $mysql -> connect_errno;
        exit();
    }else{
        echo "DB connected";
    }
?>