<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Country extends ORM
{
    protected $_has_many = array(
        'teams' => array(
            'model' => 'team',
            'foreign_key' => 'country_id',
        ),
    );
}