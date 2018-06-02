<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Common
{
    public function action_index()
    {
        $this->template->title = "Главная | Dota 2 Statistics";
        $this->template->content = View::factory("pages/index");
    }

}

