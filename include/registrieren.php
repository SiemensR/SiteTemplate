<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=testo', 'root', 'root');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
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

<form action="?register=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>

Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>

Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>

<input type="submit" value="Abschicken">
</form>

<?php
}  //Ende von if($showFormular)
?>

</body>
</html>
