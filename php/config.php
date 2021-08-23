<?php 
  
    $domain = "zonemed.link/"; //exampleabc.com/
    $host = "localhost";
    $user = "root"; //Database username
    $pass = "PJSsY8zMTbeM"; //Database password
    $db = "urlShortener"; //Database name

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        echo "Database connection error".mysqli_connect_error();
    }
?>