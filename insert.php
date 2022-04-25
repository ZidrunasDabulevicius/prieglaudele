<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
  
<body>
    <center>
        <?php
  
       
        $conn = mysqli_connect("localhost", "root", "", "prieglauda");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking  values from the form data(input)
        $catid =  $_REQUEST['catid'];
      
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO kategorija (pavadinimas)  VALUES ('$catid' )";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>