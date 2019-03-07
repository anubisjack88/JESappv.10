<?php 
    // initialize errors variable
	$errors = "";
	// connect to database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo";
try {
    $conn = new PDO("mysql:host=$servername;dbname=todo", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Gemar Connected to the SQL server.";
    }
catch(PDOException $e)
    {
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
  try {
    $conn = new PDO("mysql:host=$servername;dbname=Todo", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
try { 
    if(!empty($_POST ['OEM'])&& isset($_POST['OEM'])){
        $OEM = $_POST['OEM'];
        $sql = "INSERT INTO servers ('OEM')
        VALUE ('$OEM')";
    
        $conn->exec($sql);
        echo "New record created successfully";
    }
 elseif(!empty($_POST['done'])&& isset($_POST['done'])){
     $done = $_POST['done'];
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTOPN);
     $sql = "INSERT INTO servers (done)
     VALUES ('$done')";
     $conn->exec($sql);
     echo "New record updated successfully";
 } else{
     echo "Nope";
 }
    
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
	?>

<!DOCTYPE html>
<html>
<head>

<img src= http://store.orbcomm.com/images/gal_38_MX84_IMAGE.JPG>

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
		<input type="submit" id="add_btn" class="add_btn" value="Submit to the Database">

	</form>
  <form method="POST" action="delete.php" class="input_form">
  <input type="text" name="task" class="task_input">
  <input type="submit" id="delete_btn" class="delete_btn" value="Remove data from the Database">
  </form>

    <?php if (isset($errors)) { ?>
	<p><?php echo $errors; ?></p>
<?php } ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
</body>

</html>