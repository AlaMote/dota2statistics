
<h3>Это страница всех матчей</h3>

<?php

foreach ($matches as $match) {
    echo "{$match->team_1->title} {$match->team_1_score} : {$match->team_2_score} {$match->team_2->title}<br>";
}