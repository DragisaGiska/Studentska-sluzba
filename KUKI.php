<?php
if(isset($_COOKIE['notice']))
{
    ?>
<div class="notice">
    <?php
    echo $_COOKIE['notice'];
    ?>
</div>
<?php
    setcookie("notice","",time()-3600,"/");
}
?>