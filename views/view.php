<?php

class Vue{
    private $file;

    private $title;

    public function __construct($action){
        $this->file = 'views/'.ucfirst($action).'.php';
    }

    public function render($data){
        extract($data);
        ob_start();
        require $this->file;
        $content = ob_get_clean();

        require 'views/template.php';
    }
}