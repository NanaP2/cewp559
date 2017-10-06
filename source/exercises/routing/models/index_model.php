<?php

class IndexModel
{
    public $title;
    public $description;

    public function __construct(){
        $this->title = 'Home';
        $this->description = 'Welcome';
    }
}