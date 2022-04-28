<!DOCTYPE html>
<html lang="en">
	
<div class="container">
<div class="col-sm-4">
<body>
<a href="visigyvunai.csv" download>Download File visigyvunai.csv</a>
</body>
</div> 	
</html>

<?php
if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file) && preg_match('/\.csv$/',$file)) {
	header('Content-Type: application/pdf');
	header("Content-Disposition: attachment; filename=\"$file\"");
	readfile($file);
	}
}
?>

<?php

// jungtis, pakeiskite db
$link= mysqli_connect("localhost", "root", "", "prieglauda");
// uzklausos ivykdymas, pakeiskite lenteles varda
$query= mysqli_query($link, "select kategorija.pavadinimas as pavadinimas, gyvunai.amzius as amzius,  gyvunai.vardas as vardas, gyvunai.aprasas as aprasas from gyvunai,kategorija WHERE gyvunai.kategorija_id=kategorija.kategorija_id");

//atidarom/sukuriam failą
$myfile = fopen("visigyvunai.csv", "w") or die("Unable to open file!");
$txt = "Kategorija, Vardas, Amzius, Aprasas \n";
fwrite($myfile, $txt);

// po eilute is duombazes nuskaitome ir atliekame veiksmus
while ($result= mysqli_fetch_assoc($query)){
     "<div>";
     "<h1>".$result['pavadinimas']."</h1>"; // apjungimas html ir php 
     $result['vardas']."<br>";
     $result['amzius']."<br>"; // skliaustuose  stulpelio nr
     $result['aprasas'];
 //   echo "</div>"; // html isspausdinimas naudojant php instrukcija echo

// irasom į CSV 
    $txt ="Kategorija"; $txt =$result['pavadinimas']; 
    fwrite($myfile, $txt);
    $txt = $result['vardas'];
    fwrite($myfile, $txt);
    $txt = $result['amzius'];
    fwrite($myfile, $txt);
    $txt = $result['aprasas'];    
   fwrite($myfile, $txt);    
?>
        
<?php 
}
fclose($myfile);
?>




