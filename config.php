<?php
$con = new mysqli("localhost","root","","databaseName");

if($con-> connect_error)
{
    die("connection failed .".$con-> connect_error);
}
else
{
    echo "connection successful";
}


?>