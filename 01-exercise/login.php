<?php 
session_start();

$username = $_POST['username'];
$email = $_POST['email'];

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <?php if (isset($_SESSION['username']) && $_SESSION['username'] === "admin"): ?>
    <h1>Welcome, <?= $_SESSION['username'] ?></h1>
    <p>Your email is: <?= $_SESSION['email'] ?></p>
  <?php else: ?>
    <h1>Login failed</h1>
  <?php endif; ?>
</body>
</html>