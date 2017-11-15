<?php

    define('DBNAME', 'store');
    define('DBUSER', 'root');
    define('DBPASS', 'damilolo');
    
    try {

        $conn = new PDO('mysql:host=localhost;DBNAME', DBUSER, DBPASS);
        
        $conn->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_SILENT);

    } catch (PDOException $err) {
        
    }



?>