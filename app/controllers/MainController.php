<?php

namespace app\controllers;

class MainController extends AppController {

    // If we want use one layout to all actions
//    public $layout = 'main';

    public function indexAction() {

        // For AJAX queries
//        $this->layout = false;
        // Only for this action
        $this->layout = 'main';
//        $this->view = 'test';

        $this->set([
            'name' => 'Victor',
            'age' => 27,
            'colors' => [
                'white' => '#fff',
                'black' => '#000'
            ]
        ]);

    }

}