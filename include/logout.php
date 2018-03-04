<?php
session_start();
session_destroy();
echo "Logout successful";
function Redirect($url, $permanent = false)
{
    sleep(3);
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
}
Redirect('login.php', false);
?>
