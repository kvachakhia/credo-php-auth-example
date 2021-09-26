<?php
require_once('db/config.php');
$msg = "";
$conn = connect();


if (isset($_POST['submited'])) {
    if (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['passport_id']) && empty($_POST['email']) && empty($_POST['password'])) {
        $msg = "Please complete the form to Update user";
    } elseif (strlen($_POST['passport_id']) != 11) {
        $msg = "Passport ID Must consist of 11 characters";
    } elseif (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $msg = "Password must be between 5 and 20 characters";
    } else {
        try {

            if (isset($_FILES["avatar"]) &&  !empty($_FILES["avatar"]["name"])) {
                $filename = $_FILES["avatar"]["name"];
                $tempname = $_FILES["avatar"]["tmp_name"];
                $folder = "upload/" . $_SESSION['passport_id'] . "/" .  $filename;

                $path = "upload/" . $_SESSION['passport_id'] . "";
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                move_uploaded_file($tempname, $folder);
            }


            $sql = "UPDATE users SET first_name=:first_name, last_name=:last_name, passport_id=:passport_id,email=:email,biography=:biography,avatar=:avatar,password=:password WHERE passport_id = :passport_id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                ':first_name' => trim($_POST['first_name']),
                ':last_name' => trim($_POST['last_name']),
                ':passport_id' => trim($_SESSION['passport_id']),
                ':email' => trim($_POST['email']),
                ':biography' => trim($_POST['biography']),
                ':avatar' => isset($folder) ? $folder : '',
                ':password' => password_hash(trim($_POST['password']), PASSWORD_DEFAULT)
            ]);
            $msg  = 'User Updated Successfully';
        } catch (PDOException $e) {
            $msg = $e->getMessage();
        }
    }
}
$_SESSION['msg'] = $msg;

header('Location: /user/dashboard ');
exit();
