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
    $sql = 'SELECT * FROM accounts where id < 6';
    $stmt = $conn->query($sql);
    echo "Number of Records: ". $stmt->rowCount() .'<br /><br />';
    $result = $stmt->setFetchMode(PDO::FETCH_NUM);

}


?>

