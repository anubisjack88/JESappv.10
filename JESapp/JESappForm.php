<!DOCTYPE HTML>
<HTML>
<head>
<link rel="stylesheet" href="Formval.css">
</head>
<body>
<img src="https://78.media.tumblr.com/1d9b937b4f84ab19ff2a79cc6cc209ad/tumblr_obskx97ns11rk08f0o1_500.gif";
<h2><font color="red"> PHP Form Validation: Get that data!</font> </h2>
<form method="post" action="
<?php
?>">
Name: <input type="text" name="name">
<br><br>
E-mail: <input type="text" name="email">
<br><br>
Website: <input type="text" name="website">
<br><br>
Comment Section: <textarea name="comment" rows="5" cols="40"></textarea> 
<br><br>
Race:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male 
<input type= "radio" name="gender" value="Do not wish to disclose.">Do not wish to disclose.
<input type= "radio" name="gender" value="I am dog! FEAR ME!">K-9
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
  
  $comment = test_input($_POST["gender"]);
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
echo "<h2> Result of Form Submited:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>