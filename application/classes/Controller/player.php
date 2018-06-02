<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_Common
{
    public function action_player()
    {
        $id = intval($this->request->param('id'));


        $this->template->title = "Информация об игроке | Dota 2 Statistics";
        $this->template->content = View::factory("pages/player");
    }

    public function action_players() {

        //ORM::factory("player")->randomize(1000);

        $players = ORM::factory("player")->limit('100')->find_all();


        $this->template->title = "Игроки | Dota 2 Statistics";
        $this->template->content = View::factory("pages/players");

        $this->template->players = $players;

    }
}

