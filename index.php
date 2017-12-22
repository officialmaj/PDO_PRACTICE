<?php

$servername = "sql1.njit.edu";
$username = "sa646"
$password = "sweeney53";
$dbname = "yz746";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully.".'<br /><br />';

}


?>

