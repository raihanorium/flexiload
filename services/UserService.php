<?php
/**
 * Created by IntelliJ IDEA.
 * User: ataul.raihan
 * Date: 10/17/2016
 * Time: 3:29 PM
 */

namespace services;


use model\User;

class UserService {
    public function create($user) {
        if (!($user instanceof User)) {
            throw new \Exception('User is not an instance of class');
        }

        $db = new Database();
        $db->updateQuery(
            "INSERT INTO user(username, email, full_name, password) VALUES (:username, :email, :full_name, :password)",
            array(
                ':username' => $user->username,
                ':email' => $user->email,
                ':full_name' => $user->full_name,
                ':password' => $user->password
            )
        );
    }

    public function getAll() {
        $db = new Database();
        return $db->selectQuery("select * from user", User::class);
    }
}