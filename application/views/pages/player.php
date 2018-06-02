<?php
/*
 *
 * $name                имя
 * $last_name           фамилия
 * $nick                ник
 * $avatar              ава
 * $team                тима
 * $team_country        страна тимы
 *
 * matches:              последние матчи (тут кинуть код с главной страницы)
 *
 * $matches = [team_1 => [score => 25, title => team_title], team_2 => [score => 40, title => team_title]]
 *
 */
?>

    <h3>Страница для информации об игроке</h3>

<?php
if ($player == "not_found") {
    ?>
    <h4>Игрок с таким id или ником не найден.</h4>
    <?php
} else {
    ?>

    <img width='48' src='<?= $player->avatar ?>'>
    <?= $player->name ?>[<?= $player->nick ?>]<?= $player->last_name ?>
    (from <span title='<?= $player->team->country->title ?>'>[<?= $player->team->country->short_title ?>]</span>
    <a href="/team/<?= $player->team->title ?>"><?= $player->team->title ?></a>)

    <?php
}

