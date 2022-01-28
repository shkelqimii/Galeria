<?php
    require 'controllers/UserController.php';

    $user = new UserController;

    if(isset($_POST['submit'])) {
        $user->store($_POST);
    }
?>
