<?php

    define ('DB_HOST', 'localhost');
    define ('DB_USER', 'root');
    define ('DB_PASSWORD', '');
    define ('DB_NAME', 'doc_system-login');

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die (mysqli_connect_errno);

?>
