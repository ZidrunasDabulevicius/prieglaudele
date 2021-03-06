<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gyvunu prieglauda</title>
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
      background-color: <img src="https://clipartmag.com/images/cartoon-dog-paw-1.jpg" alt="Logo" style="width:35px;height:35px"">;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 25%; /* Set width to 100% */
      margin: auto;
      min-height:100px;
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
      <a class="navbar-brand" href="#"><img src="https://clipartmag.com/images/cartoon-dog-paw-1.jpg" alt="Logo" style="width:25px;height:25px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./pagrindinis.php">Home</a></li>
        <li><a href="./pages/apiemus.php">Apie mus</a></li>
        <li><a href="pages/priglauskgyvuna.php">Priglausk gyvūną</a></li>
        <li><a href="./pages/atiduotigyvuna.php">Atiduoti augintinį</a></li>
        <li><a href="#">Finansinė parama</a></li>
        <li><a href="#">Kontaktai</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
      
      <li><a href="#"><span class=""></span>
       
	 <?php
	 
        if (isset($_COOKIE['vartotojas'])) {
             echo '<h5>Sveiki, ' . $_COOKIE['vartotojas'];
             echo '<li><a href="./pages/atsijungti.php"><span class="glyphicon glyphicon-log-out"></span> Atsijungti</a></li>';
        }
        else {
        ?>
        </a></li>
      	<li><a href="./pages/registracija.php"><span class="glyphicon glyphicon-registration-mark"></span> Registruotis</a></li>
        <li><a href="./pages/prisijungimas.php"><span class="glyphicon glyphicon-log-in"></span> Prisijungti</a></li>
        
     <?php }?> 
             
 
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://cdn.sanity.io/images/0vv8moc6/dvm360/e28735abb3f1073399b64e4ee92b900ed556c357-5314x3543.jpg/AdobeStock_257182690.jpeg?fit=crop&auto=format" alt="Image" style="width:640px;height:360px">
        <div class="carousel-caption">
          <h3>Paremkite arba priglauskite</h3>
          <p>Meilė ir rūpestis</p>
        </div>      
      </div> 

      <div class="item">
        <img src="https://www.ovrs.com/blog/wp-content/uploads/2019/11/OVRS-Shelter-shutterstock_1030084558.jpg" alt="Image" style="width:640px;height:360px">
        <div class="carousel-caption">
          <h3>Suteik man namus</h3>
          <p>Ir būsime geriausi draugai</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Gyvūnai</h3><br>
   <div class="col-sm-4"> 
    <a href="./pages/sunys.php">Šunys </a>
      <img src="https://ggsc.s3.amazonaws.com/images/made/images/uploads/The_Science-Backed_Benefits_of_Being_a_Dog_Owner_300_200_int_c1-1x.jpg" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image">
    </div>
  <div class="row">	
    <div class="col-sm-4">
    <a href="./pages/kates.php">Katės </a>
      <a href="#"><img src="http://images6.fanpop.com/image/photos/36800000/Cat-cats-36871220-2500-1695.jpg" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image"></a>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <a href="./pages/kiti.php">Kiti </a>
      <img src="https://static.etaplius.lt/media/etaplius_gallery_image/5c4b03592d32a/guinea-pig-cavy-pet-guinea-60693.jpeg" alt="Logo" style="width:300px" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>
</div>

<footer class="container-fluid text-center">
  <p>2022 © KSU.lt, visos teisės saugomos</p>
</footer>

</body>
</html>