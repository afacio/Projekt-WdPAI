<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function login()
    {
        $this->render('login');
    }

    public function register()
    {
        $this->render('register');
    }

    public function home()
    {
        $this->render('home');
    }

    public function start()
    {
        $this->render('start');
    }
    public function galeria()
    {
        $this->render('galeria');
    }
    public function odkryj()
    {
        $this->render('odkryj');
    }
    public function upload()
    {
        $this->render('upload');
    }
}
