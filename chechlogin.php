<?php
require "konekcija.php";
if(isset($_REQUEST['username']) AND isset($_REQUEST['password']))
{
    $upit="SELECT * FROM users WHERE username='".$_REQUEST['username']."' AND password='".md5($_REQUEST['password'])."'";
    $result=$connection->query($upit);
    if($result->num_rows>0)
    {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user']=$row;
        header("Location: index.php");
    }
    else
    {
        setcookie("notice","Login failed. Wrong username or password!",time()+(86400*30),"/");
        header("Location:login.php");
    }

}