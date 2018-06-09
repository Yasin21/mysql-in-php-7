<?php

    require_once "mysql_support_lib.php";


    $connection = mysql_connect("localhost","root","");

    print_r($connection);