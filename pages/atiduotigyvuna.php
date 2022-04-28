<!DOCTYPE html>
<?php
$user = 'root';
$pass = '';
$db = 'prieglauda';

$con = mysqli_connect("localhost", $user, $pass, $db);

  $sql = "SELECT * FROM `kategorija`;";
  $kategorija = mysqli_query ($con, $sql);
?>

<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
   
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="https://clipartmag.com/images/cartoon-dog-paw-1.jpg" alt="Logo" style="width:25px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="../pagrindinis.php">Home</a></li>
        <li><a href="./apiemus.php">Apie mus</a></li>
        <li><a href="./priglauskgyvuna.php">Priglausk gyvūną</a></li>
        <li><a href="./atiduotigyvuna.php">Atiduoti augintinį</a></li>
        <li><a href="#">Finansinė parama</a></li>
        <li><a href="#">Kontaktai</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="./registracija.php"><span class="glyphicon glyphicon-log-in"></span> Registruotis</a></li>
        <li><a href="./prisijungimas.php"><span class="glyphicon glyphicon-log-in"></span> Prisijungti</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Container (Contact Section) -->

<form action="upload.php" method="post" enctype="multipart/form-data">

<div class="container">
  <h3 class="text-center">Atiduodamas gyvūnas</h3>
  <p class="text-center"><em>Užpildykite laukus: </em></p>

    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-4 form-group">
<!--           <input class="form-control" id="kategorija" name="kategorija" placeholder="Kategorija" type="text" required>  -->





 <form id="L" name="form" method="post">
   <select name="kategorija">
       <?php

            while ($cat = mysqli_fetch_array(
                                $kategorija,MYSQLI_ASSOC)):;

                ?>
                    <option value="<?php echo $cat['kategorija_id'];
                    ?>">
                               <?php echo $cat['pavadinimas'];?>
                    </option>
                <?php
              endwhile;
              mysqli_close($con);
                ?>
  </select>
</form>

        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="vardas" name="vardas" placeholder="Vardas" type="text" required>
        </div>	
        <div class="col-sm-4 form-group">
          <input class="form-control" id="amzius" name="amzius" placeholder="Amžius" type="text" required>
        </div>
        <div class="row">
        <div class="col-md-12 form-group">  
      <label class="form-label" for="customFile">Pasirinkti nuotrauką:</label>
	  <input type="file" class="form-control" name="fileToUpload" id="fileToUpload" />
        <br>

<form action=””method=”post”>

	Dokumentacija:
	<input type="checkbox" name="dokumentacija" value="No" />


</form>
        
        
        
<!--            <a class="btn btn-large btn-primary" data-toggle="confirmation">Pridėti nuotrauką</a>  -->
           
<!--            <input type="submit" value="Upload Image" name="submit"><br><br>  -->
        </div>
      </div>
      <textarea class="form-control" id="aprasymas" name="aprasas" placeholder="Aprašymas" rows="2"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" name="submit">Pridėti</button>
        </div>
      </div>
    </div>
  </div>
</div>

</form> 

</body>
</html>
