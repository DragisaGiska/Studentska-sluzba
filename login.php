<?php
session_start();
if(isset($_SESSION['user']))
{
    header("Location:index.php");
}
?>
<html>
<header>
<title>
IIKOL-Site
</title>
    <?php
    require "KUKI.php";
    ?>
<link rel="stylesheet" href="css.css">
    <script src="javascript.js"></script>
</header>
<body>
<div class="log">
    <H2>IIKOL Site</H2>
    <form action="chechlogin.php" method="post" onsubmit="return provjera();">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="Username"><br>
        <br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="Password" id="password"><br><br>
        <input type="submit" value="Log in">
    </form>
</div>
<footer>
    <label><i>© Copyright - 2018 - <a href="">Интернет технологије и програмирање</a></i></label>
</footer>
</body>
</html>
