<?php

try
{
    $con=new mysqli("localhost","root","","Laravel");
    $query="SELECT name,detail FROM products";
    
    $result=$con->query($query);

    while($row = $result->fetch_assoc())
    {
        echo "Name :{$row['name']} | detail:{$row['detail']}<br>";
    }



}catch(Exception $error)
{
    // echo "Conncetion Faild: {$error}";
}
$result->close();
$con->close();
?>