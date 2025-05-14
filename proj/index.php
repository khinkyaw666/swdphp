<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>

  <form action="dashboard.php" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Login">
  </form>

  
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Simple authentication (for demo purposes)
    if ($username == "admin" && $password == "123456") {
        session_start();
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
       
    } else {
       echo "Falid username or password";
    }
}
?>