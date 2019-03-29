<?php

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$a_number = $_POST['a_number'];
$email = $_POST['email'];


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $person = $conn->prepare("INSERT INTO student (first_name, last_name, a_number, email)
    VALUES (:first_name, :last_name, :a_number, :email)");
    // use exec() because no results are returned
    $person->bindParam(':first_name', $firstname);
    $person->bindParam(':last_name', $lastname);
    $person->bindParam(':a_number', $a_number);
    $person->bindParam(':email', $email);
    $person->execute();

    echo "New record created successfully";
    header("Location: http://localhost:8888/inventory/index.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}



$conn = null;
?>


