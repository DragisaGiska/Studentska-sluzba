<?php
session_start();
require "konekcija.php";
if(isset($_REQUEST['year']))
{
    $upit = "SELECT * FROM grades JOIN subjects ON subjects.ID=subject_id WHERE user_id='".$_SESSION['user']['ID']."' ";
    if($_REQUEST['year']!=0)
        $upit.="AND subjects.year='".$_REQUEST['year']."'";
  mysqli_set_charset($connection,"utf-8");
    $result = $connection->query($upit);
    ?>
<link rel="stylesheet" href="css.css">
<table>
    <tr>
        <th>Predmet</th>
        <th>Godina</th>
        <th>Ocjena</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?= $row['name']?></td>
        <td><?= $row['year']?></td>
        <td class="ocjena"><?= $row['grade']?></td>
    </tr>
        <?php
    }
    ?>
</table>
<?php
}
?>