<?php

try{
$db = new PDO("mysql:host=localhost;dbname=Laravel", "root", 
"");
    echo "Conncetion established";

}
catch (Exception $error) { 
 die("Connection failed: " . $error->getMessage());
} 


?>