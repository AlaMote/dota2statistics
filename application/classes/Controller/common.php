<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Common extends Controller_Template
{
    public $template = 'templates/default';

    public $title = "title";
    public $meta_keywords = "meta_keywords";
    public $meta_description = "meta_description";
    public $meta_copywrite = "meta_copywrite";
    public $styles = [];
    public $scripts = [];
    public $header = "";
    public $content = "";
    public $footer = "";

    /**
     * Initialize properties before running the controller methods (actions),
     * so they are available to our action.
     */
    public function before()
    {
        // Run anything that need ot run before this.
        parent::before();

        if ($this->auto_render) {
            // Initialize empty values
            $this->template->title = $this->title;
            $this->template->meta_keywords = $this->meta_keywords;
            $this->template->meta_description = $this->meta_description;
            $this->template->meta_copywrite = $this->meta_copywrite;
            $this->template->header = "";
            $this->template->content = $this->content;
            $this->template->footer = $this->footer;
            $this->template->styles = $this->styles;
            $this->template->scripts = $this->scripts;
        }
    }

    /**
     * Fill in default values for our properties before rendering the output.
     */
    public function after()
    {
        if ($this->auto_render) {
            // Define defaults
            $styles = [
                'screen.css' => 'screen',
                'print.css' => 'print',
                'bootstrap.css' => 'screen',
                'reset.css' => 'screen'
            ];
            $scripts = [
                'script.js',
                'bootstrap.js',
                'jquery-3.1.1.min.js'
            ];

            // Add defaults to template variables.
            $this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
            $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
        }

        // Run anything that needs to run after this.
        parent::after();
    }
}