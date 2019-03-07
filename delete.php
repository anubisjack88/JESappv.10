<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

//You will need to make a new delete statment for all of the records in the database.
//When you press the delete button it is removing what ever the add button added.
try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM servers WHERE OEM= 'Mx84'";
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>