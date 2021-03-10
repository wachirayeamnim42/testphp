<?php
    define("username","test");
    define("pass","ikwbH91GbCLxQA7d");
    define("host","localhost");
    define("db","test");
    $mysql = new mysqli(host, username, pass, db);

    if($mysqli->connect_errno){
        print "Filed to connect" .$mysqli->connect_error;
        exit();
    }
    else{
        echo "DB connected";
    }
?>