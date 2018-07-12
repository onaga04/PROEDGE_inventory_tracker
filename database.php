<!DOCTYPE html>
<html>
    <title>Inventory Tracker</title>
<?php

echo "Hello World!";

$username = 'root';
$dsn = 'mysql:host=localhost; dbname=register';
$password = '703042vs!';


try{
    $db = new PDO($dsn, $username, $password);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected to the register database.";

}catch (PDOException $ex){
    echo "Connection failed ".$ex->getMessage();
}

//$servername = "localhost";
//$username = "root";
//$password = "inventory";
//$dbname = "tracker";
//
//$conn = new mysqli($servername, $username, $password, $dbname);
//
//if($conn->connect_error){
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected Successfully!" . "<br/>";

//var_dump($dbname);
//
//$sql = "CREATE TABLE Students (
//id INT UNSIGNEDAUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NUll,
//student_id VARCHAR (10) NOT NULL,
//email_address VARCHAR(60) NOT NULL,
//clothing_item VARCHAR(70) NOT NULL
//
//reg_date TIMESTAMP
//)";
//
//if($conn -> query($sql)== TRUE){
//    echo "Table clients created successfully " . "<br/>";
//}
//else {
//    echo " Error creating table: " . $link->error;
//}


$conn.close();
?>

</body>
</html>
