<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=testo', 'root', '');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];

    $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        $_SESSION['name'] = $user['email'];
        function Redirect($url, $permanent = false)
        {
            header('Location: ' . $url, true, $permanent ? 301 : 302);
            exit();
        }
        Redirect('pages/index.php', false);
    } else {
        $errorMessage = "E-Mail or Password was wrong<br>";
    }

}
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
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <form action="?login=1" method="post">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="email" class="login__input name" name="email" placeholder="Email">
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="passwort" placeholder="Password">
        </div>
        <input type="submit" class="login__submit" value="Login">
        </form>
        <p class="login__signup">Don't have an account? &nbsp;<a href="registrieren.php">Sign up</a></p>
      </div>
    </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="../static/js/index.js"></script>
</body>
</html>
