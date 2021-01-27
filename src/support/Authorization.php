<?php

require_once __DIR__ . './../repository/UserRepository.php';

class Authorization
{
    public function login($email, $password)
    {
        $userRepository = new UserRepository();
        $user = $userRepository->getUser($email);

        if (!$user) {
            return false;
        }

        if (password_verify($password, $user->getPassword())) {
            $_SESSION['logged'] = true;
            $_SESSION['user_email'] = $user->getEmail();

            return true;
        }

        return false;

    }

    public function logout()
    {
        if ($this->checkIfAuthenticated()) {
            $_SESSION['logged'] = false;
            unset($_SESSION['user_email']);
        }
    }

    public function checkIfAuthenticated()
    {
        if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
            return false;
        }

        return true;
    }

    public function getAuthenticated()
    {
        if ($this->checkIfAuthenticated()) {
            $userRepository = new UserRepository();

            return $userRepository->getUser($_SESSION['user_email']);
        }
    }
}