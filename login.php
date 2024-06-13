<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baranov D. B.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Sign up</h1>
            </div>
        </div>
        <div class="col-12">
            <form method="POST" action="login.php">               
                <div class="row form__reg"><input class="form" type="text" name="login" placeholder="Login"></div>
                <div class="row form__reg"><input class="form" type="password" name="password" placeholder="Password"></div>
                <button type="submit" class="btn_red btn_reg" name="submit">Continue</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php 
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'mydata');

if (isset($_POST['submit'])) {    
    $username = $_POST['login'];
    $pass = $_POST['password'];

    if (!$email || !$username || !$pass) die("Please enter all values");

    $sql = "SELECT * FROM users WHERE username='$login' AND pass='$pass'";
    $result = mysqli_query($link, $sql);

    if(!mysqli_query($link, $sql)){
        echo "Failed to add new user";
    }

    if (mysqli_num_rows($result) == 1) {
      setcookie("User", $username, time()+7200);
      header('Location: profile.php');
    } else {
      echo "wrong password or login";
    }

}
?>