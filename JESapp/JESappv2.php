<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";

try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "You have connected successfully to the JES Database. Please enter the required information below.";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 



<!DOCTYPE HTML>
<HTML>
<head>
<!-- Change this code block if you would like to add more style to the app when the time comes. -->
<link rel="stylesheet" href="Formval.css">
</head>
<body>
<!-- <img src="https://78.media.tumblr.com/1d9b937b4f84ab19ff2a79cc6cc209ad/tumblr_obskx97ns11rk08f0o1_500.gif"; -->
<h2><font color="red"> JESappv2.0</font> </h2>
<form method="post" action="
<?php
?>">
OEM: <input type="text" name="Name">
<br><br>
Modle: <input type="text" name="OEM">
<br><br>
Deployment Type: <input type="text" name="Deploy">
<br><br>
: <textarea name="comment" rows="2" cols="40"></textarea> 
<br><br>
OEM:
<input type="radio" name="Server" value="Cisco">Cisco
<input type="radio" name="Server" value="Dell">Dell
<input type= "radio" name="Server" value="HP">HP.
<input type= "radio" name="Server" value="Oracle">Oracle
<br><br>
<input type="submit" name="submit" value="Submit">
</form>


<?php
if ( ! empty($_POST['Name'])){
    $name = $_POST['Name'];
    $OEM = $_POST['OEM'];
    $Modle = $_POST['Modle'];
  
    echo $name;
    echo $Modle;
}

// $name = $email = $gender = $comment = $website = "";
// $name = $_POST["Name"];
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["Name"];
//     $email = test_input($_POST["email"]);
  
//   $comment = test_input($_POST["gender"]);
// }

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

?>