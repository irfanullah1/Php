<h2>

<?php

$a=1;
$b=2;

if($a==$b)
{
    echo "1 is not equal to 2";
}else
{
    echo "$a is not equal to  $b";
}

echo "<br>";
$Name="Ahmad";
 if(is_string($Name))
 {
     echo "Yes $Name is a String  and Function ";
 }


$Studnet[0]="Ahmad";
$Studnet[1]="Khan Ali";

echo "</hr></br>";

echo "</hr></br>";
echo $Studnet[0];


$Accounts=Array("Jan","Zahir","hhhh");


echo "</hr></br>";

echo "</hr></br>";
foreach($Accounts as $Account){
        // echo "<br>Yousername: $Account";
        
    echo  "UserName : {$Account}<br>";


}
echo "</hr></br>";

echo "</hr></br>";

echo "<h1>User Info </h1>";



$Users=Array("Ahmad"=>"2222","Jan"=>"333333333");


foreach($Users as $user => $passowrd)
{
    echo "Yousrname:{$user} and Password:{$passowrd}<br>";
}














?>

</h2>
