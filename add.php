<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

//This button will add whatever is entered into box.
//Make sure to make add statments for all of the Rows ie.OEM Modle Deployment Type.
try { 
    if(!empty($_POST ['task'])&& isset($_POST['task'])){
        $task = $_POST['task'];
        $conn = new PDO("mysql:host=localhost;dbname=todo", $username, $password);
  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO servers (OEM) VALUE ('$task')";
    
        $conn->exec($sql);
        echo "New record created successfully";
    }

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
