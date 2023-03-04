<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./styles.css" type="text/css">
    <title>Main page</title>
</head>

<body>
    <div class="content">
        <div class="innerContent">
            <h1 class="text-center">Main page</h1>

            <section class="textContent">
                <div class="text-center d-flex justify-content-center align-items-center">
                    <?php if(isset($_SESSION["username"])) {
            ?>
                    <div>
                        <input type="button" value="Logout" onclick="pushToLogout()" />
                    </div>
                    <?php
          }
          else {
            ?>
                    <div style="margin-right: 1em">You can log in here:</div>
                    <div>
                        <input type="button" value="Login" onclick="pushToLogin()" />
                    </div>
                    <?php } ?>
                    <input type="button" value="Protected page" onclick="pushToProtected()" />
                </div>
            </section>
        </div>
    </div>
</body>

</html>

<script>
function pushToLogin() {
    window.location.pathname = '/prioris_php/login.php'
}

function pushToLogout() {
    window.location.pathname = '/prioris_php/logout.php'
}

function pushToProtected() {
    window.location.pathname = '/prioris_php/protected.php'
}
</script>


<?php

?>