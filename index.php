<?php
$servername = "localhost";
$username = "root";
$password = "root";
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
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage().'<br />';
    die;
}
?>

<!DOCTYPE html>
<html>
<body>
<table border="1">
    <tr>
        <th>ID</th>
        <th>email</th>
       <!-- <th>fname</th>
        <th>lname</th>
        <th>phone</th>
        <th>birthday</th>
        <th>gender</th>
        <th>password</th>-->
    </tr>
    <?php while ($row = $stmt->fetch()) {?>
        <tr>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row[1]; ?></td>
            <!--<td><?php /*echo $row[2]; */?></td>
            <td><?php /*echo $row[3]; */?></td>
            <td><?php /*echo $row[4]; */?></td>
            <td><?php /*echo $row[5]; */?></td>
            <td><?php /*echo $row[6]; */?></td>
            <td><?php /*echo $row[7]; */?></td>-->
        </tr>
    <?php } ?>
</table>
</body>
</html>
