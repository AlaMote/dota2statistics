<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Match_Result extends ORM
{
    protected $_table_name = "match_results";

    protected $_belongs_to = [
        'match' => [
            'model' => 'match',
            'foreign_key' => 'match_id'
        ],
        "player" => [
            'model' => 'player',
            'foreign_key' => 'player_id'
        ],
        "unit" => [
            'model' => 'unit',
            'foreign_key' => 'unit_id'
        ],
        "team" => [
            'model' => 'team',
            'foreign_key' => 'team_id'
        ]
    ];

   /*protected $_has_one = [
        "player" => [
            'model' => 'player',
            'foreign_key' => 'id'
        ]
    ];*/

    public function randomize($amount = 100, $truncate = true)
    {
        if ($truncate) {
            try {
                $match_results = ORM::factory('match_result')->find_all();
            } catch (Kohana_Exception $e) {
            }
            foreach ($match_results as $match_result) {
                $match_result->delete();
            }
        }

        for ($i = 1; $i <= 100; $i++) {
            $match = ORM::factory("match")->order_by("id")->limit(1)->offset($i - 1)->find();
            $match_id = $match->id;
            $teams = [$match->team_1_id, $match->team_2_id];

            for ($k = 0; $k < 2; $k++) {
                $team_id = $teams[$k];

                for ($j = 1; $j <= 5; $j++) {
                    $player_id = ORM::factory("player")->where("team_id", "=", $team_id)->limit(1)->offset($j - 1)->find()->id;
                    $unit_id = rand(1, 114);

                    $gold = rand(10000, 20000);
                    $creep_kills = rand(30, 100);
                    $creep_denied = rand(1, 10);
                    $kills = rand(1, 30);
                    $deathes = rand(1, 30);
                    $assist = rand(1, 20);
                    $damage = rand(5000, 30000);

                    ORM::factory('match_result')
                        ->set("match_id", $match_id)
                        ->set("player_id", $player_id)
                        ->set("unit_id", $unit_id)
                        ->set("team_id", $team_id)
                        ->set("gold", $gold)
                        ->set("creep_kills", $creep_kills)
                        ->set("creep_denied", $creep_denied)
                        ->set("kills", $kills)
                        ->set("deathes", $deathes)
                        ->set("assist", $assist)
                        ->set("damage", $damage)
                        ->save();
                }
            }
        }
    }
}