<?php 

session_start();
if (isset($_SESSION['author'])) {
  header("Location: http://localhost/Blog Website/login.php");
}

$db = mysqli_connect("localhost", "user", "password", "blogsite");
$email = mysqli_real_escape_string($db, $_POST['email']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = hash('sha512', $password);
$query = "INSERT INTO author (name, email, password) 
    VALUES ('$name', '$email', '$password')";
$result = mysqli_query($db, $query);

?>