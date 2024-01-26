<?php
try {
    $env = parse_ini_file('.env');
    $host = $env["MySQL_DB_HOST"];
    $dbname = $env["MySQL_DB_NAME"];
    $username = $env["MySQL_DB_USER_NAME"];

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username);
        //echo "Connected to $dbname at $host successfully.";
    } 
    catch (PDOException $pe) {
        die ("Could not connect to the database $dbname :" . $pe->getMessage());
    }
}
catch (PDOException $pe) {
    $_SESSION['errMsg'] = "Database details are not correct";
    
}




?>