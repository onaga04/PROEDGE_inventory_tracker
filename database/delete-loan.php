<?php

$id = $GET['id'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $loan = $conn->prepare("DELETE FROM loan WHERE 'loan'.id = :id");
    // use exec() because no results are returned

    $loan->bindParam(':id', $id);

    $loan->execute();

    echo "Successfully deleted";
    header("Location: http://localhost:8888/inventory/index.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


