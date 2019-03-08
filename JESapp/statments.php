<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO servers (OEM , Modle , Deployment_Type , UPC)
    VALUES (:OEM, :Modle, :Deployment_Type , :UPC)");
    $stmt->bindParam(':OEM', $OEM);
    $stmt->bindParam(':Modle', $Mod);
    $stmt->bindParam(':Deployment_Type', $Deploy);
    $stmt->bindParam(':UPC' , $upc);
    // insert a row
    $OEM = "John";
    $Mod = "Doe";
    $Deploy = "john@example.com";
    $upc = "";
    $stmt->execute();


    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 