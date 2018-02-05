<?php 
if(isset($_POST["opdrachten"]))
{   
    echo "gevonden: ".$_POST["opdrachten"];
    $JSON=$_POST["opdrachten"];
    file_put_contents("temp.txt",$JSON);
}else
{
    echo "geen opdrachten mee gegegeven";
}