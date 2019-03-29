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

    $person = $conn->prepare("UPDATE `student` SET first_name = :first_name, last_name = :last_name, a_number = :a_number, email = :email WHERE id = :id");

    // use exec() because no results are returned

    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $a_number = $_POST['a_number'];
    $email = $_POST['email'];


    $person->bindParam(':id', $id);
    $person->bindParam(':first_name', $first_name);
    $person->bindParam(':last_name', $last_name);
    $person->bindParam(':a_number', $a_number);
    $person->bindParam(':email', $email);

    $person->execute();

//    echo "Successfully updated";
    header("Location: http://localhost:8888/inventory/index.php");

    $conn = null;

} else {

    $person = $conn->prepare("SELECT * FROM student WHERE id = :id");
    $person->bindParam(':id', $id);
    $person->execute();

    // set the resulting array to associative
    $student = $person->fetchAll();

    echo '
        <form action="/inventory/database/update-student.php" method="post">
             
            <header>
            <h1 class="text-center">PRO-EDGE INVENTORY TRACKER  <h1>
             </header>
            <input type="hidden" name="id" value="'.$student[0]['id'].'">
            <input type="hidden" name="form_submitted" value="true">
            First name:<br>
            <input type="text" name="first_name" value="'.$student[0]['first_name'].'">
            <br>
            Last name:<br>
            <input type="text" name="last_name" value="'.$student[0]['last_name'].'">
            <br>
            email:<br>
            <input type="text" name="email" value="'.$student[0]['email'].'">
            <br>
            A number:<br>
            <input type="text" name="a_number" value="'.$student[0]['a_number'].'">
            <br><br>
            <input type="submit" value="Submit">
            
            <style>
        
            html {
                background-image: radial-gradient(grey, #D3D3D3);
                /*background-image: url(uindy_image.png);*/
                /*no-repeat center center fixed;*/
            }
           h1{background-color: #8B0000}
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <style>
        </form>';

}