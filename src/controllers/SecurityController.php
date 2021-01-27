<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../support/Authorization.php';

class SecurityController extends AppController {

    private $userRepository;

    private $authorization;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->authorization = new Authorization();
    }

    public function login()
    {
        if ($this->authorization->checkIfAuthenticated()) {
            $this->redirect('/home');
        }

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!$this->authorization->login($email, $password)) {
            return $this->render('login', ['messages' => ['User not found!']]);
        }

        $this->redirect('/home');
    }

    public function logout()
    {
        $this->authorization->logout();
        $this->redirect('/login');
    }

    public function register()
    {
        if ($this->authorization->checkIfAuthenticated()) {
            $this->redirect('/home');
        }

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $options = [
            'cost' => 12,
        ];

        $user = new User(null, $email, password_hash($password, PASSWORD_BCRYPT, $options), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }
}