<?php

    /*
     *
     * $team_title
     * $team_country
     *
     * $players = [[name, surname, nick, avatar], [...], ...]
     *
     * */

?>

<h3>Страница с информацией об одной тиме</h3>

<?php

echo $team_title . "<br>";
echo $team_country . "<br>";

print_r($players);

foreach($players as $p) {
    echo $p->name . " " . $p->last_name . " " . $p->nick . "<br>";
    echo "<img src='" . $p->avatar . "'>";
    echo "<br>";
}