<?php 
	
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";
$errors = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }
	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['OEM'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['OEM'];
			$sql = "INSERT INTO 'OEM' ('OEM') VALUES ('$OEM')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	

//This block of code is for Modle.
	try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    }
	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['Modle'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['Modle'];
			$sql = "INSERT INTO 'Modle' ('Modle') VALUES ('$Modle')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	






	?>

<!DOCTYPE html>
<html>
<head>

<img src= http://store.orbcomm.com/images/gal_38_MX84_IMAGE.JPG>
<img src= https://www.quickserv.co.th/products/15122016-093730-Server.jpg>
<img src= https://www.trippodo.com/86396/ebay.jpg>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  
</ul>

<script>

    }
  }
}
</script>
<body>

	<div class="heading">
		<h2 style="font-style: 'Helvetica';">JESapp v1.0</h2>
        
	</div>
	<form method="POST" action="add.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<input type="submit" id="add_btn" class="add_btn" value="Submit server OEM">

	</form>
  <form method="POST" action="delete.php" class="input_form">
  <input type="text" name="task" class="task_input">
  <input type="submit" id="delete_btn" class="delete_btn" value="Remove OEM from Database">
  
	
	<form method="POST" action="add.php" class="input_form">
		<input type="text" name="task" class="task_input">
		<input type="submit" id="add_btn" class="add_btn" value="Submit server Modle">

		<form method="POST" action="delete.php" class="input_form">
  <input type="text" name="task" class="task_input">
  <input type="submit" id="delete_btn" class="delete_btn" value="Remove OEM from Database">



	
	</form>
	
<form method="POST" action=""
    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</body>

</html>