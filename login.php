<?php
session_start();

include('./database.php');

if(!isset($_SESSION["username"])){
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $connection -> prepare("SELECT id FROM users WHERE username = ? and password = ?");
$stmt->execute([$username,$password]);
$users = $stmt->get_result();
$userFound = count($users->fetch_all())>0;
if($userFound) {$_SESSION["username"] = $username;}
}

if(isset($_SESSION["username"])){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./styles.css" />
    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="innerContent">
            <h2 class="text-center my-2">
                Successfully logged in!
            </h2>
        </div>
    </div>
</body>

</html>
<?php
header( "refresh:3;url=public.php" );
}
else {
    $username = null;
    $password = null;
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./styles.css" />
    <title>Login</title>
</head>

<body>
    <div class="content">
        <div class="innerContent d-flex justify-content-center align-items-center">
            <form method="POST" action="./login.php" style="margin: 4em;">
                <input type="text" name="username" id="username" placeholder="Username" />
                <input type="password" name="password" id="password" placeholder="Password" />
                <input type="submit" value="Login" />
            </form>
        </div>
    </div>
</body>

</html>

<?php
}


?>