<form action="" method="POST" role="form" class="col-sm-offset-3 col-sm-6">
    <legend>Login</legend>

    <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username"
               required="required">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
               required="required">
    </div>


    <button type="submit" name="submit" class="btn btn-primary">Login</button>
</form>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once 'services/UserService.php';
    $userService = new \services\UserService();
    try {
        $userService->login($username, $password);
    } catch (Exception $e) {
        require_once 'services/ErrorService.php';
        $errorService = new \services\ErrorService();
        $errorService->setError($e->getMessage());
    }
}