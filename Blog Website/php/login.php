<?php 

session_start();

$db = mysqli_connect("localhost", "user", "password", "blogsite");
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$password = hash('sha512', $password);
$query = "SELECT id FROM author WHERE email = '$email' AND password= '$password'";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) == 1) {
    $_SESSION['author'] = mysqli_fetch_array($result)[0];
    header("Location: https://localhost/Blog Website/admin/insert_post.html");
}else {
    header("Location: https://localhost/Blog Website/admin/login.php?error=1");
};

?>