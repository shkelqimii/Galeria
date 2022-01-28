<?php
    require './controllers/AuthController.php';

    $user = new AuthController;

    if(isset($_POST['submitted'])) {
        $user->login($_POST);
    }
?>
