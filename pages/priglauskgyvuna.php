<!DOCTYPE html>
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
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;

  }
  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Apie mus</a></li>
        <li><a href="#">Priglausk gyvūną</a></li>
        <li><a href="#">Atiduoti augintinį</a></li>
        <li><a href="#">Finansinė parama</a></li>
        <li><a href="#">Kontaktai</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Registruotis</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Prisijungti</a></li>
      </ul>
    </div>
  </div>
</nav>
<footer class="container-fluid text-center">
  <h3>Priglausti gyvūnai</h3>  
  <form class="form-inline">
    <input size="50" placeholder="Įrašykite kategoriją,vardą arba amžių">
    <button type="button" class="btn btn-danger">Ieškoti</button>
    <button type="button" class="btn btn-danger">Pamatyti visus</button>
  </form>
  </footer>
  
	<div class="container">  
    <div class="col-sm-4">
    <a href="#">Katės </a>
      <a href="#"><img src="http://images6.fanpop.com/image/photos/36800000/Cat-cats-36871220-2500-1695.jpg" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image"></a>
    </div>
    <div class="col-sm-4"> 
    <a href="#">Šunys </a>
      <img src="https://ggsc.s3.amazonaws.com/images/made/images/uploads/The_Science-Backed_Benefits_of_Being_a_Dog_Owner_300_200_int_c1-1x.jpg" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="row">
    <div class="col-sm-4">
    <a href="#">Kiti </a>
      <img src="https://smallpetsite.com/wp-content/uploads/2020/01/50e2dc444256b114a6d98074cf213576083edbed535373407c2f7d_640.jpg?ezimgfmt=ng:webp/ngcb154" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>



<?php
// jungtis, pakeiskite db
$link= mysqli_connect("localhost", "root", "", "prieglauda");
// uzklausos ivykdymas, pakeiskite lenteles varda
$query= mysqli_query($link, "select kategorija.pavadinimas as pavadinimas, gyvunai.amzius as amzius, gyvunai.nuotrauka as nuotrauka from gyvunai,kategorija WHERE gyvunai.kategorija_id=kategorija.kategorija_id");

// po eilute is duombazes nuskaitome ir atliekame veiksmus
while ($result= mysqli_fetch_assoc($query)){
   // echo "<div>";
    //echo "<h1>".$result['pavadinimas']."</h1>"; // apjungimas html ir php
  //  echo $result['amzius']."<br>"; // skliaustuose  stulpelio nr
   // echo $result['nuotrauka'];
  //  echo "</div>"; // html isspausdinimas naudojant php instrukcija echo
   // ?>
   
    
  <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
      <div class="panel-heading"> <?php echo "<h1>".$result['pavadinimas']."</h1>";?></div>
        <div class="panel-heading">GYVŪNO VARDAS</div>
        <div class="panel-heading">AMŽIUS <?php echo "<h1>".$result['amzius']."</h1>";?> Metai</div>
    	 <img src="<?php echo $result["nuotrauka"]; ?>" class="img-responsive" style="width:100%" alt="Image" /><br /> 
        
        <div class="panel-footer">Trumpas aprašymas arba info apie dokumentus</div>
      </div>
    </div>  
    
    <?php 
}
?>


    
    
    
    

    </div>
  </div>
</div><br><br> 
<footer class="container-fluid text-center">
  <p>2022 © KSU.lt, visos teisės saugomos</p>
</footer>
</body>
</html>
