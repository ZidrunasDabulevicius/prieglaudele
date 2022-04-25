<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please, login</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['vartotojas'])) {
        header('Location: ../pagrindinis.php');
    }
    ?>
    

    <form action="./checkUser.php" method="post">
        <input required name="vartotojo_vardas" type="text" placeholder="Vartotojo vardas"><br> <br>
        <input required name="slaptazodis" type="password" placeholder="Slaptazodis"> <br><br>
        <input type="submit" name="prisijungti" value="Prisijungti">
    </form>
</body>
</html>