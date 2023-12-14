<?php
session_start();

if (!isset($_SESSION["user_id"])) {
  header("Location: login.php");
  exit();
}

$user_name = $_SESSION["user_name"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Welcome Page</title>
</head>

<body>
  <h2>Welcome <?php echo $user_name; ?>!</h2>
  <p>This is your welcome page.</p>
</body>

</html>