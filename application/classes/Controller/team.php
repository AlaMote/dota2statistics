<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Team extends Controller_Common
{
    public function action_index()
    {
        $team_id = $this->request->param('id');

        if ($team_id == NULL) {
            $this->template->title = "Команды | Dota 2 Statistics";
            $this->template->content = View::factory("pages/teams");

            $teams = ORM::factory("team")->order_by("title")->limit("100")->find_all();
            $this->template->content->teams = $teams;

        }
        else {
            $this->template->title = "Информация о команде | Dota 2 Statistics";
            $this->template->content = View::factory("pages/team");

            $team = ORM::factory("team", $team_id);
            if ($team->loaded()) {
                $this->template->content->team = $team;
            } else {
                $team = ORM::factory("team", $team_id)->where("title", "=", $team_id)->find();
                if ($team->loaded()) {
                    $this->template->content->team = $team;
                } else {
                    $this->template->content->team = "not_found";
                }
            }
        }
    }
}

