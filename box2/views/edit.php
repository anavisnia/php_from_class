<?php require DIR.'views/top.php' ?>
<h1><?= $pageTitle ?></h1>
<?php require DIR.'views/menu.php' ?>
<form action="<?= URL ?>update" method="post">
    Bananas in box: <input type="text" name="count" value="<?= $box->banana ?>">
    <button type="submit">Edit</button>
</form>
<?php require DIR.'views/bottom.php' ?>