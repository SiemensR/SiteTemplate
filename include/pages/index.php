<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('The contents are available only after <a href="../login.php">login</a>');
}
//Abfrage der Nutzer ID vom Login
$user = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../../templating/meta-config.html'); ?>
</head>
<body>
  <?php include('../header.php'); // echo "<br />\n";?>
  <?php include('../menu.php'); ?>
    <div class="container">
    <h1>Hello <?php echo $user; ?>!</h1>
</div>
    <?php include('../footer.php'); ?>
    <?php include('../../templating/support-scripts.html'); ?>
  </body>
</html>
