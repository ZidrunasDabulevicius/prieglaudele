<?php
print_r($_POST);
require 'functions.php';

if(!empty($_POST)) {
    
    $selectUser = "SELECT * FROM users WHERE vartotojo_vardas='".$_POST['vartotojo_vardas']."';";
    $result = selectData($selectUser)->fetch_assoc();
    // print_r($result);
    
    
    
    if($result !== null) {
        if($result["admin"]==1){header('Location: ./admin.php');}
        if($result["slaptazodis"] == md5($_POST['slaptazodis'])) {
            setcookie('vartotojas', $result["vartotojo_vardas"], time()+60*60*24, "/");
            header('Location: ../pagrindinis.php');
        }
        
    } else {
        header('Location: ./prisijungimas.php');
    }
    
}