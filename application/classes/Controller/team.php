<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Common
{
    public function action_index()
    {
        $team_id = intval($this->request->param('id'));

        $team_info = ORM::factory("team", $team_id);

        $team_title = "";
        $team_country = "";
        //$players = ORM::factory("player")->where("team_id", "=", $team_id)->find_all();

        $this->template->title = "Информация о команде | Dota 2 Statistics";
        $this->template->content = View::factory("pages/team");

        $this->template->content->team_title = $team_info->title;
        $this->template->content->team_country = $team_info->country->country;
        $this->template->content->players = $team_info->players;
    }
}

