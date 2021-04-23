<?php

$db = new mysqli("localhost", "root", "", "Laravel");
$sql = "SELECT products.name,products.detail FROM products";
$result = $db->query($sql); 
 
while ($row = $result->fetch_assoc()) { 
 echo "{$row['name']} | {$row['detail']}<br />";
} 
 
$result->close();
$db->close();


?>