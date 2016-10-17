<?php
require_once 'services/UserService.php';
$userService = new \services\UserService();
try {
    $userService->logOut();
} catch (Exception $e) {
    echo $e->getMessage();
}