<h3>Это страница одного матча</h3>

<?php

if ($match != "not_found") {

    $team_1 = $match->team_1->title;
    $team_2 = $match->team_2->title;

    $team_1_score = $match->team_1_score;
    $team_2_score = $match->team_2_score;

    $match_results = $match->match_results->find_all();

    echo $team_1 . " " . $team_1_score . " : " . $team_2_score . " " . $team_2;
    echo "<table class='table'>";

    echo "<tr><td>player</td><td>unit</td><td>team</td><td>gold</td><td>creep_kills</td><td>creep_denied</td><td>kills</td><td>deathes</td><td>assist</td><td>damage</td></tr>";

    foreach ($match_results as $row) {
        echo "<tr>";
        echo "<td>{$row->player->name} [{$row->player->nick}] {$row->player->last_name}</td>";
        echo "<td>{$row->unit->name}</td>";
        echo "<td>{$row->team->title}</td>";
        echo "<td>{$row->gold}</td>";
        echo "<td>{$row->creep_kills}</td>";
        echo "<td>{$row->creep_denied}</td>";
        echo "<td>{$row->kills}</td>";
        echo "<td>{$row->deathes}</td>";
        echo "<td>{$row->assist}</td>";
        echo "<td>{$row->damage}</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else {
    echo $match;
}