<?php
session_start();
if(!isset($_SESSION['user']))
{

}
?>
<html>
<header>
    <link rel="stylesheet" href="css.css">
    <script src="javascript.js"></script>
    <title>IIKOL-Site index</title>
    <div class="lzag">IIKOL Site Index</div>
    <div class="dzag">Welcome <b><?= $_SESSION['user']['firstname'] ?></b>, <a href="logout.php">Logout</a></div>
</header>
<body>
<br>
<br>
<br>
<div class="list">
    <?php
    include "selektlista.php";
    ?>
</div>
<br>
<div id="tabela">

</div>
<footer>
<?php
include "foother.php";
?></footer>

</body>
</html>
