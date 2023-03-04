<?php
session_start();

if(!isset($_SESSION['username'])){
    ?>
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
    <title>Redirect</title>
</head>

<body>
    <div class="content">
        <div class="innerContent">
            <h1 class="text-center">Redirect</h1>

            <section class="textContent">
                <h2 class="text-center">You don't have access!</h2>
            </section>
        </div>
    </div>
</body>

</html>

<?php
header( "refresh:3;url=public.php" );
}
else {
    ?>

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
    <title>Redirect</title>
</head>

<body>
    <div class="content">
        <div class="innerContent">
            <h1 class="text-center">Redirect</h1>

            <section class="textContent d-flex justify-content-center align-items-center">
                <h2 class="text-center">You now have access! This could be a control panel page.</h2>
                <a href="./public.php">
                    <input type="button" value="Main page" />
                </a>
            </section>
        </div>
    </div>
</body>

</html>

<?php
}


?>