<?php

$student_id = $_POST['student_id'];
$inventory_id = $_POST['inventory_id'];

echo $student_id;

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $loan = $conn->prepare("INSERT INTO loan( student_id, inventory_id)
    VALUES ( :student_id, :inventory_id)");
    // use exec() because no results are returned




    $loan->bindParam(':student_id', $student_id);
    $loan->bindParam(':inventory_id', $inventory_id);

    $loan->execute();

    echo "Loan created";
    header("Location: http://localhost:8888/inventory/index.php");
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>