<?php

if (empty($_SESSION) && !$_SESSION['passport_id']) {
    header("location: /");
    die();
}

require_once('db/config.php');
$conn = connect();

$query = "SELECT * FROM users WHERE passport_id = :passport_id";
$statement = $conn->prepare($query);
$statement->execute(['passport_id' => $_SESSION["passport_id"]]);

$user = $statement->fetch(PDO::FETCH_ASSOC);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credo Bank</title>
    <?php include 'partials/head.php' ?>

</head>

<body>

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <?php if (!empty($msg)) : ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $msg ?>
            </div>
        <?php endif; ?>
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="/assets/images/logo.svg" class="logo">

                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <div class="profile-area">

                                <img src="/<?php echo  !empty($user['avatar']) ? $user['avatar'] : 'assets/images/banner.jpeg' ?>" class="profile_pic">
                                <span>

                                    <?php echo $user['first_name'] ?>
                                    <?php echo $user['last_name'] ?>
                                </span>
                                <span class="passport">
                                    <?php echo $user['passport_id'] ?>
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <?php include 'partials/forms/edit_profile.php' ?>

                    </div>
                </div>
            </div>

            <?php include 'partials/footer.php' ?>


        </div>
    </div>

</body>

</html>