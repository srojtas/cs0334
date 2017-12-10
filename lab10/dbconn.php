<?php
    $host = "srojtas001.mysql.guardedhost.com"; // SQL Host a la SIS Server
    $dbuser = "srojtas001_cs334lab10"; // Database user.
    $dbpassword = "ej39g4-cRD"; // Database password.
    $dbname = "srojtas001_cs334lab10"; // Name of the database itself
    
    $dbconnect = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
?>