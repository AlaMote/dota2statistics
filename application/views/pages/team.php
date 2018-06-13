<?php

/*
 *
 * $team->title
 * $team->country->title
 * $team->country->short_title
 *
 * $players = $team->players->find_all()
 *
 * $players->name
 * $players->last_name
 * $players->nick
 * $players->avatar
 *
 * */

?>
    <h3>Страница с информацией об одной тиме</h3>

<?php
if ($team == "not_found") {
    ?>
    <h4>Команда с таким id или названием не найдена.</h4>
    <?php
} else {
    ?>
    <span title='<?= $team->country->title ?>'>[<?= $team->country->short_title ?>]</span> <?= $team->title ?>
    <br>
    <br>
    <?php
    $players = $team->players->find_all();
    foreach ($players as $p) {
        print_r($p);
        ?>
        <img width='48' src='<?= $p->avatar ?>'> <a href="/player/<?= $p->nick ?>"><?= $p->name ?> [<?= $p->nick ?>] <?= $p->last_name ?></a>
        <br>
        <br>
        <?php
    }
}