<?php
session_start();
session_unset();
setcookie("notice","You have been successfully logged out!",time()+(86400*30),"/");
header("Location:login.php");