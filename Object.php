<?php
class Stundent
{
    public $Id=0;
    public $Name="";

    function Studnet ($name2)
    {
       
        $this->Name=$name2;
    }

    function get()
    {
        return $this->Name;
    }


}


$st1= new Stundent();
$st1->Studnet("Irfanullah");
$st_Name=$st1->get();

echo "<h3>Name of Object studnet is :{$st_Name}</h3>"




?>