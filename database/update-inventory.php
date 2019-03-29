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
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

if($_POST['form_submitted'] == true) {
//
//    $servername = "localhost";
//    $username = "root";
//    $password = "root";
//    $dbname = "tracker1";
//
//    try {
//        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        $item = $conn->prepare("UPDATE inventory WHERE id = :id");
        $item = $conn->prepare("UPDATE `inventory` SET description = :description, color = :color WHERE id = :id");

        // use exec() because no results are returned

        $id = $_POST['id'];
        $description = $_POST['description'];
        $color = $_POST['color'];

        $item->bindParam(':id', $id);
        $item->bindParam(':description', $description);
        $item->bindParam(':color', $color);

        $item->execute();

//    echo "Successfully updated";
        header("Location: http://localhost:8888/inventory/index.php");
//    } catch (PDOException $e) {
//        echo $sql . "<br>" . $e->getMessage();
//    }

    $conn = null;

} else {

    $item = $conn->prepare("SELECT * FROM inventory WHERE id = :id");
    $item->bindParam(':id', $id);
    $item->execute();

    // set the resulting array to associative
    $inventory = $item->fetchAll();

    echo '
        <form action="/inventory/database/update-inventory.php" method="post">
        <header>
            <h1 class="text-center">PRO-EDGE INVENTORY TRACKER  <h1>
        </header>
        <style>
        
            html {
                background-image: radial-gradient(grey, #D3D3D3);
            }
           h1{background-color: #8B0000}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        </style>
            <input type="hidden" name="id" value="'.$inventory[0]['id'].'">
            <input type="hidden" name="form_submitted" value="true">
            Description:<br>
            <input type="text" name="description" value="'.$inventory[0]['description'].'">
            <br>
            Color:<br>
            <input type="text" name="color" value="'.$inventory[0]['color'].'">
            <br><br>
            <input type="submit" value="Submit">
        </form>';
    
}