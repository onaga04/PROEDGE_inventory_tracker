<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "tracker1";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM inventory");
    $stmt->execute();

    // set the resulting array to associative
    $inventory = $stmt->fetchAll();

//    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//        echo $v;
//    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM student");
    $stmt->execute();

    // set the resulting array to associative
    $student = $stmt->fetchAll();

//    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
//        echo $v;
//    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "BOB";
    echo $student_id;
//    $stmt = $conn->prepare("SELECT * FROM inventory, student WHERE inventory.id = :inventory_id AND student.id = :student_id" );
    $stmt = $conn->prepare("SELECT * FROM loan INNER JOIN student ON student.id = loan.student_id INNER JOIN inventory ON inventory.id = loan.inventory_id" );
//    $stmt = $conn->prepare("SELECT * FROM inventory, student WHERE inventory.id = '$inventory_id' AND student.id = '$student_id' " );

    $stmt->execute();
    $loans = $stmt->fetchAll();
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";

?>



 <!Doctype HTML>
      <html>

        <style>
            html {
                background-image: radial-gradient(grey, #D3D3D3);
                /*background-image: url(uindy_image.png);*/
                /*no-repeat center center fixed;*/
            }
           h1{background-color: #8B0000}

            .create-form { display:none;}
        </style>
        <head>
            <title>Page Title</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Latest compiled and minified CSS -->
            <style>
                /*main {background-color: #D3D3D3;}*/
                main {background-image: radial-gradient(grey, #D3D3D3);}
                footer{background-color: #D3D3D3;}
            </style>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

            <link rel="stylesheet" href="/inventory/assets/css/style.css">

            <!-- jQuery library -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

            <script src="/inventory/assets/js/javascript.js"></script>
        </head>

        <body>

          <header>
            <h1 class="text-center">PRO-EDGE INVENTORY TRACKER  <h1>
          </header>
         </body>
      </html>
   
   

