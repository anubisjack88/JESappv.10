<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

//This button will add whatever is entered into box.
//Make sure to make add statments for all of the Rows ie.OEM Modle Deployment Type.

//The code block below is for the row "//OEM" located on the database.
//Making edits to this code will impact "//OEM" only.
// try { 
//     if(!empty($_POST ['task'])&& isset($_POST['task'])){
//         $task = $_POST['task'];
//         $conn = new PDO("mysql:host=localhost;dbname=todo", $username, $password);
  
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $sql = "INSERT INTO servers (OEM , Modle)  VALUE ('Cisco','MX84')";
//         $conn->exec($sql);
//         echo "New record created successfully <img src= http://store.orbcomm.com/images/gal_38_MX84_IMAGE.JPG>";
//     //This is the new code block.
    
//     }
//     else{
//         echo "You must enter the name of your equipment. If you have found this to be an error please contact the database admin. ";
        
//     }

//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;

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
// ?>


