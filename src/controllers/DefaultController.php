<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('start');
    }

    public function home()
    {
        $this->render('home', [
            'projects' => [],
            'projectsLogged' => []
        ]);
    }

    public function start()
    {
        $this->render('start');
    }
}
