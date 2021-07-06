<?php
/** @var \app\models\User $user */
/** @var \app\models\User[] $users */
?>
<?php if (!$user->id)  : ?>
    <h1 style="color: blue">Создание нового пользователя</h1>
<?php else : ?>
    <h1 style="color: blue">редактирование пользователя <span><?= $user->login ?></span></h1>
<?php endif; ?>
<form method="post" action="?c=user&a=getUpdateUser">
    <input type="hidden" name="idForUpdate" id="idForUpdate" value="<?= $user->id ?>">
    <input type="text" name="loginForUpdate" id="loginForUpdate" value="<?= $user->login ?>">
    <input type="text" name="nameForUpdate" id="nameForUpdate" value="<?= $user->name ?>">
    <br>
    <br>
    <input type="hidden" name="avatar" id="avatar" value="/no_avatar.png">
    <input type="text" name="passwordForUpdate" id="passwordForUpdate" value="<?= $user->password ?>">
    <input type="text" name="positionForUpdate" id="positionForUpdate" value="<?= $user->position ?>"><br>
    <p class="adminStat">Расширенные права</p>
    <select name="adminStat" id="adminStat">
        <option value="nothing">Значение не выбрано</option>
        <option value="yes">Да</option>
        <option value="no">Нет</option>
    </select>
    <?php if (!$user->id)  : ?>
        <input type="submit" value="добавить" style="cursor: pointer"><br><br>
    <?php else : ?>
        <input type="submit" value="отредактировать" style="cursor: pointer"><br><br>
    <?php endif; ?>
    <?php if (!$user->id)  : ?>
        <a href="?c=user&a=all">назад</a>
    <?php else : ?>
        <a href="?c=user&a=one&id=<?= $user->id ?>">назад</a>
    <?php endif; ?>
</form>