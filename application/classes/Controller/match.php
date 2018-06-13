<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Match extends Controller_Common
{
    public function action_index()
    {
        $match_id = $this->request->param('id');

        if ($match_id == "rand") {
            ORM::factory("match")->randomize();
            ORM::factory("match_result")->randomize();
        }

        if ($match_id == NULL) {
            $this->template->title = "Матчи | Dota 2 Statistics";
            $this->template->content = View::factory("pages/matches");

            $matches = ORM::factory("match")->order_by("date", "desc")->limit("100")->find_all();
            $this->template->content->matches = $matches;
        }
        else {
            $this->template->title = "Информация о матче | Dota 2 Statistics";
            $this->template->content = View::factory("pages/match");

            $match = ORM::factory("match", $match_id);
            if ($match->loaded()) {
                $this->template->content->match = $match;
            } else {
                $this->template->content->match = "not_found";
            }
        }
    }
}

