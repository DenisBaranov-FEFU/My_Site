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
            <div class="col-12 index">
                <h1>Authorize</h1>
           <?php
               if (!isset($_COOKIE['User'])) {
                ?>
                   <a href="/My_Site/registration.php">Sign up</a> or <a href="/My_Site/login.php">Log in</a>, to view the content!
               <?php
               } else {
                   // ����������� � ��
               }
            ?>  
    </div>    
</body>
</html>
