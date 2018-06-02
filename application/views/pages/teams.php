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
    <h3>Страница с информацией о всех тимах</h3>

<?php
foreach ($teams as $team) {
    ?>

    <span title='<?= $team->country->title ?>'>[<?= $team->country->short_title ?>]</span>
    <a href="/team/<?= $team->title ?>"><?= $team->title ?></a>
    <br><br>

    <?php
}