<?php
require_once('db/config.php');
$msg = "";
$conn = connect();

session_destroy();

if (isset($_POST['submited'])) {
    if (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['passport_id']) && empty($_POST['email']) && empty($_POST['password'])) {
        $msg = "Please complete the form to add a new user";
    } elseif (strlen($_POST['passport_id']) != 11) {
        $msg = "Passport ID Must consist of 11 characters";
    } elseif (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $msg = "Password must be between 5 and 20 characters";
    } else {

        try {

            $sql = "INSERT INTO users (first_name, last_name, passport_id,email,biography,password) VALUES (:first_name, :last_name, :passport_id,:email,:biography,:password)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':first_name' => trim($_POST['first_name']),
                ':last_name' => trim($_POST['last_name']),
                ':passport_id' => trim($_POST['passport_id']),
                ':email' => trim($_POST['email']),
                ':biography' => trim($_POST['biography']),
                ':password' => password_hash(trim($_POST['password']), PASSWORD_DEFAULT)
            ]);
            $msg  = 'User added Successfully';
        } catch (PDOException $e) {
            $msg = $e->getMessage();

        }
    }
}

session_start();
$_SESSION['msg'] = $msg;
header('Location: /register ');
exit();
