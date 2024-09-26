<?php
$username = $_POST['username'];
$password = $_POST['password'];

$stored_username = 'user';
$stored_password = 'password123';

if ($username == $stored_username && $password == $stored_password) {

  header('Location: protected.html');
  exit();
} else{
  echo "Invalid credentials.";
}
?>
