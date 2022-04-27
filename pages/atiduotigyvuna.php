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

<!-- Container (Contact Section) -->
<div class="container">
  <h3 class="text-center">Atiduodamas gyvūnas</h3>
  <p class="text-center"><em>Užpildykite laukus: </em></p>

    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Kategorija" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Vardas" type="text" required>
        </div>	
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Amžius" type="text" required>
        </div>
        <div class="row">
        <div class="col-md-12 form-group">  
      <label class="form-label" for="customFile">Pasirinkti nuotrauką:</label>
	  <input type="file" class="form-control" id="customFile" />
        <br>
           <a class="btn btn-large btn-primary" data-toggle="confirmation">Pridėti nuotrauką</a>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Aprašymas" rows="2"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Pridėti</button>
        </div>
      </div>
    </div>
  </div>
</div>
 
</body>
</html>
