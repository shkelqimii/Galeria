<?php

class Database
{
    public $pdo;

    public function __construct()
    {
        try{
            session_start();
            $link = new PDO('mysql:host=localhost;dbname=Galeria', 'root', '');
            $this->pdo = $link;
        }catch(PDOException $e) {
            die('DIE'. $e->getMessage());
        }
    }
}

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT id,username,password,is_admin FROM users WHERE username = :username');
        $query->bindParam(':username', $request['username']);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = $user['is_admin'];

            header("Location: C:\xampp\htdocs\galeria\index-1.php");
        }
    }
}
