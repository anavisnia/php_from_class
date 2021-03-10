<?php require DIR.'views/top.php' ?>
<h1><?= $pageTitle ?></h1>
<?php require DIR.'views/menu.php' ?>

<ul>
<?php foreach($boxes as $box) : ?>
    <li style="padding: 10px;">
        <span>ID: <?= $box->id?></span>
        <span>Count: <?= $box->banana ?></span>
        <a class="btn btn-outline-success" href="<?= URL ?>edit/<?= $box->id ?>">EDIT</a>
        <form action="<?= URL ?>create.php" method="post">
            <button type="submit" class="btn btn-outline-danger">DELETE</button>
        </form>
    </li>
<?php endforeach ?>
</ul>

<?php require DIR.'views/bottom.php' ?>