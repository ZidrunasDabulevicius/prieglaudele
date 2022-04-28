<?php
if (isset($_COOKIE["vartotojas"])){
    header("Location: ../pagrindinis.php");
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="peradresavimas.php" method="POST">

          <label for="vartotojo_vardas">Iveskite vartotojo varda:</label><br>
          <input type="text" name="vartotojo_vardas" required><br><br>
          <label for="slaptazodis">Iveskite slaptazodi:</label><br>
          <input type="text" name="slaptazodis" required><br><br>
          <label for="elpastas">Iveskite el pasta:</label><br>
          <input type="text" name="elpastas" required><br><br>
          <input type="hidden" name="slapukas">
          <input type="submit" value="Registruotis">
      </form>

    </body>
</html>