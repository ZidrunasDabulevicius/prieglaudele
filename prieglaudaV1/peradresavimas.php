<?php
require 'functions.php';

if(!empty($_POST)) {

$newUser = "INSERT INTO users (vartotojo_vardas, slaptazodis, elpastas) VALUES('".$_POST['vartotojo_vardas']."',
 '".md5($_POST['slaptazodis'])."', '".$_POST['elpastas']."');";

if(insertData($newUser) === true) {
    header('Location: ./prisijungimas.php');
} else {
    header('Location: ./registracija.php?error=This username is already taken');
}

}