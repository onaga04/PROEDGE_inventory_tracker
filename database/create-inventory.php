<?php

$description = $_POST['description'];
$color = $_POST['color'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $item = $conn->prepare("INSERT INTO inventory(description, color)
    VALUES (:description, :color)");
    // use exec() because no results are returned

    $item->bindParam(':description', $description);
    $item->bindParam(':color', $color);

    $item->execute();

    echo "New record created successfully";
    header("Location: http://localhost:8888/inventory/index.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


