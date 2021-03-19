<?php
    define("username","root");
    define("pass","");
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