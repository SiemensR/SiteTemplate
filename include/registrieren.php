<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=testo', 'root', '');
?>
<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Login/Logout animation concept</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    <link rel="stylesheet" href="../static/css/main.min.css">


</head>
<body>
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll

if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Please enter your email<br>';
        $error = true;
    }
    if(strlen($passwort) == 0) {
        echo 'Please enter your password<br>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo 'Passwords should be the same<br>';
        $error = true;
    }

    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) {
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();

        if($user !== false) {
            echo 'This email has been already used<br>';
            $error = true;
        }
    }

    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

        $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));

        if($result) {
            // echo 'You have been successfully registered. <a href="login.php">Zum Login</a>';
            header("Location: login.php");
            die();
            $showFormular = false;
        } else {
            echo 'Ooops! Something went wrong! We could not save your data :(<br>';
        }
    }
}

if($showFormular) {
?>

<?php
}  //Ende von if($showFormular)
?>

<!-- -->
<div class="cont">
    <div class="demo">
        <div class="register">
            <div class="register__check"></div>
            <form action="?register=1" method="post">
                <div class="register__form">
                    <div class="register__row">
                        <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                        </svg>
                        <input type="email" class="login__input name" name="email" placeholder="Email">
                    </div>
                    <div class="register__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" class="login__input pass" name="passwort" placeholder="Password">
                    </div>
                    <div class="register__row">
                        <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                        </svg>
                        <input type="password" class="login__input pass" name="passwort2" placeholder="Repeat password">
                    </div>
                    <input type="submit" class="login__submit" value="Register me">
            </form>
            <p class="register__signup">Back to  <a href="login.php">login</a></p>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../static/js/index.js"></script>
</body>
</html>
