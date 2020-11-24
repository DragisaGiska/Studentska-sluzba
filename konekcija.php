<?php
$connection=mysqli_connect("localhost","root","","iikol");
mysqli_set_charset($connection,"UTF-8");
if($connection->connect_error)
{
    die("Connection error!!!");
}