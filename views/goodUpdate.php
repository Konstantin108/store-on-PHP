<?php
/** @var \app\models\Good good */
/** @var \app\models\Good[] goods */
?>
<?php if (!$good->id)  : ?>
    <h1 style="color: blue">Добавление нового товара</h1>
<?php else : ?>
    <h1 style="color: blue">редактирование товара <span><?= $good->name ?></span></h1>
<?php endif; ?>
<form method="post" action="?c=good&a=getUpdateGood">
    <input type="hidden" name="idForUpdate" id="idForUpdate" value="<?= $good->id ?>">
    <input type="text" name="nameForUpdate" id="nameForUpdate" value="<?= $good->name ?>">
    <input type="text" name="priceForUpdate" id="priceForUpdate" value="<?= $good->price ?>"><br><br>
    <input type="text" name="infoForUpdate" id="infoForUpdate" value="<?= $good->info ?>">
    <?php if (!$good->id)  : ?>
        <input type="submit" value="добавить" style="cursor: pointer"><br><br>
    <?php else : ?>
        <input type="submit" value="отредактировать" style="cursor: pointer"><br><br>
    <?php endif; ?>
    <?php if (!$good->id)  : ?>
        <a href="?c=good&a=all">назад</a>
    <?php else : ?>
        <a href="?c=good&a=one&id=<?= $good->id ?>">назад</a>
    <?php endif; ?>
</form>