<?php require(""); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Regsiter</h1>

    <form action="./formHandlers/registrationForm.php" method="post">
    <input type="email" name="email" id=""> <br>
    <input type="password" name="password" id=""> <br>
    <input type="submit" value="Register">
    </form>
</body>
</html>