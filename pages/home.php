<?php

if (isset($_SESSION['passport_id']) && $_SESSION['passport_id']) {
    header("location: /user/dashboard");
    die();
}

if (!empty($_SESSION)) {
    $msg = $_SESSION['msg'];
}

session_destroy();

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
                        <div class="row"> <img src="/assets/images/logo.svg" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="/assets/images/banner.jpeg" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <?php include 'partials/forms/login.php' ?>

                    </div>
                </div>
            </div>

            <?php include 'partials/footer.php' ?>


        </div>
    </div>

</body>

</html>