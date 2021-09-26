<?php

require_once('db/config.php');
$msg = "";
$conn = connect();
session_start();

if (isset($_POST["login"])) {
    if (empty($_POST["passport_id"]) || empty($_POST["password"])) {
        $msg = 'All fields are required';
    } else {
        $query = "SELECT * FROM users WHERE passport_id = :passport_id";
        $statement = $conn->prepare($query);
        $statement->execute(
            [
                'passport_id'  => $_POST["passport_id"]
            ]
        );

        $user = $statement->fetch();
        $verify_password = password_verify($_POST['password'], $user['password']);

        if ($user & $verify_password) {
            $_SESSION["passport_id"] = $_POST["passport_id"];

            header("location: /user/dashboard");
            die();
        } else {
            $msg = 'Wrong Data';
        }
    }
}


$_SESSION['msg'] = $msg;
header('Location: / ');
exit();
