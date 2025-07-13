<?php

$server="localhost";
$username="root";
$password="";
$db="ecom";


$link=new mysqli($server,$username,$password,$db);


if($link->connect_error){
    die("Error:" . $link->connect_error);
}



?>