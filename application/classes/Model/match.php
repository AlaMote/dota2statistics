<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Match extends ORM
{
    protected $_has_many = array(
        'match_results' => array(
            'model' => 'match_result',
            'foreign_key' => 'match_id',
        ),
    );

    protected $_belongs_to = [
        "team_1" => [
            'model' => 'team',
            'foreign_key' => 'team_1_id',
        ],
        "team_2" => [
            'model' => 'team',
            'foreign_key' => 'team_2_id',
        ]
    ];

    public function randomize($amount = 100, $truncate = true) {
        if ($truncate) {
            try {
                $matches = ORM::factory('match')->find_all();
            } catch (Kohana_Exception $e) {
            }
            foreach ($matches as $match) {
                $match->delete();
            }
        }

        for ($i = 0; $i < $amount; $i++) {
            try {
                $team_1_score = rand(20, 60);
                $team_2_score = rand(20, 60);

                $team_1_id = rand(1, 100);
                $team_2_id = rand(1, 100);

                $date = rand(2015, 2018) . "-" . rand(1, 12) . "-" . rand(1, 28);

                ORM::factory('match')
                    ->set("date", $date)
                    ->set("team_1_id", $team_1_id)
                    ->set("team_2_id", $team_2_id)
                    ->set("team_1_score", $team_1_score)
                    ->set("team_2_score", $team_2_score)
                    ->save();

            } catch (Kohana_Exception $e) {}
        }
    }
}