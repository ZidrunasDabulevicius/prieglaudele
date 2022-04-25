
<?php

function connectToDB($servername='localhost', $username='root', $password='', $db='prieglauda') {
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // Check connection
    if ($conn->connect_error) {
        return $conn->connect_error;
    } else {
        return $conn;
    }
}

function insertData($query) {
    $result = connectToDB()->query($query);
    return $result;
}

function selectData($query) {
    $row = connectToDB()->query($query);
    if(!empty($row)) {
        return $row;
    } else {
        return false;
    }
}

