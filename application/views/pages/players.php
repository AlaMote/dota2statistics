<?php

    /*
     *
     * $players = [[name, surname, nick, avatar, team_title, team_country], [...], ...]
     *
     * */

    foreach($players as $p) {
        ?>
        <img width='48' src='<?= $p->avatar ?>'>
        <?= $p->name ?>
        [<?= $p->nick ?>]
        <?= $p->last_name ?>
        (from <span title='<?= $p->team->country->title ?>'>[<?= $p->team->country->short_title ?>]</span>
        <a href="/team/<?= $p->team->title ?>"><?= $p->team->title ?></a>)
        <br>
        <br>

        <?php
    }

?>


<h3>Страница со списком всех игроков</h3>