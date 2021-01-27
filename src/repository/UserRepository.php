<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{

    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT u.id, u.email, u.password, ud.name, ud.surname, ud.phone FROM users u LEFT JOIN users_details ud 
            ON u.id = ud.id WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password)
            VALUES (?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword()
        ]);

        $tmpUser = $this->getUser($user->getEmail());

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (id, name, surname, phone)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $tmpUser->getId(),
            $user->getName(),
            $user->getSurname(),
            $user->getPhone()
        ]);
    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND phone = :phone
        ');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }
}