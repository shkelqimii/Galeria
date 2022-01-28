<?php
    require './controllers/UserController.php';

    $user = new UserController;

    if(isset($_GET['id'])) {
        $userId = $_GET['id'];
    }

    $currenUser = $user->edit($userId);

    if(isset($_POST['submitted'])) {
        $user->update($userId, $_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="" method="POST">
        <input type="text" value="<?php echo $currenUser['name']; ?>" name="fullName">
        <input type="text" value="<?php echo $currenUser['email']; ?>" name="email">
        <input type="checkbox" <?php echo $currenUser['is_admin'] === '1' ? 'checked' : '' ?> name="is_admin">
        <button type="submit" name="submitted">UPDATE</button>
    </form>
</body>
</html>
