<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Team extends ORM
{
    protected $_belongs_to = array(
        'country' => array(
            'model' => 'country',
            'foreign_key' => 'country_id',
        ),
        "match_result" => [
            "model" => "match_result",
            'foreign_key' => 'team_id',
        ]
    );
    protected $_has_many = array(
        'players' => array(
            'model' => 'player',
            'foreign_key' => 'team_id',
        ),
    );
}