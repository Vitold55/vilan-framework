<?php

namespace core\base;

class View {

    public $route = [];
    public $view;
    public $layout;

    public function __construct($route, $layout = '', $view = '') {
        $this->route = $route;
        $this->layout = $layout ? : LAYOUT;
        $this->view = $view;
    }

    public function render() {
        $fileView = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        // Dont`t show content, put all content to buffer
        ob_start();
        if (is_file($fileView)) {
            require $fileView;
        } else {
            echo "<p>View <b>$fileView</b> not found</p>";
        }
        // Get content from buffer
        $content = ob_get_clean();
    }

}