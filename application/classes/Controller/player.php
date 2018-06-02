<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Player extends Controller_Common
{
    public function action_index()
    {
        $player_id = $this->request->param('id');

        if ($player_id == NULL) {
            //ORM::factory("player")->randomize(500);

            $this->template->title = "Игроки | Dota 2 Statistics";
            $this->template->content = View::factory("pages/players");

            $players = ORM::factory("player")->order_by('name')->limit('100')->find_all();

            $this->template->content->players = $players;
        }
        else {
            $this->template->title = "Информация об игроке | Dota 2 Statistics";
            $this->template->content = View::factory("pages/player");

            $player = ORM::factory("player", $player_id);
            if ($player->loaded()) {
                $this->template->content->player = $player;
            }
            else {
                $player = ORM::factory("player")->where("nick", "=", $player_id)->find();
                if ($player->loaded()) {
                    $this->template->content->player = $player;
                }
                else {
                    $this->template->content->player = "not_found";
                }
            }
        }


    }
}

