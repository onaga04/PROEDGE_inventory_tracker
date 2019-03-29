<?php

$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $item = $conn->prepare("DELETE FROM inventory WHERE id = :id");
    // use exec() because no results are returned

    $item->bindParam(':id', $id);

    $item->execute();

    echo "Successfully deleted";
    header("Location: http://localhost:8888/inventory/index.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


