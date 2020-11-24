<?php
require "konekcija.php";

$query = "SELECT DISTINCT year FROM subjects";

$result = $connection->query($query);
?>
Godina:
<select onchange="ucitajNovuTabelu(this);">
    <option value="0"></option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
        ?>
        <option value="<?= $row['year'] ?>">
            <?php
            echo $row['year'];
            ?>
        </option>
        <?php
    }
    ?>
</select>